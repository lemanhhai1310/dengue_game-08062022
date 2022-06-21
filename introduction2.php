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
<div id="modal-intro-full" class="welcome__modal uk-modal-full uk-padding-remove" uk-modal>
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
                                        <div class="uk-text-center introduction__title2 item__46">
                                            <span>how to play?</span>
                                        </div>
                                        <div class="item__46">
                                            <div class="item__29">
                                                <div class="introduction__desc1">Your mission in this game is to eliminate the mosquitoes that are
                                                    <br>
                                                    attacking our colleague, Justeen, in the middle of the screen.</div>
                                            </div>
                                            <div class="item__29 uk-text-center">
                                                <div class="introduction__img1">

                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                        <?php if ($i==2): ?>
                                        <div class="uk-text-center introduction__title2 item__38">
                                            <span>how to play?</span>
                                        </div>
                                        <div class="item__38">
                                            <div class="item__69">
                                                <div class="introduction__desc1">
                                                    Tap on the mosquitoes <br>
                                                    with your cursor or fingers to kill them.
                                                </div>
                                            </div>
                                            <div class="item__69 uk-text-center">
                                                <div class="introduction__img2">

                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                        <?php if ($i==3): ?>
                                        <div class="uk-text-center introduction__title2 item__36">
                                            <span>how to play?</span>
                                        </div>
                                        <div class="item__36 uk-text-center">
                                            <div class="introduction__img3">

                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <div class="uk-text-center welcome__modal__txt1">
                                            <?php if ($i==1): ?>

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
    UIkit.modal('#modal-intro-full').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>