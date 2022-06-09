<?php
session_start();

$is_secure = true;

$page_name = "panel";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_panel.php";
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
            font-size: 14px;
            margin-bottom: 16px;
        }

        @media (max-width: 839px) {
            .pad-10-per {
                padding: 0 24px;
            }
        }

        .card-image {
            background-color: rgba(0, 0, 10, 0.1);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center 0;
            width: 100%;
            height: 0;
            padding-bottom: 110%;
        }

        .card-footer {
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            background-color: #fff;
            text-align: center;
            padding: 6px;
        }

        .speaker-card {
            background-color: rgba(0, 0, 10, 0.1);
            width: 100%;
        }

        .speaker-name {
            color: #1F3864;
            text-decoration: none;
            font-size: 18px;
        }

        .conf-title {
            display: block;
            font-size: 16px;
            margin: 4px;
        }

        .conf-date {
            display: block;
            font-size: 14px;
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
                <h3 class="center-text sec-h3"><?php echo($lang_panel["panel"][$pref_lang]); ?></h3>
                <div class="cerceve">
                    <h3 class="center-text sec-h3">#1</h3>
                    <div class="mdl-grid" style="justify-content: center">
                        <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">

                            <!-- Card -->
                            <a href="biographies.php#banjunrong">
                                <div class="mdl-card mdl-shadow--2dp speaker-card">
                                    <div class="card-image"
                                         style="background-image: url('img/people/banjunrong.jpg')"></div>
                                    <div class="card-footer">
                                        <a class="speaker-name" href="biographies.php#banjunrong">Ban JUNRONG</a>
                                        <span class="conf-title">(chair)</span>
                                        <span class="conf-date">School of Art of Aeronautics and Astronautics Nanjing University, China</span>
                            </a>
                        </div>
                    </div>
                    <!-- Eof Card -->
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
                    <!-- Card -->
                    <a href="biographies.php#hangsu">
                        <div class="mdl-card mdl-shadow--2dp speaker-card">
                            <div class="card-image" style="background-image: url('img/people/hangsu.jpg')"></div>
                            <div class="card-footer">
                                <a class="speaker-name" href="biographies.php#johannes">Hang SU</a>
                                <span class="conf-date">School of Art of Aeronautics and Astronautics Nanjing University, China</span>
                    </a>
                </div>
        </div>
        <!-- Eof Card -->
    </div>

    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
        <!-- Card -->
        <a href="biographies.php#wanzhonghua">
            <div class="mdl-card mdl-shadow--2dp speaker-card">
                <div class="card-image" style="background-image: url('img/people/wanzhonghua.jpg')"></div>
                <div class="card-footer">
                    <a class="speaker-name" href="biographies.php#wanzhonghua">Wan ZHONGRU</a>
                    <span class="conf-date">South China Normal University, China</span>
        </a>
    </div>
</div>
<!-- Eof Card -->
</div>
</div>
<p>
<h5 class="center-text sec-h3"><?php echo($lang_panel["panel1baslik"][$pref_lang]); ?></h5>
<h6 class="center-text sec-h3"><?php echo($lang_panel["panel1continue"][$pref_lang]); ?></h6>
<h6 class="center-text sec-h3"><?php echo($lang_panel["panel1tarih"][$pref_lang]); ?></h6>
<p class="center-text sec-h3"><a href="" target="_blank" class="a-footer-social"><img alt="zoom" src="img/social/logo-zoom.svg"/></a> +
    <a href="https://www.youtube.com/channel/UC6i6FHRYVmFfwjgX_YFcXmQ" target="_blank" class="a-footer-social"><img alt="youtube" src="img/social/logo-youtube.svg"/></a></p>
</a>
<p class="center-text sec-h3"><?php echo($lang_panel["panel1link"][$pref_lang]); ?></p>
</div>
</section>
<section class="pad-tb-24">
    <div class="cerceve">
        <h3 class="center-text sec-h3">#2</h3>
        <div class="mdl-grid" style="justify-content: center">
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">

                <!-- Card -->
                <a href="biographies.php#marisa">
                    <div class="mdl-card mdl-shadow--2dp speaker-card">
                        <div class="card-image" style="background-image: url('img/people/marisa.jpg')"></div>
                        <div class="card-footer">
                            <a class="speaker-name" href="biographies.php#banjunrong">Marisa FONTERRADA</a>
                            <span class="conf-title">(chair)</span>
                            <span class="conf-date">Sao Paulo State University, Brazil</span>
                </a>
            </div>
        </div>
        <!-- Eof Card -->
    </div>

    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
        <!-- Card -->
        <a href="biographies.php#cohen">
            <div class="mdl-card mdl-shadow--2dp speaker-card">
                <div class="card-image" style="background-image: url('img/people/andreacohen.jpg')"></div>
                <div class="card-footer">
                    <a class="speaker-name" href="biographies.php#cohen">Andrea COHEN</a>
                    <span class="conf-date">Radio France, Argentina</span>
        </a>
    </div>
    </div>
    <!-- Eof Card -->
    </div>

    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
        <!-- Card -->
        <a href="biographies.php#thiago">
            <div class="mdl-card mdl-shadow--2dp speaker-card">
                <div class="card-image" style="background-image: url('img/people/thiago.jpg')"></div>
                <div class="card-footer">
                    <a class="speaker-name" href="biographies.php#thiago">Thiago CURY</a>
                    <span class="conf-date">Strange Music Festival Director, Brazil</span>
        </a>
    </div>
    </div>
    <!-- Eof Card -->
    </div>
    </div>
    <p>
    <h5 class="center-text sec-h3"><?php echo($lang_panel["panel2baslik"][$pref_lang]); ?></h5>
    <h6 class="center-text sec-h3"><?php echo($lang_panel["panel2continue"][$pref_lang]); ?></h6>
    <h6 class="center-text sec-h3"><?php echo($lang_panel["panel2tarih"][$pref_lang]); ?></h6>
    <p class="center-text sec-h3"><a href="" target="_blank" class="a-footer-social"><img alt="zoom" src="img/social/logo-zoom.svg"/></a> +
        <a href="https://www.youtube.com/channel/UC6i6FHRYVmFfwjgX_YFcXmQ" target="_blank" class="a-footer-social"><img alt="youtube" src="img/social/logo-youtube.svg"/></a></p>
    </a>
    <p class="center-text sec-h3"><?php echo($lang_panel["panel1link"][$pref_lang]); ?></p>
    </div>
</section>
</section>
<section class="pad-tb-24">
    <div class="cerceve">
        <h3 class="center-text sec-h3">#3</h3>
        <div class="mdl-grid" style="justify-content: center">
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">

                <!-- Card -->
                <a href="biographies.php#abdullah">
                    <div class="mdl-card mdl-shadow--2dp speaker-card">
                        <div class="card-image" style="background-image: url('img/people/abdullah.png')"></div>
                        <div class="card-footer">
                            <a class="speaker-name" href="biographies.php#banjunrong">Abdullah Akat</a>
                            <span class="conf-title">(oturum başkanı)</span>
                            <span class="conf-date">İstanbul Üniversitesi</span>
                </a>
            </div>
        </div>
        <!-- Eof Card -->
    </div>

    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
        <!-- Card -->
        <a href="biographies.php#akin">
            <div class="mdl-card mdl-shadow--2dp speaker-card">
                <div class="card-image" style="background-image: url('img/people/akin.jpg')"></div>
                <div class="card-footer">
                    <a class="speaker-name" href="biographies.php#cohen">Akın Oktav</a>
                    <span class="conf-date">Alanya Alaaddin Keykubat Üniversitesi</span>
        </a>
    </div>
    </div>
    <!-- Eof Card -->
    </div>

    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
        <!-- Card -->
        <a href="biographies.php#alitan">
            <div class="mdl-card mdl-shadow--2dp speaker-card">
                <div class="card-image" style="background-image: url('img/people/alitan.jpg')"></div>
                <div class="card-footer">
                    <a class="speaker-name" href="biographies.php#thiago">Ali Tan</a>
                    <span class="conf-date">İstanbul Medeniyet Üniversitesi</span>
        </a>
    </div>
    </div>
    <!-- Eof Card -->
    </div>
    </div>
    <p>
    <h5 class="center-text sec-h3"><?php echo($lang_panel["panel3baslik"][$pref_lang]); ?></h5>
    <h6 class="center-text sec-h3"><?php echo($lang_panel["panel3tarih"][$pref_lang]); ?></h6>
    <h6 class="center-text sec-h3"><?php echo($lang_panel["panel3continue"][$pref_lang]); ?></h6>
    <p class="center-text sec-h3"><a href="" target="_blank" class="a-footer-social"><img alt="zoom" src="img/social/logo-zoom.svg"/></a> +
        <a href="https://www.youtube.com/channel/UC6i6FHRYVmFfwjgX_YFcXmQ" target="_blank" class="a-footer-social"><img alt="youtube" src="img/social/logo-youtube.svg"/></a></p>
    </a>
    <p class="center-text sec-h3"><?php echo($lang_panel["panel1link"][$pref_lang]); ?></p>
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
        const devamiBtns = document.querySelectorAll(".show-p-trunc");
        for (const devamiBtn of devamiBtns) {
            devamiBtn.addEventListener("click", (e) => {
                e.preventDefault();

                if (devamiBtn.getAttribute("data-state") === "collapsed") {
                    devamiBtn.setAttribute("data-state", "expanded");
                    devamiBtn.innerHTML = '<?php echo($lang_panel["gizle"][$pref_lang]); ?>';
                    devamiBtn.previousElementSibling.classList.add("visible");
                } else {
                    devamiBtn.setAttribute("data-state", "collapsed");
                    devamiBtn.innerHTML = '<?php echo($lang_panel["devami"][$pref_lang]); ?>';
                    devamiBtn.previousElementSibling.classList.remove("visible");
                }
            });
        }

        // eof devami
    })();
</script>
-->
</body>
</html>