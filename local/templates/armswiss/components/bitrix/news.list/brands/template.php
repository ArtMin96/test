<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<section id="brands">
    <div class="container">
        <div class="brands-list">
            <?php
            foreach($arResult["ITEMS"] as $arItem): ?>
                <div class="brand">
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"]; ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
