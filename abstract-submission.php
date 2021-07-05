<?php
session_start();

$is_secure = true;

$page_name = "abstract-submission";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_abstract-submission.php";
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

      #spn-photo-result {
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

          #spn-photo-result {
              margin: 16px 0 0 0;
              width: 100%;
          }

          .photo-row {
              flex-direction: column;
          }
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
            <h3 class="center-text sec-h3"><?php echo($lang_abs_sub["bildiri_ozeti_gonderim_formu"][$pref_lang]); ?></h3>
            <form action="#" id="frm-abstract">
              <!-- Row -->
              <div class="row">
                <div class="col-6">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="txt-name-surname"/>
                    <label class="mdl-textfield__label" for="txt-name-surname">Ad Soyad</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="txt-institution"/>
                    <label class="mdl-textfield__label" for="txt-institution">Kurum</label>
                  </div>
                </div>
              </div>
              <!-- Row -->
              <div class="row">
                <div class="col-6">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="txt-email"/>
                    <label class="mdl-textfield__label" for="txt-email">Email</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="txt-phone"/>
                    <label class="mdl-textfield__label" for="txt-phone">Telefon</label>
                  </div>
                </div>
              </div>
              <!-- Row -->
              <div class="row">
                <div class="col-12">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <textarea class="mdl-textfield__input" rows="3" id="txt-address"></textarea>
                    <label class="mdl-textfield__label" for="txt-address">Adres</label>
                  </div>
                </div>
              </div>
              <!-- Row -->
              <div class="row">
                <div class="col-6">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="txt-zip"/>
                    <label class="mdl-textfield__label" for="txt-zip">Posta Kodu</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="txt-country"/>
                    <label class="mdl-textfield__label" for="txt-country">Ülke</label>
                  </div>
                </div>
              </div>
              <!-- Row -->
              <div class="row">
                <div class="col-12">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <textarea class="mdl-textfield__input" rows="3" id="txt-cv"></textarea>
                    <label class="mdl-textfield__label" for="txt-cv">Kısa Özgeçmiş</label>
                  </div>
                </div>
              </div>
              <!-- Row -->
              <div class="row">
                <div class="col-12 photo-row">
                  <label
                      for="fup-photo"
                      class="
                          photo-label
                          mdl-button mdl-js-button
                          mdl-button--raised
                          mdl-js-ripple-effect
                          mdl-button--accent
                        "
                  >
                    Fotoğraf Yükleyiniz
                  </label>
                  <input type="file" id="fup-photo" name="fup-photo"/>
                  <span id="spn-photo-result">Fotoğraf seçilmedi.</span>
                </div>
              </div>
              <!-- Row -->
              <div class="row">
                <div class="col-12">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="txt-abstract-title"/>
                    <label class="mdl-textfield__label" for="txt-abstract-title">Özet Başlığı</label>
                  </div>
                </div>
              </div>
              <!-- Row -->
              <div class="row">
                <div class="col-12">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="txt-abstract-writers"/>
                    <label class="mdl-textfield__label" for="txt-abstract-writers">Yazar(lar)</label>
                  </div>
                </div>
              </div>
              <!-- Row -->
              <div class="row">
                <div class="col-12">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <textarea class="mdl-textfield__input" rows="18" id="txt-abstract"></textarea>
                    <label class="mdl-textfield__label" for="txt-abstract">Özet Metni</label>
                  </div>
                </div>
              </div>
              <!-- Row -->
              <div class="row">
                <div class="col-12">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="txt-abstract-keywords"/>
                    <label class="mdl-textfield__label" for="txt-abstract-keywords">Anahtar Kelimeler</label>
                  </div>
                </div>
              </div>
              <!-- Row -->
              <div class="row">
                <div class="col-12">
                  <button
                      type="submit"
                      form="frm-abstract"
                      class="
                          full-width
                          mdl-button mdl-js-button
                          mdl-button--raised
                          mdl-js-ripple-effect
                          mdl-button--accent
                        "
                  >
                    Gönder
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

<script src="js/material.js"></script>
<script>
    (function () {
        // auto run
        const file = document.querySelector("#fup-photo");
        const fileInfo = document.querySelector("#spn-photo-result");
        file.addEventListener("change", (e) => {
            const [file] = e.target.files;
            const {name: fileName, size} = file;
            const fileSize = (size / 1000).toFixed(2);
            fileInfo.innerHTML = fileName + " - " + fileSize + "KB";
        });
        // end
    })();
</script>
</body>
</html>
