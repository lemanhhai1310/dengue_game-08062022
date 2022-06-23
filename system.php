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
                <button class="system__modal__tabBtn uk-button uk-button-default uk-active" type="button">Settings</button>
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
                <li>
                    <div uk-slider="finite: true;sets: true">

                        <div class="uk-position-relative">

                            <div class="uk-slider-container">
                                <ul class="uk-slider-items uk-child-width-1-1 uk-grid" uk-grid>
                                    <?php for ($i=1;$i<=4;$i++): ?>
                                        <?php if ($i==1):?>
                                            <?php $src1 = 'images/tab11_muoingao11.png';$src2 = 'images/tab12_muoiquay_011.png'; ?>
                                        <?php endif; ?>
                                        <?php if ($i==2):?>
                                            <?php $src1 = 'images/tab21_muoi_xitrum_001.png';$src2 = 'images/tab22_muoitaysai_live_001.png'; ?>
                                        <?php endif; ?>
                                        <?php if ($i==3):?>
                                            <?php $src1 = 'images/tab31_muoiphilu_live_001.png';$src2 = 'images/tab32_muoixike_live_011.png'; ?>
                                        <?php endif; ?>
                                        <?php if ($i==4):?>
                                            <?php $src1 = 'images/tab41_boss-idle_live_001.png';$src2 = 'images/tab41_boss-idle_live_001.png'; ?>
                                        <?php endif; ?>
                                    <li class="uk-width-1-1">
                                        <div class="system__modal__mozzies__item">
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="uk-position-relative">
                                                        <div class="uk-cover-container uk-border-circle system__modal__mozzies__boximg">
                                                            <canvas width="136" height="136"></canvas>
                                                        </div>
                                                        <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                                            <img class="system__modal__mozzies__img" src="<?= $src1 ?>" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="item__12">
                                                        <h4 class="system__modal__weapons__title uk-h4 uk-margin-remove">
                                                            <?php if ($i==1): ?>
                                                                The Normie Mozzie
                                                            <?php endif; ?>
                                                            <?php if ($i==2): ?>
                                                                The Petite Mozzie
                                                            <?php endif; ?>
                                                            <?php if ($i==3): ?>
                                                                The Chubby Mozzie
                                                            <?php endif; ?>
                                                            <?php if ($i==4): ?>
                                                                The Boss
                                                            <?php endif; ?>
                                                        </h4>
                                                    </div>
                                                    <div class="item__12">
                                                        <div class="system__modal__weapons__desc">
                                                            <?php if ($i==1): ?>
                                                                Your normal neighborhood dengue carrier. He might look harmless, even cute, but don't be fooled. The virus can be deadly.
                                                            <?php endif; ?>
                                                            <?php if ($i==2): ?>
                                                                This one is indeed cute. Not so long ago he was still a larvae, swimming around in a puddle in your backyard. But give him some time… he will be a dangerous one and ready to make you severely sick.
                                                            <?php endif; ?>
                                                            <?php if ($i==3): ?>
                                                                This one has a big appetite. He drank so much that he could barely fly. Worst of all, he left no tips, just viruses. Talk about an ungrateful guest!
                                                            <?php endif; ?>
                                                            <?php if ($i==4): ?>
                                                                The ultimate virus-spreading mozzie. He's been around since forever and has caused so much damage to human kind.
                                                                He's super fast, super strong, and carries a few serotypes of the dengue virus.1
                                                                Take him down before he gets Justeen hospitalized.
                                                            <?php endif; ?>
                                                        </div>
                                                        <?php if ($i==4): ?>
                                                            <p class="system__modal__mozzies__txt">1.  Biswal A, et al. Efficacy of a tetravalent dengue vaccine in healthy children aged 4-16 years: a randomised, placebo-controlled, phase 3 trial. Lancet. 2020;395:1423-1433.</p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if ($i<4): ?>
                                        <div class="system__modal__mozzies__item">
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="uk-position-relative">
                                                        <div class="uk-cover-container uk-border-circle system__modal__mozzies__boximg">
                                                            <canvas width="136" height="136"></canvas>
                                                        </div>
                                                        <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                                            <img class="system__modal__mozzies__img" src="<?= $src2 ?>" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="item__12">
                                                        <h4 class="system__modal__weapons__title uk-h4 uk-margin-remove">
                                                            <?php if ($i==1): ?>
                                                                The Naughty Mozzie
                                                            <?php endif; ?>
                                                            <?php if ($i==2): ?>
                                                                The Bodyguard
                                                            <?php endif; ?>
                                                            <?php if ($i==3): ?>
                                                                The Bored Mozzie
                                                            <?php endif; ?>
                                                        </h4>
                                                    </div>
                                                    <div class="item__12">
                                                        <div class="system__modal__weapons__desc">
                                                            <?php if ($i==1): ?>
                                                                Ahh… The naughty mozzie. Ever tried to smash one down but can't seem to get him no matter how hard you tried? He is fast, relentless and annoying!
                                                            <?php endif; ?>
                                                            <?php if ($i==2): ?>
                                                                These are some big, strong and fast mozzies… Their task is to protect the Big Boss, and spread some deadly virus while they're at it. Take them down to get to the Boss, before it's too late.
                                                            <?php endif; ?>
                                                            <?php if ($i==3): ?>
                                                                This is a spoiled brat. He got it so easy as people just don't excite him anymore. But he still carries with him dengue viruses, just like his kind.
                                                                So don't let your guard down and get rid of him on sight!
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
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
                    <div>
                        <div class="system__modal__setting__item1">
                            <div class="system__modal__setting__item2">
                                <div class="uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <a href="" class="system__modal__setting__icon system__modal__setting__icon--sound"></a>
                                    </div>
                                    <div class="uk-width-expand">
                                        <input class="uk-range system__modal__setting__range" type="range" value="2" min="0" max="10" step="0.1">
                                    </div>
                                </div>
                            </div>
                            <div class="system__modal__setting__item2">
                                <div class="uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <a href="" class="system__modal__setting__icon system__modal__setting__icon--music"></a>
                                    </div>
                                    <div class="uk-width-expand">
                                        <input class="uk-range system__modal__setting__range" type="range" value="2" min="0" max="10" step="0.1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="system__modal__setting__item1">
                            <div class="uk-child-width-auto uk-flex-center" uk-grid>
                                <div>
                                    <a href="" class="system__modal__setting__btn uk-button uk-button-default">Change name</a>
                                </div>
                                <div>
                                    <a href="" class="system__modal__setting__btn uk-button uk-button-default">Credit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    UIkit.modal('#modal-system-outside').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>