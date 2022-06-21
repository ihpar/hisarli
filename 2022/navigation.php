<?php
if (!$is_secure) {
    exit(0);
}
?>

<div class="menu-container" id="top">
    <nav>
        <!-- Mobil Menu -->
        <div id="dv-spacer"></div>
        <div id="menuToggle">
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>
            <div id="phone-menu">
                <ul>
                    <li style="background-color: #D80027;">
                        <a href="../"><?php echo($lang_global["ana_sayfa"][$pref_lang]); ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- EOf Mobil Menu -->

        <!-- MASAUSTU MENU -->
        <ul class="pc-menu" style="position: absolute; margin-left: 12px;">
            <li class="dropdown">
                <a href="../"><?php echo($lang_global["ana_sayfa"][$pref_lang]); ?></a>
            </li>
        </ul>
        <!-- Dil Secimi -->
        <ul class="ul-flags">
            <li><a class="a-flag tr" href="?lang=tr">&nbsp;</a></li>
            <li><a class="a-flag en" href="?lang=en">&nbsp;</a></li>
        </ul>
        <!-- Eof Dil Secimi -->
    </nav>
</div>