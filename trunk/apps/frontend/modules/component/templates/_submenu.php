<?php
use_helper('I18N');
$culture = $sf_user->getCulture();
?>
<div class="menu">
    <ul>
        <li class="current_page_item"><a href="/home" title="Home"><?php echo __("Home") ?></a></li>
        <li class="page_item page-item-9"><a href="/fx_cmisc" title="FX-CMISC"><?php echo __("FX-CMISC") ?></a>
            <ul class='children'>
                <li class="page_item page-item-11"><a href="/fx_cmisc" title="Our Team"><?php echo __("Our Team") ?></a></li>
                <li class="page_item page-item-81"><a href="/fx_cmisc/whiteLabel" title="White Label"><?php echo __("White Label") ?></a></li>
            </ul>
        </li>
        <li class="page_item page-item-84"><a href="/forex_education" title="FOREX Education"><?php echo __("FOREX Education") ?></a>
            <ul class='children'>
                <li class="page_item page-item-86"><a href="/forex_education" title="Forex Essentials"><?php echo __("Forex Essentials") ?></a></li>
                <li class="page_item page-item-95"><a href="/forex_education/forexMarket" title="Forex Market"><?php echo __("Forex Market") ?></a></li>
                <li class="page_item page-item-99"><a href="/forex_education/characteristics" title="Characteristics"><?php echo __("Characteristics") ?></a></li>
                <li class="page_item page-item-101"><a href="/forex_education/keyFactors" title="Key Factors"><?php echo __("Key Factors") ?></a></li>
                <li class="page_item page-item-103"><a href="/forex_education/fundamentalAnalysis" title="Fundamental Analysis"><?php echo __("Fundamental Analysis") ?></a></li>
                <li class="page_item page-item-105"><a href="/forex_education/technicalAnalysis" title="Technical Analysis"><?php echo __("Technical Analysis") ?></a></li>
                <li class="page_item page-item-107"><a href="/forex_education/economicCalendar" title="Economic Calendar"><?php echo __("Economic Calendar") ?></a></li>
            </ul>
        </li>
        <li class="page_item page-item-17"><a href="/trading_platform" title="Trading Platform"><?php echo __("Trading Platform") ?></a>
            <ul class='children'>
                <li class="page_item page-item-19"><a href="/trading_platform" title="Meta Trader 4"><?php echo __("Meta Trader 4") ?></a></li>
                <li class="page_item page-item-21"><a href="/trading_platform/tradingSignal" title="Trading Signal"><?php echo __("Trading Signal") ?></a></li>
            </ul>
        </li>
        <li class="page_item page-item-23"><a href="/trading_products" title="Trading Products"><?php echo __("Trading Products") ?></a>
            <ul class='children'>
                <li class="page_item page-item-112"><a href="/trading_products" title="Forex (FX)"><?php echo __("Forex (FX)") ?></a></li>
                <li class="page_item page-item-27"><a href="/trading_products/cfds" title="CFDs"><?php echo __("CFDs") ?></a></li>
                <li class="page_item page-item-29"><a href="/trading_products/preciousMetals" title="Precious Metals"><?php echo __("Precious Metals") ?></a></li>
            </ul>
        </li>
        <li class="page_item page-item-31"><a href="/contact_us" title="Contact Us"><?php echo __("Contact Us") ?></a>
        </li>
    </ul>
</div>
