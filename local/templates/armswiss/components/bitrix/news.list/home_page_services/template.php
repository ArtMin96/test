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

$themeClass = isset($arParams['TEMPLATE_THEME']) ? ' bx-'.$arParams['TEMPLATE_THEME'] : '';
?>

<section id="projects">
    <main>
        <div class="container">
            <h2><a href="./pages/projects.html"><?= GetMessage('OUR_PROJECTS'); ?></a></h2>
            <div class="projects-list">
                <div class="row">
                    <?php foreach($arResult["ITEMS"] as $arItem): ?>
                        <div class="col-md-4">
                            <div class="project">
                                <div class="card">
                                    <figure>
                                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" class="card-img-top" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
                                        <figcaption>
                                            <div class="card-body">
                                                <?php if($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]):?>
                                                    <h5 class="card-title">
                                                        <?php
                                                        if(LANGUAGE_ID == 'ru') {
                                                            echo $arItem['DISPLAY_PROPERTIES']['RUSSIAN_INPUT']['VALUE'][0];
                                                        } else {
                                                            echo $arItem["NAME"];
                                                        }
                                                        ?>
                                                    </h5>
                                                <?php endif; ?>

                                                <?php if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]): ?>
                                                    <p class="card-text">
                                                        <?php if(LANGUAGE_ID == 'ru') {
                                                            echo $arItem['DISPLAY_PROPERTIES']['RUSSIAN_DESCRIPTION']['VALUE'][0];
                                                        } else {
                                                            echo $arItem["PREVIEW_TEXT"];
                                                        }
                                                        ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>
</section>
