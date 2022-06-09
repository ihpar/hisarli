<?php
if (!$is_secure) {
    exit(0);
}
?>
<div class="caution-section mdl-typography--text-center">
    <?php echo($lang_global["cautionbar"][$pref_lang]); ?>
</div>
