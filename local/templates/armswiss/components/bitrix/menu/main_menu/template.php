<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

if (empty($arResult["ALL_ITEMS"]))
	return;

CUtil::InitJSCore();

?>

<?php

foreach($arResult["MENU_STRUCTURE"] as $itemID => $arColumns):?>
    <li class="nav-item <?php if($arResult["ALL_ITEMS"][$itemID]["SELECTED"]): ?>active<?php endif; ?>">
        <a class="nav-link" href="<?= $arResult["ALL_ITEMS"][$itemID]["LINK"]; ?>"><?= htmlspecialcharsbx($arResult["ALL_ITEMS"][$itemID]["TEXT"]); ?></a>
    </li>
<?php endforeach; ?>