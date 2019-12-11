<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

\Bitrix\Main\UI\Extension::load("ui.bootstrap4");
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<?if(!empty($arResult["ERROR_MESSAGE"]))
{
    foreach($arResult["ERROR_MESSAGE"] as $v)
        ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
    ?><div class="alert alert-success"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
    <?=bitrix_sessid_post()?>
    <div class="form-group">
        <input type="text" class="form-control" id="mainFeedback_name" aria-describedby="emailHelp" placeholder="<?=GetMessage("MFT_NAME");?>" value="<?=$arResult["AUTHOR_NAME"]?>">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" id="mainFeedback_email" placeholder="<?=GetMessage("MFT_EMAIL")?>" value="<?=$arResult["AUTHOR_EMAIL"]?>">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" id="exampleInputSubject" placeholder="Subject">
    </div>
    <div class="form-group">
        <textarea class="form-control" id="mainFeedback_message" rows="3" placeholder="<?=GetMessage("MFT_MESSAGE")?>"><?=$arResult["MESSAGE"]?></textarea>
    </div>
    <div class="form-group text-right mt-4">
        <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
        <button type="submit" name="submit"  class="btn"><?=GetMessage("MFT_SUBMIT")?>  </button>
    </div>
</form>