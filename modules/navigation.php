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
          <li><a href="index.php"><?php echo($lang_global["ana_sayfa"][$pref_lang]); ?></a></li>
          <li><a href="important-dates.php"><?php echo($lang_global["onemli_tarihler"][$pref_lang]); ?></a></li>
          <li><a href="paper-guidelines.php"><?php echo($lang_global["yazim_kurallari"][$pref_lang]); ?></a></li>
          <li><a href="#">Program</a></li>
          <li><a href="#">Geçmiş Sempozyumlar</a></li>
          <li><a href="#">Katılım Ücreti</a></li>
          <li><a href="#">Ulaşım</a></li>
          <li><a href="hisarli.php"><?php echo($lang_global["hisarli_ahmet_hakkinda"][$pref_lang]); ?></a></li>
          <li><a href="kgsd.php">Kütahya Güzel S. Derneği</a></li>
          <li><a href="honor-board.php"><?php echo($lang_global["onur_kurulu"][$pref_lang]); ?></a></li>
          <li><a href="executive-board.php"><?php echo($lang_global["yurutme_kurulu"][$pref_lang]); ?></a></li>
          <li><a href="scientific-committee.php"><?php echo($lang_global["bilim_kurulu"][$pref_lang]); ?></a></li>
          <li><a href="organizing-committee.php"><?php echo($lang_global["duzenleme_kurulu"][$pref_lang]); ?></a></li>
          <li><a href="#">Konserler</a></li>
          <li><a href="#">Konferans</a></li>
          <li><a href="#">Atölye Çalışmaları</a></li>
          <li><a href="#"><?php echo($lang_global["genclik_seminerleri"][$pref_lang]); ?></a></li>
          <li><a href="#"><?php echo($lang_global["iletisim"][$pref_lang]); ?></a></li>
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
        <a href="index.php"><?php echo($lang_global["bildiri_gonderimi"][$pref_lang]); ?></a>
        <ul class="dropdown_menu rot-x-menu">
          <li class="dropdown_item-1"><a
                href="paper-guidelines.php"><?php echo($lang_global["yazim_kurallari"][$pref_lang]); ?></a></li>
        </ul>
      </li>
      <li class="dropdown">
          <?php echo($lang_global["sempozyum_bilgileri"][$pref_lang]); ?>
        <ul class="dropdown_menu rot-x-menu">
          <li class="dropdown_item-1"><a
                href="important-dates.php"><?php echo($lang_global["onemli_tarihler"][$pref_lang]); ?></a></li>
          <li class="dropdown_item-2"><a href="#">Program</a></li>
          <li class="dropdown_item-3"><a href="#">Geçmiş Sempozyumlar</a></li>
          <li class="dropdown_item-4"><a href="#">Katılım Ücreti</a></li>
          <li class="dropdown_item-5"><a href="#">Ulaşım</a></li>
        </ul>
      </li>
      <li class="dropdown">
          <?php echo($lang_global["hisarli_ahmet"][$pref_lang]); ?>
        <ul class="dropdown_menu rot-x-menu">
          <li class="dropdown_item-1"><a
                href="hisarli.php"><?php echo($lang_global["hisarli_ahmet_hakkinda"][$pref_lang]); ?></a></li>
          <li class="dropdown_item-2"><a href="kgsd.php">Kütahya Güzel S. Derneği</a></li>
        </ul>
      </li>
      <li class="dropdown">
          <?php echo($lang_global["kurullar"][$pref_lang]); ?>
        <ul class="dropdown_menu rot-x-menu">
          <li class="dropdown_item-1"><a
                href="honor-board.php"><?php echo($lang_global["onur_kurulu"][$pref_lang]); ?></a></li>
          <li class="dropdown_item-2"><a
                href="executive-board.php"><?php echo($lang_global["yurutme_kurulu"][$pref_lang]); ?></a></li>
          <li class="dropdown_item-3"><a
                href="scientific-committee.php"><?php echo($lang_global["bilim_kurulu"][$pref_lang]); ?></a></li>
          <li class="dropdown_item-4"><a
                href="organizing-committee.php"><?php echo($lang_global["duzenleme_kurulu"][$pref_lang]); ?></a></li>
        </ul>
      </li>
      <li class="dropdown">
          <?php echo($lang_global["etkinlikler"][$pref_lang]); ?>
        <ul class="dropdown_menu rot-x-menu">
          <li class="dropdown_item-1"><a href="#">Konserler</a></li>
          <li class="dropdown_item-2"><a href="#">Konferans</a></li>
          <li class="dropdown_item-3"><a href="#">Atölye Çalışmaları</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#"><?php echo($lang_global["genclik_seminerleri"][$pref_lang]); ?></a>
      </li>
      <li class="dropdown">
        <a href="#"><?php echo($lang_global["iletisim"][$pref_lang]); ?></a>
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