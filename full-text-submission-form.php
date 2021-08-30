<?php
session_start();

$is_secure = true;

$page_name = "full-text-submission";

$email_body = " ";

$form_posted = false;
$form_result = "";
$visitor_name = "";

function is_null_or_empty_string($str): bool
{
    return (!isset($str) || trim($str) === '');
}

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_full-text-submission.php";

if ($_POST) {
    $form_posted = true;

    $visitor_name = "";
    $visitor_email = "";
    $visitor_phone = "";
    $email_body = "<div>";

    if (isset($_POST['txt-name-surname'])) {
        $visitor_name = filter_var(trim($_POST['txt-name-surname']), FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Ad Soyad:</b></label>&nbsp;<span>" . $visitor_name . "</span>
                        </div>";
    }

    if (isset($_POST['txt-email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['txt-email']);
        $visitor_email = filter_var(trim($_POST['txt-email']), FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Email:</b></label>&nbsp;<span>" . $visitor_email . "</span>
                        </div>";
    }

    if (isset($_POST['txt-phone'])) {
        $visitor_phone = filter_var($_POST['txt-phone'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Tel:</b></label>&nbsp;<span>" . $visitor_phone . "</span>
                        </div>";
    }

    $form_result = $lang_full_text_sub["uzgunuz"][$pref_lang];

    if (!is_null_or_empty_string($visitor_name) &&
        !is_null_or_empty_string($visitor_email) &&
        !is_null_or_empty_string($visitor_phone)) {
        $recipient = "contact@hisarliahmet.org";
        $email_body .= "</div>";

        $headers = 'MIME-Version: 1.0' . "\r\n"
            . 'Content-type: text/html; charset=utf-8' . "\r\n"
            . 'From: ' . $visitor_email . "\r\n";

        error_reporting(0);
        if (mail($recipient, "Tam Metin Gönderim Formu", $email_body, $headers)) {
            $form_result = $lang_full_text_sub["iletilmistir"][$pref_lang];
        } else {
            // $form_result .= "<br>Email hatası.";
        }
    } else {
        /*
          $form_result .= "<br>Eksik alanlar var.<br>" . "Ad:" . $visitor_name . "<br>" .
              "Email:" . $visitor_email . "<br>" . "Tel:" . $visitor_phone . "<br>" . "Msg:" . $visitor_message . "<br>" . var_dump($_POST);
        */
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("modules/header_includes.php"); ?>
  <style type="text/css">
      .pad-25-per {
          padding: 0 20%;
      }

      .sec-wrap {
          padding: 16px;
      }

      .row {
          display: flex;
          flex-direction: row;
      }

      .row .col-12 {
          box-sizing: border-box;
          width: 100%;
          padding-left: 16px;
          padding-right: 16px;
      }

      .row .col-6 {
          box-sizing: border-box;
          width: 50%;
          padding-left: 16px;
          padding-right: 16px;
      }

      .mdl-textfield {
          width: 100%;
      }

      input[type="text"],
      textarea.mdl-textfield__input {
          background-color: #f2f3f4;
          padding: 12px;
          margin: 0;
          box-sizing: border-box;
          color: inherit;
      }

      button.full-width {
          width: 100%;
      }

      input[type="file"] {
          opacity: 0;
          width: 0.1px;
          height: 0.1px;
      }

      #spn-text-submission-result {
          margin-left: 12px;
          font-style: italic;
      }

      .photo-row {
          display: flex;
          flex-direction: row;
          align-items: center;
          margin-bottom: 16px;
      }

      @media (max-width: 1023px) {
          .pad-25-per {
              padding: 0 10%;
          }
      }

      @media (max-width: 839px) {
          .row {
              display: flex;
              flex-direction: column;
          }

          .row .col-6 {
              width: 100%;
              padding-left: 16px;
              padding-right: 16px;
          }

          .sec-wrap {
              padding: 16px 0;
          }

          .pad-25-per {
              padding: 0 40px;
          }

          .row .col-12,
          .row .col-6 {
              padding-left: 0;
              padding-right: 0;
          }

          .photo-label {
              width: 100%;
              box-sizing: border-box;
          }

          #spn-text-submission-result {
              margin: 16px 0 0 0;
              width: 100%;
          }

          .photo-row {
              flex-direction: column;
          }
      }

      #dv-contact-form-result {
          position: fixed;
          left: 0;
          right: 0;
          top: 0;
          bottom: 0;
          background-color: rgba(0, 0, 0, 0.9);
          color: #fff;
          display: flex;
          justify-content: center;
          align-items: center;
          z-index: 111;
          opacity: 1;
          font-size: 24px;
          transition: opacity 800ms;
      }

      #dv-contact-form-result.fade-out {
          opacity: 0;
      }

      .erroneous {
          color: rgb(213, 0, 0);
      }
  </style>
</head>
<body>
<div class="mdl-layout">
  <!-- Navigation -->
    <?php require_once("modules/navigation.php"); ?>
  <!--Eof Navigation -->

  <div class="mdl-layout__content" style="display: flex; flex-direction: column">
    <div style="flex-grow: 1">
      <!-- Banner -->
        <?php require_once("modules/banner.php"); ?>

      <!-- Icerik -->

      <!-- Satir 1 Form -->
      <section class="pad-tb-24">
        <div class="sec-wrap">
          <div class="pad-25-per">
            <h3 class="center-text sec-h3"><?php echo($lang_full_text_sub["tam_metin_gonderim_formu"][$pref_lang]); ?></h3>
            <form action="full-text-submission-form.php" method="post" id="frm-full-text">
              <!-- Row -->
              <div class="row">
                <div class="col-12">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="txt-name-surname" name="txt-name-surname"/>
                    <label class="mdl-textfield__label" for="txt-name-surname">
                        <?php echo($lang_full_text_sub["ad_soyad"][$pref_lang]); ?>
                    </label>
                    <span
                        class="mdl-textfield__error"><?php echo($lang_full_text_sub["bos_birakilamaz"][$pref_lang]); ?></span>
                  </div>
                </div>
              </div>
              <!-- Row -->
              <div class="row">
                <div class="col-6">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="txt-email" name="txt-email"/>
                    <label class="mdl-textfield__label" for="txt-email">
                        <?php echo($lang_full_text_sub["email"][$pref_lang]); ?>
                    </label>
                    <span
                        class="mdl-textfield__error"><?php echo($lang_full_text_sub["bos_birakilamaz"][$pref_lang]); ?></span>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="txt-phone" name="txt-phone"/>
                    <label class="mdl-textfield__label" for="txt-phone">
                        <?php echo($lang_full_text_sub["telefon"][$pref_lang]); ?>
                    </label>
                    <span
                        class="mdl-textfield__error"><?php echo($lang_full_text_sub["bos_birakilamaz"][$pref_lang]); ?></span>
                  </div>
                </div>
              </div>
              <!-- Row -->
              <div class="row" style="margin-top: 16px;">
                <div class="col-12 photo-row">
                  <label
                      for="fup-text-submission"
                      class="
                          photo-label
                          mdl-button mdl-js-button
                          mdl-button--raised
                          mdl-js-ripple-effect
                          mdl-button--accent
                        "
                      style="text-transform: none;"
                  >
                      <?php echo($lang_full_text_sub["tam_metin_dosyasi_yukleme"][$pref_lang]); ?>
                  </label>
                  <input type="file" id="fup-text-submission" name="fup-text-submission"/>
                  <span
                      id="spn-text-submission-result"><?php echo($lang_full_text_sub["dosya_secilmedi"][$pref_lang]); ?></span>
                </div>
              </div>
              <!-- Row -->
              <div class="row" style="margin-top: 16px;">
                <div class="col-12">
                  <button
                      id="btn-submit-form"
                      type="submit"
                      form="frm-full-text"
                      class="
                          full-width
                          mdl-button mdl-js-button
                          mdl-button--raised
                          mdl-js-ripple-effect
                          mdl-button--accent
                        "
                  >
                      <?php echo($lang_full_text_sub["gonder"][$pref_lang]); ?>
                  </button>
                </div>
              </div>
              <!-- Row -->
            </form>
          </div>
        </div>
      </section>

      <!-- Eof Icerik -->
    </div>

    <!-- Footer -->
      <?php require_once("modules/footer.php"); ?>

  </div>
</div>

<?php if ($form_posted) { ?>
  <div id="dv-contact-form-result">
      <?php echo($form_result); ?>
  </div>
<?php } ?>

<script src="js/material.js"></script>
<script>
    let uploadedFileName = "";

    function hideFormResult() {
        let contactFormResultDiv = document.querySelector('#dv-contact-form-result');
        setTimeout(() => {
            contactFormResultDiv.classList.add("fade-out");
            setTimeout(() => {
                contactFormResultDiv.remove();
            }, 1000);
        }, 3000);
    }

    (function () {
        // auto run
        const file = document.querySelector("#fup-text-submission");
        const fileInfo = document.querySelector("#spn-text-submission-result");
        file.addEventListener("change", (e) => {
            const [file] = e.target.files;
            if (file) {
                const {name: fileName, size} = file;
                const fileSize = (size / 1000).toFixed(2);
                uploadedFileName = fileName;
                fileInfo.classList.remove("erroneous");
                fileInfo.innerHTML = fileName + " (" + Math.ceil(fileSize / 1000) + "MB)";
            }
        });

        // submission
        const btnSubmit = document.querySelector("#btn-submit-form");
        const txtNameSurname = document.querySelector("#txt-name-surname");
        const txtEmail = document.querySelector("#txt-email");
        const txtPhone = document.querySelector("#txt-phone");
        btnSubmit.addEventListener('click', (e) => {
            if (!txtNameSurname.value) {
                txtNameSurname.parentNode.classList.add("is-invalid");
                txtNameSurname.focus();
                e.preventDefault();
                return;
            }
            if (!txtEmail.value) {
                txtEmail.parentNode.classList.add("is-invalid");
                txtEmail.focus();
                e.preventDefault();
                return;
            }
            if (!txtPhone.value) {
                txtPhone.parentNode.classList.add("is-invalid");
                txtPhone.focus();
                e.preventDefault();
                return;
            }
            if (!uploadedFileName) {
                fileInfo.innerHTML = '<?php echo($lang_full_text_sub["dosya_secilmelidir"][$pref_lang]); ?>';
                fileInfo.classList.add("erroneous");
                fileInfo.focus();
                e.preventDefault();
                return;
            }
        });
        // form post result
        <?php if ($form_posted) { ?>
        hideFormResult();
        <?php } ?>
        // eof
    })();

</script>
</body>
</html>
