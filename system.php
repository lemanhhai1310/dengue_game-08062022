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
                <button class="system__modal__tabBtn uk-button uk-button-default uk-active" type="button">Weapons</button>
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
                                                    <img class="system__modal__intro__img1" src="images/name-dengue-red.png" alt="">
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand">
                                                    <h4 class="uk-h4 system__modal__intro__title">SOS!</h4>
                                                    <div class="system__modal__intro__desc">Justeen is being attacked by a swarm of Aedes mosquitoes at our office pantry.  Go there and save him NOW before he gets Dengue Fever and needs to be hospitalized.</div>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <img class="system__modal__intro__img2" src="images/name-dengue-man.png" alt="">
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
                <li>
                    <div uk-slider="finite: true;sets: true">

                        <div class="uk-position-relative">

                            <div class="uk-slider-container">
                                <ul class="uk-slider-items uk-child-width-1-1 uk-grid" uk-grid>
                                    <?php
                                    $data = array(
                                        array(
                                            'src' => 'images/tab=Weapons,name=hand.png',
                                            'title' => 'A giant pair of hands',
                                            'desc' => 'Use the hands to smack and kill all mosquitoes within X radius.',
                                        ),
                                        array(
                                            'src' => 'images/tab=Weapons,name=spray.png',
                                            'title' => 'A can of Insect Spray',
                                            'desc' => 'Slow the mosquitoes in their tracks and get rid of the pesky little ones',
                                        ),
                                        array(
                                            'src' => 'images/tab=Weapons,name=incense.png',
                                            'title' => 'Insect Repellent Incense',
                                            'desc' => 'Smoke and confuse the mosquitoes and get rid of the pesky little ones',
                                        ),
                                        array(
                                            'src' => 'images/tab=Weapons,name=racket.png',
                                            'title' => 'Insect Racket',
                                            'desc' => 'Swipe to kill all the mosquitoes in the area. Bonus: You can do this 3 times.',
                                        ),
                                        array(
                                            'src' => 'images/tab=Weapons,name=potion.png',
                                            'title' => 'Invincible Potion',
                                            'desc' => 'One shot protects you from the mosquitoes for 10 sec while you wreak havoc on them.
Look out for the 2nd shot. You need to take the 2nd shot within 3 months for FULL PROTECTION.',
                                        ),
                                    );
                                    foreach ($data as $k=>$v): ?>
                                        <li class="<?= ($k<=3)?'uk-width-1-3':'uk-width-2-3' ?>">
                                            <div class="system__modal__weapons__item">
                                                <div class="system__modal__weapons__boximg">
                                                    <img class="uk-responsive-height" src="<?= $v['src'] ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="system__modal__weapons__item">
                                                <h4 class="system__modal__weapons__title uk-h4 uk-margin-remove"><?= $v['title'] ?></h4>
                                            </div>
                                            <div class="system__modal__weapons__item">
                                                <div class="system__modal__weapons__desc"><?= $v['desc'] ?></div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
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