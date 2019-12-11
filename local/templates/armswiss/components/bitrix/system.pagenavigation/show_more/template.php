<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->createFrame()->begin("Загрузка навигации");
?>

<?if($arResult["NavPageCount"] > 1):?>

    <?if ($arResult["NavPageNomer"]+1 <= $arResult["nEndPage"]):?>
        <?
        $plus = $arResult["NavPageNomer"]+1;
        $url = $arResult["sUrlPathParams"] . "PAGEN_".$arResult["NavNum"]."=".$plus;

        ?>

        <div class="load_more load-more-event" data-url="<?=$url?>">
            <?= GetMessage('LOAD_MORE'); ?>
            <i class="fas fa-arrow-down"></i>
        </div>

    <?else:?>

        <div class="load_more load-more-event">
            <?= GetMessage('LOADED'); ?>
            <i class="fas fa-check"></i>
        </div>

    <?endif?>

<?endif?>