<?php
if (!$is_secure) {
    exit(0);
}
require_once "lang_footer.php";
?>

<!--<section style="text-align: center; background-color: #fff;">
    <a href="logo.php" target="_blank" style="height: 170px; display: block;">
    <img src="img/banners/HisarliLogotransparan2.png" >
    </a>
</section>-->
<footer class="mdl-mega-footer">
    <div class="footer-top">
        <div class="footer--left" class="a-footer-social">
            <a href="https://www.facebook.com/profile.php?id=100077474726302" target="_blank"
               class="a-footer-social">
                <img alt="facebook" src="img/social/logo-facebook-white.svg"/>
            </a>
            <a href="https://www.instagram.com/hisarliahmetsymposium/" target="_blank"
               class="a-footer-social">
                <img alt="instagram" src="img/social/logo-instagram-white.svg"/>
            </a>
            <a href="https://www.youtube.com/channel/UC6i6FHRYVmFfwjgX_YFcXmQ" target="_blank"
               class="a-footer-social">
                <img alt="instagram" src="img/social/logo-youtube-white.svg"/>
            </a>
            &nbsp;
            <!--<a href="https://twitter.com/hisarliahmetsym" target="_blank" class="a-footer-social">
                <img alt="twitter" src="img/social/logo-twitter-white.svg"/>-->
            </a>
        </div>
        <div class="footer--right">
            <a href="#top" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                <i class="material-icons">arrow_upward</i>
            </a>
        </div>
    </div>
    <div class="mdl-mega-footer--middle-section">
        <p class="no-bottom">contact<i class="material-icons small-at">alternate_email</i>hisarliahmet.org</p>
    </div>

    <div class="mdl-mega-footer--bottom-section">
        <p style="color: #aaa">© 2022 <?php echo($lang_footer["sempozyum"][$pref_lang]); ?> </p>
        <p style="color: #aaa"><?php echo($lang_footer["web_tasarim"][$pref_lang]); ?>
            : <?php echo($lang_footer["ha_vebciler"][$pref_lang]); ?>
            (<?php echo($lang_footer["koordinator"][$pref_lang]); ?>: Cihan Işıkhan
            | <?php echo($lang_footer["kodlama"][$pref_lang]); ?>: İsmail Hakkı Parlak
            | <?php echo($lang_footer["server"][$pref_lang]); ?>: Seyhan Canyakan-Filiz Yıldız
            | <?php echo($lang_footer["banner_foto"][$pref_lang]); ?>: Mustafa Kemal Altınsoy
            | <?php echo($lang_footer["logo"][$pref_lang]); ?>: Rıfat Beltekin
            | <?php echo($lang_footer["ceviri"][$pref_lang]); ?>: Gökçe Nur Türkmen)
        </p>
    </div>
</footer>