<?php
session_start();

$is_secure = true;

$page_name = "contact";

$email_body = "Hey: ";

$form_posted = false;
$contact_form_result = "";
$visitor_name = "";

function is_null_or_empty_string($str): bool
{
    return (!isset($str) || trim($str) === '');
}

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_contact.php";

if ($_POST) {
    $form_posted = true;
    $visitor_email = "";
    $visitor_phone = "";
    $visitor_message = "";
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

    if (isset($_POST['txt-message'])) {
        $visitor_message = htmlspecialchars(trim($_POST['txt-message']));
        $email_body .= "<div>
                           <label><b>Mesaj:</b></label>
                           <div>" . $visitor_message . "</div>
                        </div>";
    }

    $contact_form_result = $lang_contact["uzgunuz"][$pref_lang];

    if (!is_null_or_empty_string($visitor_name) &&
        !is_null_or_empty_string($visitor_email) &&
        !is_null_or_empty_string($visitor_phone) &&
        !is_null_or_empty_string($visitor_message)) {
        $recipient = "contact@hisarliahmet.org";
        $email_body .= "</div>";

        $headers = 'MIME-Version: 1.0' . "\r\n"
            . 'Content-type: text/html; charset=utf-8' . "\r\n"
            . 'From: ' . $visitor_email . "\r\n";

        if (mail($recipient, "İletişim Formu", $email_body, $headers)) {
            $contact_form_result = $lang_contact["tesekkurler"][$pref_lang] . " " . $visitor_name . ". " . $lang_contact["iletilmistir"][$pref_lang];
        } else {
            // $contact_form_result .= "<br>Email hatası.";
        }
    } else {
        /*
          $contact_form_result .= "<br>Eksik alanlar var.<br>" . "Ad:" . $visitor_name . "<br>" .
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
        .pad-10-per {
            padding: 0 10%;
            text-align: justify;
            margin-left: auto;
            margin-right: auto;
            max-width: 3000px;
        }

        .cerceve {
            border-style: solid;
            border-width: 16px;
            border-color: #bbb;
            padding: 16px;
        }

        h3.sec-h3 {
            margin-bottom: 18px;
        }

        h4.sec-h4 {
            font-size: 24px;
        }

        @media (max-width: 839px) {
            .pad-10-per {
                padding: 0 24px;
            }
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

        .row .col-12,
        .row .col-6 {
            padding-left: 0;
            padding-right: 0;
        }

        .row .col-6.pr-8 {
            padding-right: 8px;
        }

        .row .col-6.pl-8 {
            padding-left: 8px;
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

            .row .col-12,
            .row .col-6,
            .row .col-6.pl-8,
            .row .col-6.pr-8 {
                padding-left: 0;
                padding-right: 0;
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
            <section class="pad-tb-24">
                <div class="pad-10-per">
                    <div class="cerceve">
                        <h3 class="center-text sec-h3"><?php echo($lang_contact["iletisim"][$pref_lang]); ?></h3>
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--12-col-phone">
                                <!-- Iletisim Formu -->
                                <h4 class="sec-h4"><?php echo($lang_contact["iletisim_formu"][$pref_lang]); ?></h4>
                                <form action="contact.php" method="post" id="frm-contact">
                                    <!-- Row -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" id="txt-name-surname"
                                                       name="txt-name-surname"/>
                                                <label class="mdl-textfield__label" for="txt-name-surname">
                                                    <?php echo($lang_contact["ad_soyad"][$pref_lang]); ?>
                                                </label>
                                                <span
                                                        class="mdl-textfield__error"><?php echo($lang_contact["bos_birakilamaz"][$pref_lang]); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row -->
                                    <div class="row">
                                        <div class="col-6 pr-8">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" id="txt-email"
                                                       name="txt-email"/>
                                                <label class="mdl-textfield__label" for="txt-email">
                                                    <?php echo($lang_contact["email"][$pref_lang]); ?>
                                                </label>
                                                <span
                                                        class="mdl-textfield__error"><?php echo($lang_contact["bos_birakilamaz"][$pref_lang]); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-6 pl-8">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" id="txt-phone"
                                                       name="txt-phone"/>
                                                <label class="mdl-textfield__label" for="txt-phone">
                                                    <?php echo($lang_contact["telefon"][$pref_lang]); ?>
                                                </label>
                                                <span
                                                        class="mdl-textfield__error"><?php echo($lang_contact["bos_birakilamaz"][$pref_lang]); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <textarea class="mdl-textfield__input" rows="10" id="txt-message"
                                                          name="txt-message"></textarea>
                                                <label class="mdl-textfield__label" for="txt-message">
                                                    <?php echo($lang_contact["mesaj"][$pref_lang]); ?>
                                                </label>
                                                <span
                                                        class="mdl-textfield__error"><?php echo($lang_contact["bos_birakilamaz"][$pref_lang]); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row -->
                                    <div class="row" style="margin-top: 20px">
                                        <div class="col-12">
                                            <button
                                                    id="btn-submit-form"
                                                    type="submit"
                                                    form="frm-contact"
                                                    class="
                          full-width
                          mdl-button mdl-js-button
                          mdl-button--raised
                          mdl-js-ripple-effect
                          mdl-button--accent
                        "
                                            >
                                                <?php echo($lang_contact["gonder"][$pref_lang]); ?>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Row -->
                                    <!-- Row -->
                                </form>
                                <!-- Eof Iletisim Formu -->
                            </div>
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--12-col-phone">
                                <!-- Iletisim bilgileri -->
                                <h4 class="sec-h4"><?php echo($lang_contact["sempozyum_yeri"][$pref_lang]); ?></h4>
                                <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3296.3611547822134!2d29.89922439261277!3d39.47849173429776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c946c1716258cf%3A0xe420cecc54d9232d!2zS8O8dGFoeWEgU2HEn2zEsWsgQmlsaW1sZXJpIMOcbml2ZXJzaXRlc2k!5e0!3m2!1str!2str!4v1629457397499!5m2!1str!2str"
                                        width="100%" height="450" frameborder="0"
                                        style="border: 0px; pointer-events: none; margin-bottom: 16px; margin-top: 20px;"
                                        allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                                <h4 class="sec-h4"
                                    style="margin-bottom: 16px;"><?php echo($lang_contact["iletisim_bilgileri"][$pref_lang]); ?></h4>
                                <p><a href="tel:+90 272 218 26 29">+90 272 218 26 29</a></p>
                                <p>contact<i class="material-icons small-at">alternate_email</i>hisarliahmet.org</p>
                                <p>https://hisarliahmet.org</p>
                                <p>Afyon Kocatepe Üniversitesi Devlet Konservatuvarı Ahmet Necdet Sezer Kampüsü, 03204
                                    Afyonkarahisar Merkez/Afyonkarahisar</p>
                                <!-- Eof Iletisim bilgileri -->
                            </div>
                        </div>
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
        <?php echo($contact_form_result); ?>
    </div>
<?php } ?>

<script src="js/material.js"></script>
<script>
    function hideContactFormResult() {
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
        const btnSubmit = document.querySelector("#btn-submit-form");

        const txtNameSurname = document.querySelector("#txt-name-surname");
        const txtEmail = document.querySelector("#txt-email");
        const txtPhone = document.querySelector("#txt-phone");
        const txtMessage = document.querySelector("#txt-message");
        const contactForm = document.querySelector("#frm-contact");
        contactForm.addEventListener('submit', (e) => {
            if (!txtNameSurname.value) {
                txtNameSurname.parentNode.classList.add("is-invalid");
                txtNameSurname.focus();
                e.preventDefault();
                return false;
            }
            if (!txtEmail.value) {
                txtEmail.parentNode.classList.add("is-invalid");
                txtEmail.focus();
                e.preventDefault();
                return false;
            }
            if (!txtPhone.value) {
                txtPhone.parentNode.classList.add("is-invalid");
                txtPhone.focus();
                e.preventDefault();
                return false;
            }
            if (!txtMessage.value) {
                txtMessage.parentNode.classList.add("is-invalid");
                txtMessage.focus();
                e.preventDefault();
                return false;
            }

            btnSubmit.innerText = "<?php echo($lang_contact["gonderiliyor"][$pref_lang]); ?>";
            btnSubmit.disabled = true;
        });
        // form post result
        <?php if ($form_posted) { ?>
        hideContactFormResult();
        <?php } ?>
        // eof
    })();
</script>
</body>

</html>