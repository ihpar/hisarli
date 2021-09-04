<?php
session_start();

$is_secure = true;

$page_name = "abstract-submission";

$form_posted = false;
$form_result = "Yes";

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

            <!-- Satir 1 Form -->
            <section class="pad-tb-24">
                <div class="pad-10-per">
                    <div class="cerceve">
                        <h3 class="center-text sec-h3"><?php echo($lang_abs_sub["bildiri_ozeti_gonderim_formu"][$pref_lang]); ?></h3>
                        <form action="abstract-submission.php" method="post" id="frm-abstract">
                            <!-- Row -->
                            <div class="row">
                                <div class="col-6">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="txt-name-surname"/>
                                        <label class="mdl-textfield__label" for="txt-name-surname">
                                            <?php echo($lang_abs_sub["ad_soyad"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="txt-institution"/>
                                        <label class="mdl-textfield__label" for="txt-institution">
                                            <?php echo($lang_abs_sub["kurum"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-6">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="txt-email"/>
                                        <label class="mdl-textfield__label" for="txt-email">
                                            <?php echo($lang_abs_sub["email"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="txt-phone"/>
                                        <label class="mdl-textfield__label" for="txt-phone">
                                            <?php echo($lang_abs_sub["telefon"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <textarea class="mdl-textfield__input" rows="3" id="txt-address"></textarea>
                                        <label class="mdl-textfield__label" for="txt-address">
                                            <?php echo($lang_abs_sub["adres"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <textarea class="mdl-textfield__input" rows="3" id="txt-cv"></textarea>
                                        <label class="mdl-textfield__label" for="txt-cv">
                                            <?php echo($lang_abs_sub["kisa_ozgecmis"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
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
                                    ">
                                        <?php echo($lang_abs_sub["fotograf_yukleyiniz"][$pref_lang]); ?>
                                    </label>
                                    <input type="file" id="fup-photo" name="fup-photo"/>
                                    <span id="spn-photo-result">
                                        <?php echo($lang_abs_sub["fotograf_secilmedi"][$pref_lang]); ?>
                                    </span>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="txt-abstract-title"/>
                                        <label class="mdl-textfield__label" for="txt-abstract-title">
                                            <?php echo($lang_abs_sub["ozet_basligi"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="txt-abstract-authors"/>
                                        <label class="mdl-textfield__label" for="txt-abstract-authors">
                                            <?php echo($lang_abs_sub["yazarlar"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <textarea class="mdl-textfield__input" rows="18" id="txt-abstract"></textarea>
                                        <label class="mdl-textfield__label" for="txt-abstract">
                                            <?php echo($lang_abs_sub["ozet_metni"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="txt-abstract-keywords"/>
                                        <label class="mdl-textfield__label" for="txt-abstract-keywords">
                                            <?php echo($lang_abs_sub["anahtar_kelimeler"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-12">
                                    <button
                                            id="btn-submit-form"
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
                                        <?php echo($lang_abs_sub["gonder"][$pref_lang]); ?>
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
        const file = document.querySelector("#fup-photo");
        const fileInfo = document.querySelector("#spn-photo-result");
        file.addEventListener("change", (e) => {
            const [file] = e.target.files;
            const {name: fileName, size} = file;
            const fileSize = (size / 1000).toFixed(2);
            fileInfo.innerHTML = fileName + " - " + fileSize + "KB";
        });

        // submit section
        const btnSubmit = document.querySelector("#btn-submit-form");

        const txtNameSurname = document.querySelector("#txt-name-surname");
        const txtInstitution = document.querySelector("#txt-institution");
        const txtEmail = document.querySelector("#txt-email");
        const txtPhone = document.querySelector("#txt-phone");
        const txtAddress = document.querySelector("#txt-address");
        const txtCv = document.querySelector("#txt-cv");
        const txtAbstractTitle = document.querySelector("#txt-abstract-title");
        const txtAbstractAuthors = document.querySelector("#txt-abstract-authors");
        const txtAbstract = document.querySelector("#txt-abstract");
        const txtAbstractKeywords = document.querySelector("#txt-abstract-keywords");

        btnSubmit.addEventListener('click', (e) => {
            if (!txtNameSurname.value) {
                txtNameSurname.parentNode.classList.add("is-invalid");
                txtNameSurname.focus();
                e.preventDefault();
                return;
            }
            if (!txtInstitution.value) {
                txtInstitution.parentNode.classList.add("is-invalid");
                txtInstitution.focus();
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
            if (!txtAddress.value) {
                txtAddress.parentNode.classList.add("is-invalid");
                txtAddress.focus();
                e.preventDefault();
                return;
            }
            if (!txtCv.value) {
                txtCv.parentNode.classList.add("is-invalid");
                txtCv.focus();
                e.preventDefault();
                return;
            }
            if (!txtAbstractTitle.value) {
                txtAbstractTitle.parentNode.classList.add("is-invalid");
                txtAbstractTitle.focus();
                e.preventDefault();
                return;
            }
            if (!txtAbstractAuthors.value) {
                txtAbstractAuthors.parentNode.classList.add("is-invalid");
                txtAbstractAuthors.focus();
                e.preventDefault();
                return;
            }
            if (!txtAbstract.value) {
                txtAbstract.parentNode.classList.add("is-invalid");
                txtAbstract.focus();
                e.preventDefault();
                return;
            }
            if (!txtAbstractKeywords.value) {
                txtAbstractKeywords.parentNode.classList.add("is-invalid");
                txtAbstractKeywords.focus();
                e.preventDefault();
                return;
            }
        });

        // form post result
        <?php if ($form_posted) { ?>
        hideContactFormResult();
        <?php } ?>
        // end
    })();
</script>
</body>
</html>
