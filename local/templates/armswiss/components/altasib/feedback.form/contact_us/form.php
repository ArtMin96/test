<div class="afbf_feedback_poles">
	<script type="text/javascript">
		$(document).ready(function(){
			if(typeof $.dropdown!='undefined'){
				$(".afbf_item_pole .afbf_select").dropdown({
					"dropdownClass": "feedback_dropdown"
				});
			}
		});
	</script>
	<?if(trim($arParams["ALX_POPUP_TITLE"]) != ""):?><h1 align="center"><?=trim($arParams["ALX_POPUP_TITLE"])?></h1><?endif;?>
	<?echo CFile::ShowImage($arResult["POPUP_PICTURE"]["src"], 50, 40, "border=0", "", false)."";?>
	<?if ($arResult["RIGHT_TO_EDIT"]):?>
	<a href="<?=$arResult["ELEMENT_EDIT_LINK"]?>"><?echo $arResult["ELEMENT_NAME"]?></a>
	<?else:?>
	<?echo $arResult["ELEMENT_NAME"]?>
	<?endif;?>
	<form id="f_feedback_<?=$ALX?>" name="f_feedback_<?=$ALX?>" action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="FEEDBACK_FORM_<?=$ALX?>" value="Y" />
	
	<?if($arResult["ELEMENT_NAME"]!=""){?><input type="hidden" name="ELEMENT_NAME" value="<?=$arResult["ELEMENT_NAME"]?>" /><?}?>				
	<?if($arResult['ELEMENT_EDIT_LINK']!=""){?><input type="hidden" name="ELEMENT_EDIT_LINK" value="<?=$arResult['ELEMENT_EDIT_LINK']?>" /><?}?>
	<?if($arResult["ELEMENT_EDIT_LINK_ID"]!=""){?><input type="hidden" name="ELEMENT_EDIT_LINK_ID" value="<?=$arResult["ELEMENT_EDIT_LINK_ID"]?>" /><?}?>				
	
	
    <?php if($arParams["ADD_HREF_LINK"] != "N"):?>
			<input type="hidden" name="HREF_LINK_<?=$ALX?>" value="<?="http://" . $_SERVER["SERVER_NAME"].POST_FORM_ACTION_URI?>" />
    <? endif?>
    <? if(count($arResult["TYPE_QUESTION"]) >= 1):?>
    <?	/* TYPE_QUESTION */?>
        <div class="afbf_item_pole required is_filled">
            <div class="afbf_name"><?=$arParams["CATEGORY_SELECT_NAME"]?></div>
            <div class="afbf_inputtext_bg">
                <input type="hidden" id="type_question_name_<?=$ALX?>" name="type_question_name_<?=$ALX?>" value="<?=$arResult["TYPE_QUESTION"][0]["NAME"]?>">
                <select id="type_question_<?=$ALX?>" class="afbf_select" name="type_question_<?=$ALX?>" onchange="ALX_SetNameQuestion(this,'<?=$ALX?>');">
                    <option value=""><?if(!in_array("FLOATING_LABELS", $arParams['INPUT_APPEARENCE'])): echo GetMessage("ALX_CATEGORY_NO"); endif;?></option>
                    <?php foreach($arResult["TYPE_QUESTION"] as $arField):?>
                        <?php if(trim(htmlspecialcharsEx($_POST["type_question_".$ALX])) == $arField["ID"]):?>
                            <option value="<?=$arField["ID"]?>" selected><?=$arField["NAME"]?></option>
                        <?php else: ?>
                            <option value="<?=$arField["ID"]?>"><?=$arField["NAME"]?></option>
                        <?php endif ?>
                    <?php endforeach ?>
                </select>
            </div>
            <?php if($arParams['REQUIRED_SECTION'] == "Y"):?>
            <div class="afbf_error_text"><?=GetMessage('AFBF_ERROR_TEXT')?></div>
            <?php endif; ?>
        </div>
    <?php endif ?>

    <?php $k = 0;
    $countArr = count($arResult["FIELDS"]);
    $bFBtext = false;
    $strFBtext = '';

    if((is_array($arParams["PROPERTY_FIELDS"]) && in_array("FEEDBACK_TEXT", $arParams["PROPERTY_FIELDS"]))
		|| ($arParams["SECTION_FIELDS_ENABLE"] == "Y" && !empty($arResult["CURSECT_FIELDS"])
		&& is_array($arResult["CURSECT_FIELDS"]) && in_array("FEEDBACK_TEXT", $arResult["CURSECT_FIELDS"]))) {

            $strLen = mb_strlen($arResult["FEEDBACK_TEXT"], 'utf-8');
            $strFBtext = '<div class="afbf_item_pole';
            $strFBtext .= ($strLen > 0) ? ' is_filled' : '';
            $strFBtext .= in_array("FEEDBACK_TEXT_".$ALX, $arParams["PROPERTY_FIELDS_REQUIRED"]) ? ' required':'';
            $strFBtext .= '">';

            $strFBtext .= '<div class="afbf_inputtext_bg" id="error_EMPTY_TEXT">
                                <textarea class="afbf_textarea form-control" placeholder="'.GetMessage("ALX_TP_MESSAGE_TEXTMESS").'" rows="3" id="EMPTY_TEXT'.$ALX.'" name="FEEDBACK_TEXT_'.$ALX.'">'.$arResult["FEEDBACK_TEXT"].'</textarea>
                           </div>
                           <div class="afbf_error_text">'.GetMessage("AFBF_ERROR_TEXT").'</div>
                           </div>';

			}

		$arrFields_userconsent = array();
		foreach($arResult["FIELDS"] as $key=>$arField):
            $arrFields_userconsent[] = $arField['NAME'];
            $fieldClass = '';
            $nameClass = '';
            if ($arField['DEFAULT_VALUE'] || $arField['AUTOCOMPLETE_VALUE'] || $arField["TYPE"] == "L" || $arField["TYPE"] == "E" || $arField["TYPE"] == "G")
                $fieldClass .= ' is_filled';
            if ($arField["REQUIRED"]=='Y')
                $fieldClass .= ' required';
            if ($arField["CODE"] == "EMAIL_".$ALX)
                $fieldClass .= ' is_email';
            if ($arField['LIST_TYPE'] == 'C')
                $nameClass .= ' static_name';
            ?>
            <div id="afbf_<?=mb_strtolower($arField["CODE"])?>" class="form-group">

                <?php /* STRING */?>
                <?php if($arField["TYPE"] != "F"): ?>
                    <div class="afbf_inputtext_bg" id="error_<?=$arField["CODE"]?>">
                        <?php if(!empty($_POST["FIELDS"][$arField["CODE"]])):?>
                            <input type="text" size="40" id="<?=$arField["CODE"]?>1" name="FIELDS[<?=$arField["CODE"]?>]" value="<?=trim(htmlspecialcharsEx($_POST["FIELDS"][$arField["CODE"]]))?>" class="afbf_inputtext" />
                        <?php elseif(!empty($arField["AUTOCOMPLETE_VALUE"])):
                            $readonly = "";
                            if($arParams["PROPS_AUTOCOMPLETE_VETO"]=="Y" && $USER->IsAuthorized())
                                if($arField["CODE"] == "FIO_".$ALX || $arField["CODE"] == "EMAIL_".$ALX || $arField["CODE"] == "PHONE_".$ALX)
                                    $readonly = 'readonly = "readonly" ';?>
                            <input type="text" placeholder="<?= $arField["NAME"]?>" id="<?=$arField["CODE"]?>1" name="FIELDS[<?=$arField["CODE"]?>]" <?=$readonly?>value="<?=trim(htmlspecialcharsEx($arField["AUTOCOMPLETE_VALUE"]))?>" class="afbf_inputtext form-control" />
                        <?php else: ?>
                            <input type="text" placeholder="<?= $arField["NAME"]?>" id="<?=$arField["CODE"]?>1" name="FIELDS[<?=$arField["CODE"]?>]" value="<?=$arField["DEFAULT_VALUE"]?>" class="afbf_inputtext form-control" onblur="if(this.value==''){this.value='<?=$arField["DEFAULT_VALUE"]?>'}" onclick="if(this.value=='<?=$arField["DEFAULT_VALUE"]?>'){this.value=''}" />
                        <?php endif; ?>

                        <?php if ($arField["CODE"] == "EMAIL_".$ALX): ?>
                            <div class="afbf_error_text"><?=GetMessage("AFBF_ERROR_TEXT_EMAIL")?></div>
                        <?php elseif ($arField['REQUIRED'] == 'Y'): ?>
                            <div class="afbf_error_text"><?=GetMessage('AFBF_ERROR_TEXT')?></div>
                        <?php endif; ?>
                    </div>
                <?php endif ?>
            </div>
            <?php if(!$bFBtext && ($arResult["FIELDS"][$key+1]["SORT"]>10000 || $key==$countArr-1)):
                echo $strFBtext;
                $bFBtext = true;
            endif;?>

        <?php endforeach ?>

        <?php
        if(!$bFBtext) {
            echo $strFBtext;
            $bFBtext = true;
        }
        ?>

	<?if ($arParams['USER_CONSENT'] == 'Y'):?>
     <?$APPLICATION->IncludeComponent(
      "bitrix:main.userconsent.request",
      "altasib_fb",
      array(
          "ID" => $arParams["USER_CONSENT_ID"],
          "IS_CHECKED" => $arParams["USER_CONSENT_IS_CHECKED"],
          "AUTO_SAVE" => "Y",
		  "INPUT_NAME" => "alx_fb_agreement",
          "IS_LOADED" => $arParams["USER_CONSENT_IS_LOADED"],
          "REPLACE" => array(
           'button_caption' => GetMessage('ALX_TP_MESSAGE_SUBMIT'),
           'fields' => $arrFields_userconsent,
		   'INPUT_LABEL' =>$arParams["USER_CONSENT_INPUT_LABEL"],
			),
		),
		$component,
		array("HIDE_ICONS" => "Y", "ACTIVE_COMPONENT" => "Y")
     );?>
	 <div class="afbf_error_text"><?=GetMessage('AFBF_ERROR_TEXT_AGREEMENT')?></div>
	<script>
		BX.message({
			MAIN_USER_CONSENT_REQUEST_TITLE: '<?=getMessage('MAIN_USER_CONSENT_REQUEST_TITLE')?>',
			MAIN_USER_CONSENT_REQUEST_BTN_ACCEPT: '<?=getMessage('MAIN_USER_CONSENT_REQUEST_BTN_ACCEPT')?>',
			MAIN_USER_CONSENT_REQUEST_BTN_REJECT: '<?=getMessage('MAIN_USER_CONSENT_REQUEST_BTN_REJECT')?>',
			MAIN_USER_CONSENT_REQUEST_LOADING: '<?=getMessage('MAIN_USER_CONSENT_REQUEST_LOADING')?>',
			MAIN_USER_CONSENT_REQUEST_ERR_TEXT_LOAD: '<?=getMessage('MAIN_USER_CONSENT_REQUEST_ERR_TEXT_LOAD')?>'

		});
	</script>
	<?$path_userconsent = $this->__folder."/bitrix/main.userconsent.request/altasib_fb";?>
	<script type="text/javascript" src="<?=$path_userconsent?>/user_consent.js"></script>
	<link href="<?=$path_userconsent?>/user_consent.css" type="text/css"  rel="stylesheet" />

	<?//include($path.'/lang/ru/user_consent.php');?>
    <?endif;?>
<?		echo bitrix_sessid_post()?>
		<div class="afbf_submit_block">
            <button type="submit" class="btn" id="fb_close_<?=$ALX?>" name="SEND_FORM"><?=GetMessage('ALX_TP_MESSAGE_SUBMIT')?></button>
		</div>
	</form>

</div>
