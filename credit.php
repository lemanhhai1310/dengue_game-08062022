<?php $data["title"] = "06-PC-Credit"; ?>
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
<div id="modal-intro-credit" class="welcome__modal uk-modal-full uk-padding-remove" uk-modal>
    <div class="uk-modal-dialog welcome__modal__dialog">
        <button class="uk-modal-close-default credit__close system__modal__close uk-hidden@m" type="button" uk-close></button>
        <div class="uk-container uk-container-large">
            <div class="uk-height-viewport uk-flex uk-flex-column">
                <div class="uk-flex-auto uk-section-small uk-flex uk-flex-middle">
                    <div class="uk-width-1-1 uk-text-center">
                        <div class="uk-hidden@m uk-flex-middle uk-light uk-grid-small" uk-grid>
                            <div class="uk-width-auto">
                                <div class="credit__boxImg uk-margin-auto">
                                    <div class="credit__img"></div>
                                </div>
                            </div>
                            <div class="uk-width-expand uk-text-left">
                                <div class="item__16">
                                    <div class="credit__titleM">THANK YOU</div>
                                </div>
                                <div class="item__16">
                                    <div class="credit__descM">
                                        Thank you for playing Take Dat, Dengue! with us.
                                        <div>Together we can beat Dengue!</div>
                                        Spread the awareness and take this opportunity to support the launch of our game-changing dengue vaccine.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item__25 uk-visible@m">
                            <div class="item__17">
                                <div class="credit__boxImg uk-margin-auto">
                                    <div class="credit__img"></div>
                                </div>
                            </div>
                            <div class="item__17 uk-light">
                                <h2 class="welcome__modal__box1__title uk-h2">THANK YOU</h2>
                            </div>
                        </div>
                        <div class="item__25 uk-visible@m">
                            <div class="welcome__modal__box4">
                                Thank you for playing Take Dat, Dengue! with us. <br>
                                <span>Together we can beat Dengue!</span> <br>
                                Spread the awareness and take this opportunity to support the <br>
                                launch of our game-changing dengue vaccine.
                            </div>
                        </div>
                        <div class="item__25 uk-visible@m">
                            <a href="" class="credit__btn">BACK</a>
                        </div>
                    </div>
                </div>
                <div class="uk-section-xsmall">
                    <div class="" uk-grid uk-toggle="cls: uk-grid-divider; mode: media; media: @l">
                        <div class="uk-width-1-2 uk-width-2-5@m">
                            <div class="uk-grid uk-grid-small uk-flex-middle" uk-gird>
                                <div class="uk-width-auto">
                                    <img class="credit__logo" src="images/Takeda_logo.png" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <div class="credit__txt uk-light">
                                        <span>Takeda Malaysia Sdn Bhd</span> (869989-K), Unit TB-L 13-1, Level 13, Tower B, Plaza 33, No. 1, Jalan Kemajuan, Seksyen 13, 46200 Petaling Jaya, Selangor Darul Ehsan, Malaysia.
                                        Tel: +603 7953 3100    Fax: +603 7953 3101
                                        C-ANPROM/MY/DENV/0045 MAY 2022
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="credit__txt uk-light">
                                <span>Disclaimer:</span> TAK-003 is currently not approved for any indication in Malaysia. This information is available to Takeda staff for information purposes only; it should not be used for diagnosing or treating a health problem or disease. It is not intended to substitute for consultation with a healthcare provider. Please consult your healthcare provider for further advice.
                                Copyright © 2022 Takeda Pharmaceutical Company Limited. All rights reserved. Takeda and the Takeda Logo are trademarks of Takeda Pharmaceutical Company Limited, used under license.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    UIkit.modal('#modal-intro-credit').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>