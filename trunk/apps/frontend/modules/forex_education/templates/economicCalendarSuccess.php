<?php
use_helper('I18N');
$culture = $sf_user->getCulture();
?>
<h1 style="border-bottom: 2px solid #E1E1E1; margin-top: 20px; padding-bottom: 8px;"><?php echo __("Economic Calendar") ?></h1>
<p><!-- myfxbook.com economic calendar widget - Start --><br/>
    <script type="text/javascript" src=../../../widgets.myfxbook.com/scripts/fxCalendard748.js?ps=30></script>
    <br/>
    <!-- myfxbook.com market widget - End -->
</p>
