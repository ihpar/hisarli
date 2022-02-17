<?php

if (!$is_secure) {

    exit(0);

}

?>

<div class="menu-container" id="top">

    <nav>

        <!-- Hamburger -->

        <div id="dv-spacer"></div>

        <div id="menuToggle">

            <input type="checkbox"/>

            <span></span>

            <span></span>

            <span></span>

            <div id="phone-menu">

                <ul>
                    <li style="background-color: #D80027;">
                        <a href="abstract-submission.php"><?php echo($lang_global["ozet_gonderim"][$pref_lang]); ?></a>
                    </li>
                    <li class="dropdown">
                        <a href="index.php#duyurular"><?php echo($lang_global["duyurular"][$pref_lang]); ?></a>
                    </li>
                    <li>
                        <div class="li-mobile-section-header"><?php echo($lang_global["ana_sayfa"][$pref_lang]); ?></div>
                    </li>

                    <li><a href="index.php"><?php echo($lang_global["ana_sayfa"][$pref_lang]); ?></a>
                    </li>

                    <li>
                        <div class="li-mobile-section-header"><?php echo($lang_global["hisarli_ahmet"][$pref_lang]); ?></div>
                    </li>

                    <li>
                        <a href="hisarli.php"><?php echo($lang_global["hisarli_ahmet_hakkinda_full"][$pref_lang]); ?></a>
                    </li>

                    <?php if ($pref_lang == "tr") { ?>
                        <li>
                            <a href="hisarli-comment.php"><?php echo($lang_global["hakkinda_bir_yorum_full"][$pref_lang]); ?></a>
                        </li>
                    <?php } ?>

                    <li>
                        <a href="hisarli-photos.php"><?php echo($lang_global["fotograflarla_hisarli_ahmet_full"][$pref_lang]); ?></a>
                    </li>

                    <li><a href="hisarli-voice.php"><?php echo($lang_global["kendi_sesiyle_full"][$pref_lang]); ?></a>
                    </li>

                    <li>
                        <div class="li-mobile-section-header"><?php echo($lang_global["genel_bilgiler"][$pref_lang]); ?></div>
                    </li>

                    <li><a href="important-dates.php"><?php echo($lang_global["onemli_tarihler"][$pref_lang]); ?></a>
                    </li>

                    <li><a href="participation-fee.php"><?php echo($lang_global["katılım_ücreti"][$pref_lang]); ?></a>
                    </li>

                    <li><a href="transportation.php"><?php echo($lang_global["ulasim"][$pref_lang]); ?></a></li>

                    <!--<li><a href="accommodation.php"><?php echo($lang_global["konaklama"][$pref_lang]); ?></a></li>-->

                    <li>
                        <a href="presentation-guidelines.php"><?php echo($lang_global["bildiri_sunum_kurallari"][$pref_lang]); ?></a>
                    </li>

                    <?php if ($pref_lang == "tr") { ?>
                        <li><a href="kgsd.php">Kütahya Güzel S. Derneği</a></li>
                    <?php } ?>

                    <li>
                        <div class="li-mobile-section-header"><?php echo($lang_global["sempozyum"][$pref_lang]); ?></div>
                    </li>

                    <!--<li><a href="accepted.php"><?php echo($lang_global["kabul edilenler"][$pref_lang]); ?></a>
          </li>-->

                    <!--<li><a href="schedule.php"><?php echo($lang_global["program"][$pref_lang]); ?></a>
          </li>-->

                    <!--<li><a href="abstract-book.php"><?php echo($lang_global["ozet_kitapcik"][$pref_lang]); ?></a>
          </li>-->

                    <li>
                        <a href="past-symposiums.php"><?php echo($lang_global["gecmis_sempozyumlar"][$pref_lang]); ?></a>
                    </li>

                    <li>
                        <a href="organization-chart.php"><?php echo($lang_global["organizasyon_semasi"][$pref_lang]); ?></a>
                    </li>

                    <!-- <li><a href="paper-guidelines.php"><?php echo($lang_global["tam_metin_yazim_kurallari"][$pref_lang]); ?></a>
          </li>-->

                    <li>
                        <div class="li-mobile-section-header"><?php echo($lang_global["kurullar"][$pref_lang]); ?></div>
                    </li>

                    <li><a href="honor-board.php"><?php echo($lang_global["onur_kurulu"][$pref_lang]); ?></a></li>

                    <li><a href="executive-board.php"><?php echo($lang_global["yurutme_kurulu"][$pref_lang]); ?></a>
                    </li>

                    <li><a href="scientific-committee.php"><?php echo($lang_global["bilim_kurulu"][$pref_lang]); ?></a>
                    </li>

                    <li>
                        <a href="organizing-committee.php"><?php echo($lang_global["duzenleme_kurulu"][$pref_lang]); ?></a>
                    </li>

                    <!--<li><div class="li-mobile-section-header"><?php echo($lang_global["etkinlikler"][$pref_lang]); ?></div></li>

          <li><a href="concerts.php"><?php echo($lang_global["konserler"][$pref_lang]); ?></a></li>

          <li><a href="conferences.php"><?php echo($lang_global["konferanslar"][$pref_lang]); ?></a></li>

          <li><a href="workshops.php"><?php echo($lang_global["atolye_calismalari"][$pref_lang]); ?></a></li>

          <li><a href="panel.php"><?php echo($lang_global["panel"][$pref_lang]); ?></a></li>-->

                    <!--<?php if ($pref_lang == "tr") { ?>
            <li><div class="li-mobile-section-header"><?php echo($lang_global["genclik_seminerleri"][$pref_lang]); ?></div></li>

                <li> <a href="youth-seminars-announcement.php"><?php echo($lang_global["genclik_seminerleri-duyuru"][$pref_lang]); ?></a>
                </li>
                <li><a href="youth-seminars-general.php"><?php echo($lang_global["genclik_seminerleri-general"][$pref_lang]); ?></a>
          </li>

          <li><a
                href="youth-seminars-invited.php"><?php echo($lang_global["genclik_seminerleri-invited"][$pref_lang]); ?></a>
          </li>

          <li><a
                href="youth-seminars-accepted.php"><?php echo($lang_global["genclik_seminerleri-kabul-edilenler"][$pref_lang]); ?></a>
          </li>


          <li><a
                href="youth-seminars-program.php"><?php echo($lang_global["genclik_seminerleri-program"][$pref_lang]); ?></a>
          </li>
            <?php } ?>-->

                    <li>
                        <div class="li-mobile-section-header"><?php echo($lang_global["iletisim"][$pref_lang]); ?></div>
                    </li>
                    <li>
                        <a href="contact.php"><?php echo($lang_global["iletisim"][$pref_lang]); ?></a>
                    </li>

                </ul>

            </div>

        </div>

        <!-- Eof Hamburger -->

        <!-- Masaustu Menu -->

        <ul class="pc-menu">

            <li class="dropdown">

                <a href="index.php"><?php echo($lang_global["ana_sayfa"][$pref_lang]); ?></a>

            </li>

            <li class="dropdown">

                <?php echo($lang_global["hisarli_ahmet"][$pref_lang]); ?>

                <ul class="dropdown_menu rot-x-menu">

                    <li class="dropdown_item-1">
                        <a href="hisarli.php"><?php echo($lang_global["hisarli_ahmet_hakkinda"][$pref_lang]); ?></a>
                    </li>

                    <?php if ($pref_lang == "tr") { ?>
                        <li class="dropdown_item-2">
                            <a href="hisarli-comment.php"><?php echo($lang_global["hakkinda_bir_yorum"][$pref_lang]); ?></a>
                        </li>
                    <?php } ?>

                    <li class="dropdown_item-3">
                        <a href="hisarli-photos.php"><?php echo($lang_global["fotograflarla_hisarli_ahmet"][$pref_lang]); ?></a>
                    </li>

                    <li class="dropdown_item-4">
                        <a href="hisarli-voice.php"><?php echo($lang_global["kendi_sesiyle"][$pref_lang]); ?></a>
                    </li>

                </ul>

            </li>

            <li class="dropdown">

                <?php echo($lang_global["genel_bilgiler"][$pref_lang]); ?>

                <ul class="dropdown_menu rot-x-menu">

                    <li class="dropdown_item-1">
                        <a href="important-dates.php"><?php echo($lang_global["onemli_tarihler"][$pref_lang]); ?></a>
                    </li>

                    <li class="dropdown_item-2">
                        <a href="participation-fee.php"><?php echo($lang_global["katılım_ücreti"][$pref_lang]); ?></a>
                    </li>

                    <li class="dropdown_item-3">
                        <a href="transportation.php"><?php echo($lang_global["ulasim"][$pref_lang]); ?></a>
                    </li>

                    <!--<li class="dropdown_item-4">
                    <a href="accommodation.php"><?php echo($lang_global["konaklama"][$pref_lang]); ?></a>
                    </li>-->

                    <li class="dropdown_item-4">
                        <a href="presentation-guidelines.php"><?php echo($lang_global["bildiri_sunum_kurallari"][$pref_lang]); ?></a>
                    </li>

                    <?php if ($pref_lang == "tr") { ?>
                        <li class="dropdown_item-5">
                            <a href="kgsd.php">Kütahya Güzel S. Derneği</a>
                        </li>
                    <?php } ?>

                </ul>

            </li>

            <li class="dropdown">

                <?php echo($lang_global["sempozyum"][$pref_lang]); ?>

                <ul class="dropdown_menu rot-x-menu">

                    <!--<li class="dropdown_item-1"><a
                href="accepted.php"><?php echo($lang_global["kabul edilenler"][$pref_lang]); ?></a>
          </li>-->

                    <!--<li class="dropdown_item-2"><a href="schedule.php"><?php echo($lang_global["program"][$pref_lang]); ?></a>
          </li>-->

                    <!--<li class="dropdown_item-3"><a
                href="abstract-book.php"><?php echo($lang_global["ozet_kitapcik"][$pref_lang]); ?></a>
          </li>-->

                    <li class="dropdown_item-4">
                        <a href="past-symposiums.php"><?php echo($lang_global["gecmis_sempozyumlar"][$pref_lang]); ?></a>
                    </li>
                    <li class="dropdown_item-5">
                        <a href="organization-chart.php"><?php echo($lang_global["organizasyon_semasi"][$pref_lang]); ?></a>
                    </li>
                    <!--<li class="dropdown_item-6"><a
                        href="paper-guidelines.php"><?php echo($lang_global["tam_metin_yazim_kurallari"][$pref_lang]); ?></a>
            </li>-->

                </ul>

            </li>

            <li class="dropdown">

                <?php echo($lang_global["kurullar"][$pref_lang]); ?>

                <ul class="dropdown_menu rot-x-menu">

                    <li class="dropdown_item-1">
                        <a href="honor-board.php"><?php echo($lang_global["onur_kurulu"][$pref_lang]); ?></a>
                    </li>

                    <li class="dropdown_item-2">
                        <a href="executive-board.php"><?php echo($lang_global["yurutme_kurulu"][$pref_lang]); ?></a>
                    </li>

                    <li class="dropdown_item-3">
                        <a href="scientific-committee.php"><?php echo($lang_global["bilim_kurulu"][$pref_lang]); ?></a>
                    </li>

                    <li class="dropdown_item-4">
                        <a href="organizing-committee.php"><?php echo($lang_global["duzenleme_kurulu"][$pref_lang]); ?></a>
                    </li>

                </ul>

            </li>

            <!--

      <li class="dropdown">

          <?php echo($lang_global["etkinlikler"][$pref_lang]); ?>

        <ul class="dropdown_menu rot-x-menu">

          <li class="dropdown_item-1"><a href="concerts.php"><?php echo($lang_global["konserler"][$pref_lang]); ?></a>
          </li>

          <li class="dropdown_item-2"><a
                href="conferences.php"><?php echo($lang_global["konferanslar"][$pref_lang]); ?></a></li>

            <li class="dropdown_item-3"><a
                href="workshops.php"><?php echo($lang_global["atolye_calismalari"][$pref_lang]); ?></a></li>-->

            <!--<li class="dropdown_item-4"><a
                href="panel.php"><?php echo($lang_global["panel"][$pref_lang]); ?></a></li>

        </ul>

      </li>-->
            <!--
        <?php if ($pref_lang == "tr") { ?>
        <li class="dropdown">

          <?php echo($lang_global["genclik_seminerleri"][$pref_lang]); ?>

        <ul class="dropdown_menu rot-x-menu">

            <li class="dropdown_item-1"><a
                        href="youth-seminars-announcement.php"><?php echo($lang_global["genclik_seminerleri-duyuru"][$pref_lang]); ?></a>
            </li>
          <li class="dropdown_item-2"><a
                href="youth-seminars-general.php"><?php echo($lang_global["genclik_seminerleri-general"][$pref_lang]); ?></a>
          </li>
          <li class="dropdown_item-3"><a
                href="youth-seminars-invited.php"><?php echo($lang_global["genclik_seminerleri-invited"][$pref_lang]); ?></a>
          </li>
          <li class="dropdown_item-4"><a
                href="youth-seminars-accepted.php"><?php echo($lang_global["genclik_seminerleri-kabul-edilenler"][$pref_lang]); ?></a>
          </li>
          <li class="dropdown_item-5"><a
                href="youth-seminars-program.php"><?php echo($lang_global["genclik_seminerleri-program"][$pref_lang]); ?></a>
          </li>

        </ul>
            <?php } ?>-->

            <li class="dropdown">
                <a href="contact.php"><?php echo($lang_global["iletisim"][$pref_lang]); ?></a>
            </li>

            <li class="dropdown" style="background-color: #ff000080;">
                <a href="abstract-submission.php"><?php echo($lang_global["ozet_gonderim"][$pref_lang]); ?></a>
            </li>
            <li class="dropdown">
                <a href="index.php#duyurular"><?php echo($lang_global["duyurular"][$pref_lang]); ?></a>
            </li>

        </ul>

        <!-- Eof Masaustu Menu -->

        <!-- Dil Secimi -->

        <ul class="ul-flags">
            <li>
                <a class="a-flag tr" href="?lang=tr">&nbsp;</a>
            </li>

            <li>
                <a class="a-flag en" href="?lang=en">&nbsp;</a>
            </li>

        </ul>

        <!-- Eof Dil Secimi -->

    </nav>

</div>