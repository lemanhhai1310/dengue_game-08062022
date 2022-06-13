<?php $data["title"] = "01-System"; ?>
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
<!-- This is the modal with the outside close button -->
<div id="modal-system-outside" class="uk-flex-top" uk-modal>
    <div class="system__modal__dialog system__modal__body uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <button class="uk-modal-close-default system__modal__close" type="button" uk-close></button>
        <div class="uk-width-1-1 uk-flex-auto uk-flex uk-flex-column">
            <div class="uk-text-center uk-position-relative uk-position-z-index" uk-switcher="animation: uk-animation-fade; toggle: > *">
                <button class="system__modal__tabBtn uk-button uk-button-default" type="button">Introduction</button>
                <button class="system__modal__tabBtn uk-button uk-button-default" type="button">Weapons</button>
                <button class="system__modal__tabBtn uk-button uk-button-default" type="button">Mozzies</button>
                <button class="system__modal__tabBtn uk-button uk-button-default" type="button">Settings</button>
            </div>

            <ul class="system__modal__switcher uk-switcher uk-flex-auto uk-background-muted uk-flex uk-flex-middle">
                <li>
                    <div uk-slider="finite: true">

                        <div class="uk-position-relative">

                            <div class="uk-slider-container">
                                <ul class="uk-slider-items uk-child-width-1-1 uk-grid" uk-grid>
                                    <?php for ($i=1;$i<=2;$i++): ?>
                                    <li>
                                        <?php if ($i==1): ?>
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand">
                                                    <h4 class="uk-h4 system__modal__intro__title">DID YOU KNOW?</h4>
                                                    <div class="system__modal__intro__desc">The Aedes mosquito which spreads the dengue virus lives both indoors and outdoors near people!</div>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <img class="system__modal__intro__img1" src="images/01-PC-System/Group90.png" alt="">
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand">
                                                    <h4 class="uk-h4 system__modal__intro__title">SOS!</h4>
                                                    <div class="system__modal__intro__desc">Justeen is being attacked by a swarm of Aedes mosquitoes at our office pantry.  Go there and save him NOW before he gets Dengue Fever and needs to be hospitalized.</div>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <img class="system__modal__intro__img2" src="images/01-PC-System/Group91.png" alt="">
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </li>
                                    <?php endfor; ?>
                                </ul>
                            </div>

                            <div class="uk-hidden@s uk-light">
                                <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                            </div>

                            <div class="uk-visible@s">
                                <a class="uk-position-center-left-out uk-position-small system__modal__slidenav system__modal__slidenav--prev" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right-out uk-position-small system__modal__slidenav system__modal__slidenav--next" href="#" uk-slidenav-next uk-slider-item="next"></a>
                            </div>

                        </div>

                        <ul class="system__modal__dotnav uk-slider-nav uk-dotnav uk-flex-center uk-margin-top uk-grid-10"></ul>

                    </div>
                </li>
                <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
                <li></li>
            </ul>
        </div>
    </div>
</div>
<script>
    UIkit.modal('#modal-system-outside').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>