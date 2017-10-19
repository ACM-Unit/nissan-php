<?php include("header.html"); ?>

    <link rel="stylesheet" href="/newsite/css/flexslider.css" type="text/css"
          xmlns:c="http://www.w3.org/1999/XSL/Transform">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="/newsite/js/jquery.flexslider.js"></script>
    <style>
        #object {
            width: 100%;
            height: 667px;
        }

        @media screen and (max-width: 1400px) {
            #object {
                height: 600px;
            }
        }

        @media screen and (max-width: 1280px) {
            #object {
                height: 569px;
            }
        }

        @media screen and (max-width: 980px) {
            #object {
                height: 435px;
            }
        }

        @media screen and (max-width: 768px) {
            #object {
                height: 341px;
            }
        }

        @media screen and (max-width: 640px) {
            #object {
                height: 285px;
            }
        }

        @media screen and (max-width: 480px) {
            #object {
                height: 214px;
            }
        }

        @media screen and (max-width: 360px) {
            #object {
                height: 160px;
            }
        }
    </style>
    <div class="flexslider">
        <ul class="slides">
            <li>
                <a href="https://www.nissan.ua/vehicles/new-vehicles/qashqai-2017.html"><img
                            src="/newsite/images/4.jpg"/></a>
            </li>
            <li>
                <a href="https://www.nissan.ua/vehicles/new-vehicles/qashqai-2017.html">
                    <object id="object" type=application/x-shockwave-flash data=/images/AutoPlus_Tactic5.swf>
                        <param name=movie value=/newsite/images/AutoPlus_Tactic5.swf>
                    </object>
                </a>
            </li>

            <li>
                <a href="https://www.nissan.ua/vehicles/new-vehicles/juke/model-offers.html#combat"><img
                            src="/newsite/images/2.jpg"/></a>
            </li>
            <li>
                <a href="https://www.nissan.ua/vehicles/new-vehicles/x-trail/model-offers.html#combat"><img
                            src="/newsite/images/3.jpg"/></a>
            </li>

            <li>
                <a href="#new-models"><img src="/newsite/images/5.jpg"/></a>
            </li>
        </ul>
    </div>
    <script type="text/javascript" charset="utf-8">
        $(window).load(function () {
            $('.flexslider').flexslider({
                controlNav: false
            });
        });
    </script>
    <div class="freeEditorial freeEditorialParsys parsys">
        <div class="columns column section columns12">
            <div class="grid-row">
                <div class="col-12">
                    <div class="parsys col1-par">
                        <div class="vehiclePromotions section">
                            <div class="c_011"
                                 data-recent-vehicles-url="//libs.nissan-cdn.net/etc/designs/nissan/6.2.2-115/common-assets/json/recentlyView.json">
                                <div class="c_004 ">
                                    <div class="heading-group">
                                        <h2><span>Модельний ряд</span></h2>
                                    </div>
                                </div>
                                <div id="new-models" class="vehicles">
                                    <?php
                                    require_once('services/Services.php');
                                    $services = new Services();
                                    $models = $services->getModels();
                                    ?>
                                    <?php
                                    $addr = $_POST['nissan-sumy@ukr.net'];
                                    $theme = $_POST['theme'];
                                    $text = $_POST['text'];
                                        try{
                                            mail($addr, $theme, $text, "From: vova_33@mail.ru");
                                            echo "<h3>Сообщение отправлено</h3>";
                                        }catch(Exception $e){
                                            echo 'Поймано исключение: ',  $e->getMessage(), "\n";
                                        }
                                    echo "<h3>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h3>";
                                    ?>
                                    <?php foreach ($models

                                    AS $key => $model) { ?>

                                    <?php if ($key < 3) { ?>
                                    <div class="col-4">
                                        <div class="vehiclePreview1 vehiclePreview">
                                            <div class="c_130" data-vehicle-id="<?php echo $model['modelcode']; ?>"
                                                 data-vehicle-category="Міські автомобілі,PASSENGERS,CONFIGURATOR">
                                                <div class="vehicle-link ">
                                                    <div class="header-group">
                                                        <h3 class="car-title">
                                                            <a href="/car-models/<?php echo $model['name']; ?>"
                                                               data-adobe-tagging="vehicles|new|<?php echo $model['name']; ?>"><?php echo $model['name']; ?></a>

                                                        </h3>
                                                        <p class="row vehicle-strapline">
                                                            <?php echo $model['tagline']; ?>
                                                        </p>
                                                        <div class="row starting-price">
                                                            <div class="c_184 show-full-price"
                                                            <%--data-price-currency="грн" data-defer="false"
                                                            data-price-code="" data-price-disclaimer=""
                                                            data-price-description=""
                                                            data-price-vehicle-disabled="false" data-tax=""
                                                            data-model-code="${model.modelcode}"
                                                            data-model-path="/nissan/ua/uk/${model.modelcode}"
                                                            data-model-grade="" data-model-version=""
                                                            data-extra-info-path-suffix="https://www.nissan.ua/content/nissan/uk_UA/cars/${model.name}.html"
                                                            data-tooltip-popup-disabled="false"
                                                            data-force-display-type="msrp"
                                                            data-manual-price-formatting="true"
                                                            data-fuel-consumption-disclaimer-label=""
                                                            data-co2-emissions-disclaimer-label=""
                                                            data-efficiency-disclaimer-label=""--%>>
                                                            <ul class="prices">
                                                                <li class="msrp">
                                                                    <div class="content show">
                                                                        <div class="price">
                                                                            <div style="display: block;"
                                                                                 class="c_008">
                                                                                <a data-hasqtip="2" href="#"
                                                                                   class="has-tooltip tooltip-icon-asterisk"
                                                                                   data-parent-component=""
                                                                                   data-tooltip-id="tooltip-input-element-id-17"
                                                                                   data-tooltip-my="top center"
                                                                                   data-tooltip-at="bottom center"
                                                                                   tabindex="0"
                                                                                   data-label-option="tooltip-icon-asterisk"
                                                                                   data-tooltip-position="">
                                                                                    <span>ЦІНА ВІД</span>
                                                                                </a>
                                                                                <div class="tooltip-panel"
                                                                                     data-tooltip-id="tooltip-input-element-id-17">
                                                                                    Спеціальна ціна – ціна,
                                                                                    розрахована з урахуванням
                                                                                    спеціальної пропозиції на
                                                                                    автомобілі. Ціна є
                                                                                    рекомендованою і може
                                                                                    відрізнятися від остаточної
                                                                                    ціни, запропонованої дилером
                                                                                    Nissan в Україні.<br>
                                                                                </div>
                                                                            </div>
                                                                            <span id="price<?php echo $key; ?>"
                                                                                  class="full-price"
                                                                                  dir="ltr"><?php echo $model['price']; ?></span>
                                                                        </div>
                                                                        <div class="subtext"><?php echo $model['credit']; ?></div>
                                                                        <a style="display: none;" href=""
                                                                           class="cta"></a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="/car-models/<?php echo $model['name']; ?>"
                                                   data-adobe-tagging="vehicles|new|<?php echo $model['name']; ?>"
                                                   class="media-view" data-alt="">
                                                        <span class="picture-element" data-alt="">
                                                             <span data-src="/storage/<?php echo $model['image']; ?>"
                                                                   data-media="(min-width: 1.0em)"
                                                                   data-density="1"></span>
                                                             <span data-src="/storage/<?php echo $model['image']; ?>"
                                                                   data-media="(min-width: 1.0em)"
                                                                   data-density="2"></span>
                                                             <span data-src="/storage/<?php echo $model['image']; ?>"
                                                                   data-media="(min-width: 36.3125em)"
                                                                   data-density="1"></span>
                                                             <span data-src="/storage/<?php echo $model['image']; ?>"
                                                                   data-media="(min-width: 36.3125em)"
                                                                   data-density="2"></span>
                                                             <span data-src="/storage/<?php echo $model['image']; ?>"
                                                                   data-media="(min-width: 60.0em)"
                                                                   data-density="1"><img
                                                                         src="/storage/<?php echo $model['image']; ?>"
                                                                         class="" alt=""></span>
                                                             <span data-src="/storage/<?php echo $model['image']; ?>"
                                                                   data-media="(min-width: 60.0em)"
                                                                   data-density="2"></span>
                                                             <noscript>
                                                                 <img alt=""
                                                                      src="/storage/<?php echo $model['image']; ?>"/>
                                                             </noscript>
                                                         </span>
                                                </a>
                                            </div>
                                            <a class="primary-cta" href="/car-models/<?php echo $model['name']; ?>"
                                               data-adobe-tagging="vehicles|new|<?php echo $model['name']; ?>"
                                               target="_self">
                                                детальніше</a>
                                            <a class="secondary-cta cta-configure"
                                               href="http://experience.nissan.ua/UA/uk/tool/car-builder/<?php echo $model['name']; ?>.html"
                                               data-adobe-tagging="" target="_blank">
                                                КОНФІГУРАТОР</a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="columns column section columns12">
        <div class="grid-row">
            <div class="col-12">
                <div class="parsys col1-par">
                    <div class="vehiclePromotions section">
                        <div class="c_011"
                             data-recent-vehicles-url="//libs.nissan-cdn.net/etc/designs/nissan/6.2.2-115/common-assets/json/recentlyView.json">
                            <div class="c_004 ">
                                <div class="heading-group">
                                    <h2><span>  </span></h2>
                                </div>
                            </div>
                            <div class="vehicles">
                                <?php foreach ($models

                                AS $key => $model) { ?>
                                <?php if ($key > 2) { ?>
                                <div class="col-4">
                                    <div class="vehiclePreview1 vehiclePreview">
                                        <div class="c_130" data-vehicle-id="<?php echo $model['modelcode']; ?>"
                                             data-vehicle-category="Міські автомобілі,PASSENGERS,CONFIGURATOR">
                                            <div class="vehicle-link ">
                                                <div class="header-group">
                                                    <h3 class="car-title">
                                                        <a href="/car-models/<?php echo $model['name']; ?>"
                                                           data-adobe-tagging="vehicles|new|<?php echo $model['name']; ?>"><?php echo $model['name']; ?></a>
                                                    </h3>
                                                    <p class="row vehicle-strapline">
                                                        <?php echo $model['tagline']; ?>
                                                    </p>
                                                    <div class="row starting-price">
                                                        <div class="c_184  <%--show-full-price--%>"
                                                        <%--data-price-currency="грн" data-defer="false"
                                                        data-price-code="" data-price-disclaimer=""
                                                        data-price-description="" data-price-vehicle-disabled="false"
                                                        data-tax="" data-model-code="${model.modelcode}"
                                                        data-model-path="/nissan/ua/uk/${model.modelcode}"
                                                        data-model-grade="" data-model-version=""
                                                        data-extra-info-path-suffix="https://www.nissan.ua/content/nissan/uk_UA/cars/${model.name}.html"
                                                        data-tooltip-popup-disabled="false"
                                                        data-force-display-type="msrp"
                                                        data-manual-price-formatting="true"
                                                        data-fuel-consumption-disclaimer-label=""
                                                        data-co2-emissions-disclaimer-label=""
                                                        data-efficiency-disclaimer-label=""--%>>
                                                        <ul class="prices">
                                                            <li class="msrp">
                                                                <div class="content show">
                                                                    <div class="price">
                                                                        <div style="display: block;"
                                                                             class="c_008">
                                                                            <a data-hasqtip="2" href="#"
                                                                               class="has-tooltip tooltip-icon-asterisk"
                                                                               data-parent-component=""
                                                                               data-tooltip-id="tooltip-input-element-id-17"
                                                                               data-tooltip-my="top center"
                                                                               data-tooltip-at="bottom center"
                                                                               tabindex="0"
                                                                               data-label-option="tooltip-icon-asterisk"
                                                                               data-tooltip-position="">
                                                                                <span>ЦІНА ВІД</span>
                                                                            </a>
                                                                            <div class="tooltip-panel"
                                                                                 data-tooltip-id="tooltip-input-element-id-17">
                                                                                Спеціальна ціна – ціна,
                                                                                розрахована з урахуванням
                                                                                спеціальної пропозиції на
                                                                                автомобілі. Ціна є
                                                                                рекомендованою і може
                                                                                відрізнятися від остаточної
                                                                                ціни, запропонованої дилером
                                                                                Nissan в Україні.<br>
                                                                            </div>
                                                                        </div>
                                                                        <span id="price<?php echo $key; ?>"
                                                                              class="full-price"
                                                                              dir="ltr"><?php echo $model['price']; ?></span>
                                                                    </div>
                                                                    <div class="subtext"><?php echo $model['credit']; ?></div>
                                                                    <a style="display: none;" href=""
                                                                       class="cta"></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="/car-models/<?php echo $model['name']; ?>"
                                               data-adobe-tagging="vehicles|new|<?php echo $model['name']; ?>"
                                               class="media-view" data-alt="">
                                                         <span class="picture-element" data-alt="">
                                                             <span data-src="/storage/<?php echo $model['image']; ?>"
                                                                   data-media="(min-width: 1.0em)"
                                                                   data-density="1"></span>
                                                             <span data-src="/storage/<?php echo $model['image']; ?>"
                                                                   data-media="(min-width: 1.0em)"
                                                                   data-density="2"></span>
                                                             <span data-src="/storage/<?php echo $model['image']; ?>"
                                                                   data-media="(min-width: 36.3125em)"
                                                                   data-density="1"></span>
                                                             <span data-src="/storage/<?php echo $model['image']; ?>"
                                                                   data-media="(min-width: 36.3125em)"
                                                                   data-density="2"></span>
                                                             <span data-src="/storage/<?php echo $model['image']; ?>"
                                                                   data-media="(min-width: 60.0em)"
                                                                   data-density="1"><img
                                                                         src="/storage/<?php echo $model['image']; ?>"
                                                                         class="" alt=""></span>
                                                             <span data-src="/storage/<?php echo $model['image']; ?>"
                                                                   data-media="(min-width: 60.0em)"
                                                                   data-density="2"></span>
                                                             <noscript>
                                                                 <img alt=""
                                                                      src="/storage/<?php echo $model['image']; ?>"/>
                                                             </noscript>
                                                         </span>
                                            </a>
                                        </div>
                                        <a class="primary-cta" href="/car-models/<?php echo $model['name']; ?>"
                                           data-adobe-tagging="vehicles|new|<?php echo $model['name']; ?>"
                                           target="_self">
                                            детальніше</a>
                                        <a class="secondary-cta cta-configure"
                                           href="http://experience.nissan.ua/UA/uk/tool/car-builder/<?php echo $model['name']; ?>.html"
                                           data-adobe-tagging="" target="_blank">
                                            КОНФІГУРАТОР</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="columns column section columns12">
        <div class="grid-row">
            <div class="col-12">
                <div class="parsys col1-par">
                    <div class="actionPanel parbase section">
                        <div class="c_063-0" data-adobe-target-id="c2e05a4de246">
                            <div class="grid-row">

                                <div class="heading-group">
                                    <h2>Бажаєте дізнатися більше?</h2>
                                </div>
                                <ul>
                                    <li>
                                        <a href="/newsite/pages/test-drive.php">
                                            <span class="icon icon-testdrive"></span>
                                            <span class="label">ТЕСТ-ДРАЙВ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/brochures">
                                            <span class="icon icon-brochure"></span>
                                            <span class="label">БРОШУРА</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/offers">
                                            <span class="icon icon-offers"></span>
                                            <span class="label">Спеціальні пропозиції</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://nissan.ua/vehicles/car-configurator.html" target="_blank">
                                            <span class="icon icon-configure"></span>
                                            <span class="label">КОНФІГУРАТОР</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        window.setTimeout(function () {
            <?php foreach($models AS $key=>$model) {?>
            if (!$('#price<?php echo $key;?>').text() == '') {
                var str<?php echo $key;?> = $('#price<?php echo $key;?>').text();
                str<?php echo $key;?> = str<?php echo $key;?>.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
                $('#price<?php echo $key;?>').text(str<?php echo $key;?> + " грн");
            }
            <?php } ?>
        }, 2000);
    </script>

<?php include("footer.html"); ?>