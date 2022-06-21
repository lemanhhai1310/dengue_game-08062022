<?php $data["title"] = "03-Introduction"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-position-top">
    <nav class="opening__navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
        <div class="uk-navbar-left">
            <div class="uk-navbar-item">
                <div class="opening__navbar__boxIcon" data-src="images/00-PC-Opening/cup.png" uk-img></div>
            </div>
        </div>
        <div class="uk-navbar-right">
            <div class="uk-navbar-item">
                <div class="opening__navbar__boxIcon" data-src="images/00-PC-Opening/setup.png" uk-img></div>
            </div>
        </div>
    </nav>
</div>
<div id="modal-welcome-full" class="welcome__modal uk-modal-full uk-padding-remove" uk-modal>
    <div class="uk-modal-dialog welcome__modal__dialog">
        <div class="uk-container uk-container-large">
            <div uk-slider="finite: true;">

                <div class="uk-position-relative">

                    <div class="uk-slider-container uk-light">
                        <ul class="uk-slider-items uk-child-width-1-1 uk-grid-match" uk-height-viewport="min-height: 300">
                            <?php for ($i=1;$i<=3;$i++): ?>
                            <li>
                                <div class="uk-flex uk-flex-column uk-section-xsmall">
                                    <div class="uk-flex-auto">
                                        <?php if ($i==1): ?>
                                            <div class="item__54 uk-text-center">
                                                <div class="introduction__bg1 uk-margin-auto"></div>
                                            </div>
                                            <div class="item__54 uk-text-center">
                                                <div class="item__9">
                                                    <div class="introduction__title1">DID YOU KNOW?</div>
                                                </div>
                                                <div class="item__9">
                                                    <div class="introduction__desc1">
                                                        The Aedes mosquito which spreads the dengue virus lives <br> both indoors and outdoors near people1!
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($i==2): ?>
                                            <div class="item__20 uk-text-center">
                                                <div class="introduction__bg2 uk-margin-auto"></div>
                                            </div>
                                            <div class="item__20 uk-text-center">
                                                <div class="item__9">
                                                    <div class="introduction__title1">Meet Justeen</div>
                                                </div>
                                                <div class="item__9">
                                                    <div class="introduction__desc1">
                                                        Justeen is being attacked by a swarm of Aedes Mosquitoes <br> at our office pantry. Go there and save him NOW before he
                                                        <br> gets dengue fever and needs to be hospitalized.
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($i==3): ?>
                                            <div class="uk-text-center">
                                                <div class="introduction__bg3 uk-margin-auto"></div>
                                            </div>
                                            <div class="uk-text-center">
                                                <div class="item__27">
                                                    <div class="introduction__title1">SOS! </div>
                                                </div>
                                                <div class="item__27">
                                                    <div class="introduction__desc1">
                                                        Justeen is being attacked by a swarm of Aedes Mosquitoes at <br>
                                                        our office pantry. Go there and save him NOW before he gets <br>
                                                        dengue fever and needs to be hospitalized.
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <div class="uk-text-center welcome__modal__txt1">
                                            <?php if ($i==1): ?>
                                                1. Centers for disease control and prevention. CDC. Dengue Transmission. Available from: https://www.cdc.gov/dengue/transmission/index.html#:~:text=These%20mosquitoes%20prefer%20to%20bite,person%20infected%20with%20the%20virus. Accessed on 27th May 2022.
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php endfor; ?>
                        </ul>
                    </div>

                    <div class="uk-position-bottom" style="bottom: 160px">
                        <div class="uk-child-width-auto uk-flex-middle" uk-grid>
                            <div>
                                <a class="welcome__modal__slidenav welcome__modal__slidenav--back uk-position-center-left" href="#" uk-slidenav-previous uk-slider-item="previous">Back</a>
                            </div>
                            <div>
                                <ul class="welcome__modal__dots uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-position-center"></ul>
                            </div>
                            <div>
                                <a class="welcome__modal__slidenav welcome__modal__slidenav--next uk-position-center-right" href="#" uk-slidenav-next uk-slider-item="next">Next</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<script>
    UIkit.modal('#modal-welcome-full').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>