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
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <?foreach($arResult["ITEMS"] as $cell => $arItem):?>
                <div class="carousel-item <?php if(!$cell) : ?>active<?php endif; ?>">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="d-block w-100" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                </div>
            <?endforeach;?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"></a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"></a>
    </div>
</section>
