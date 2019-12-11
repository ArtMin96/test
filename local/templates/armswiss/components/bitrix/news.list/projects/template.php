<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<section id="otherProjectsTabs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1><?= GetMessage('PROJECTS') ?></h1>
            </div>
            <div class="col-lg-8">
                <div class="otherProjectsTab">
                    <nav class="project-tab-menu mb-5">
                        <div class="nav nav-tabs d-flex justify-content-between" id="nav-tab" role="tablist">
                            <span><i class="fas fa-filter"></i> <?= GetMessage('FILTERS') ?> :</span>
                            <button type="button" class="nav-item nav-link active" onclick="projects.filter('co2')">
                                <i class="fas fa-cloud"></i> CO2
                            </button>
                            <button type="button" class="nav-item nav-link" onclick="projects.filter('power')">
                                <i class="fas fa-bolt"></i> power
                            </button>
                            <button type="button" class="nav-item nav-link" onclick="projects.filter('location')">
                                <i class="fas fa-map-marker-alt"></i> location
                            </button>
                            <button type="button" class="nav-item nav-link" onclick="projects.filter('project-type')">
                                <i class="fas fa-th-large"></i> project type
                            </button>
                        </div>
                    </nav>
                </div>
            </div>

        </div>

        <div class="otherProjectsTabsBox">
            <div class="other-projects-list">
                <div class="events-list">
                    <div class="row news-list">
                        <?php foreach($arResult["ITEMS"] as $arItem) : ?>

                            <div class="col-xl-3 col-md-4 col-sm-12 news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <div class="event">
                                    <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>">
                                        <div class="card">
                                            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" class="card-img-top" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"]; ?>">
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

                                                    // Check if name exist
                                                    if(LANGUAGE_ID == 'ru') {
                                                        echo $arItem['DISPLAY_PROPERTIES']['RUSSIAN_TITLE']['VALUE'];
                                                    } else {
                                                        echo $arItem["PREVIEW_TEXT"];
                                                    }
                                                    ?>
                                                </p>
                                                <div class="card-links-box">
                                                    <div class="card-text-links">
                                                        <?php

                                                        foreach($arItem['DISPLAY_PROPERTIES'] as $arProperty) {

                                                            if($arProperty['CODE'] == 'RUSSIAN_TITLE' || $arProperty['CODE'] == 'RUSSIAN_DESCRIPTION' || $arProperty['CODE'] == 'RUSSIAN_PREVIEW_TEXT') {
                                                                continue;
                                                            }

                                                            if($arProperty['CODE'] == "F_CO2") {
                                                                $icon = '<i class="fas fa-cloud"></i>';
                                                            }
                                                            if($arProperty['CODE'] == "F_LOCATION") {
                                                                $icon = '<i class="fas fa-map-marker-alt"></i>';
                                                            }
                                                            if($arProperty['CODE'] == "F_POWER") {
                                                                $icon = '<i class="fas fa-bolt"></i>';
                                                            }
                                                            if($arProperty['CODE'] == "F_PROJECT_TYPE") {
                                                                $icon = '<i class="fas fa-th-large"></i>';
                                                            }
                                                            ?>

                                                            <p class="card-text">
                                                                <?= $icon; ?> <?= $arProperty["NAME"]; ?> <span class="project-card-statistic"></span>
                                                            </p>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
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
        </div>
    </div>
</section>
