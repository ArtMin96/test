<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<section id="carousel">
    <div class="slick-slider">
        <?foreach($arResult["ITEMS"] as $cell => $arItem):?>
            <div>
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                <?php if(!empty($arItem['DISPLAY_PROPERTIES'])) : ?>
                    <div class="carousel-content">
                        <h1><?= $arItem['DISPLAY_PROPERTIES']['SLIDER_TITLE']['VALUE']; ?></h1>
                        <p><?= $arItem['DISPLAY_PROPERTIES']['SLIDER_DESCRIPTION']['VALUE']; ?></p>
                        <a href="<?= $arItem['DISPLAY_PROPERTIES']['SLIDER_LINK']['VALUE']; ?>" target="_blank" class="head-btn"><?= GetMessage('LEARN_MORE'); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        <?endforeach;?>
    </div>
</section>
