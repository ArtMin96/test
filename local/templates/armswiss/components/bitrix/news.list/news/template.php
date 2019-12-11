<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<section id="events">
    <div class="container">
        <h2><?= GetMessage('EVENTS_NEWS'); ?></h2>
        <div class="events-list">
            <div class="row news-list">
                <?php foreach($arResult["ITEMS"] as $arItem): ?>
                    <div class="col-xl-3 col-md-6 news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="event">
                            <div class="card">
                                <?php if($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])) : ?>
                                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" class="card-img-top" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
                                <?php endif; ?>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php

                                        // Check if name exist
                                        if(LANGUAGE_ID == 'ru') {
                                            echo $arItem['DISPLAY_PROPERTIES']['RUSSIAN_TITLE']['VALUE'];
                                        } else {
                                            echo $arItem["NAME"];
                                        }
                                        ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php

                                        // Check if preview text exist
                                        if($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]) {
                                            if(LANGUAGE_ID == 'ru') {
                                                echo $arItem['DISPLAY_PROPERTIES']['RUSSIAN_PREVIEW_TEXT']['VALUE'];
                                            } else {
                                                echo $arItem["PREVIEW_TEXT"];
                                            }
                                        }
                                        ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text">
                                        <small class="text-muted">
                                            <span class="event-date">16.01.19</span>
                                            <span class="event-place">
                                                <?php

                                                // Check if location exist
                                                if(!empty($arItem['DISPLAY_PROPERTIES']['ENGLISH_LOCATION']['VALUE']) || !empty($arItem['DISPLAY_PROPERTIES']['RUSSIAN_LOCATION']['VALUE'])) {
                                                    if(LANGUAGE_ID == 'ru') {
                                                        echo $arItem['DISPLAY_PROPERTIES']['RUSSIAN_LOCATION']['VALUE'];
                                                    } else {
                                                        echo $arItem['DISPLAY_PROPERTIES']['ENGLISH_LOCATION']['VALUE'];
                                                    }
                                                }
                                                ?>
                                            </span>
                                        </small>
                                    </p>
                                    <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>" class="card-link"><?= GetMessage('EVENT_DETAIL'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="load-done d-inline-block" id="events-loaded">
                        <?= $arResult['NAV_STRING'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
