<?php 
if(!$is_secure) {
    exit(0);
}
?>
<div class="menu-container" id="top">
<nav>
    <!-- Hamburger -->
    <div id="dv-spacer"></div>
    <div id="menuToggle">
    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
    <div id="phone-menu">
        <ul>
        <li><a href="index.php">Ana Sayfa</a></li>
        <li><a href="#">Önemli Tarihler</a></li>
        <li><a href="#">Program</a></li>
        <li><a href="#">Geçmiş Sempozyumlar</a></li>
        <li><a href="#">Katılım Ücreti</a></li>
        <li><a href="#">Ulaşım</a></li>
        <li><a href="#">Hisarlı Ahmet Hakkında</a></li>
        <li><a href="#">Kütahya Güzel S. Derneği</a></li>
        <li><a href="#">Kurullar</a></li>
        <li><a href="#">Konserler</a></li>
        <li><a href="#">Konferans</a></li>
        <li><a href="#">Atölye Çalışmaları</a></li>
        <li><a href="#">Gençlik Seminerleri</a></li>
        <li><a href="#">İletişim</a></li>
        </ul>
    </div>
    </div>
    <!-- Eof Hamburger -->
    <!-- Masaustu Menu -->
    <ul class="pc-menu">
    <li class="dropdown">
        <a href="index.php">Ana Sayfa</a>
    </li>
    <li class="dropdown">
        Sempozyum Bilgileri
        <ul class="dropdown_menu rot-x-menu">
        <li class="dropdown_item-1"><a href="#">Önemli Tarihler</a></li>
        <li class="dropdown_item-2"><a href="#">Program</a></li>
        <li class="dropdown_item-3"><a href="#">Geçmiş Sempozyumlar</a></li>
        <li class="dropdown_item-4"><a href="#">Katılım Ücreti</a></li>
        <li class="dropdown_item-5"><a href="#">Ulaşım</a></li>
        </ul>
    </li>
    <li class="dropdown">
        Hisarlı Ahmet
        <ul class="dropdown_menu rot-x-menu">
        <li class="dropdown_item-1"><a href="#">Hisarlı Ahmet Hakkında</a></li>
        <li class="dropdown_item-2"><a href="#">Kütahya Güzel S. Derneği</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#">Kurullar</a>
    </li>
    <li class="dropdown">
        Etkinlikler
        <ul class="dropdown_menu rot-x-menu">
        <li class="dropdown_item-1"><a href="#">Konserler</a></li>
        <li class="dropdown_item-2"><a href="#">Konferans</a></li>
        <li class="dropdown_item-3"><a href="#">Atölye Çalışmaları</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#">Gençlik Seminerleri</a>
    </li>
    <li class="dropdown">
        <a href="#">İletişim</a>
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