<?php $data["title"] = "02-Welcome"; ?>
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
                            <?php for ($i=1;$i<=5;$i++): ?>
                            <li>
                                <div class="uk-flex uk-flex-column uk-section-xsmall">
                                    <div class="uk-flex-auto">
                                        <?php if ($i<=3): ?>
                                        <div class="uk-position-relative uk-text-center uk-margin-medium-top <?= ($i==3)?'item__44':'' ?> <?= ($i<2)?'item__57':'' ?>">
                                            <span class="uk-position-top-center welcome__modal__box2 uk-border-pill">About</span>
                                            <div class="welcome__modal__box1">
                                                <h2 class="welcome__modal__box1__title uk-h2 uk-position-center">Dengue Fever</h2>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                        <?php if ($i>3): ?>
                                            <h2 class="welcome__modal__box1__title uk-h2 uk-text-center <?= ($i==4)?'item__61':'' ?>">why this game?</h2>
                                        <?php endif; ?>

                                        <?php if ($i==3): ?>
                                        <div class="uk-text-center item__44">
                                            <div class="welcome__modal__box3">

                                            </div>
                                            <div class="welcome__modal__box4 <?= ($i==3)?'uk-text-uppercase':'' ?>">CURRENTLY, THERE IS <span>NO SPECIFIC TREATMENT</span>
                                                <br> FOR DENGUE FEVER.1</div>
                                        </div>
                                        <?php endif; ?>

                                        <?php if ($i==1): ?>
                                            <div class="uk-text-center uk-position-relative item__57">
                                                <div class="welcome__modal__box5__txt uk-position-top-center">Dengue is the most rapidly spreading mosquito-borne viral disease in the world.1</div>
                                                <div class="welcome__modal__box5">

                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($i==2): ?>
                                            <div class="uk-text-center item__57">
                                                <div class="item__52">
                                                    <div class="item__11">
                                                        <div class="welcome__modal__box6__txt">Every year dengue causes</div>
                                                    </div>
                                                    <div class="item__11">
                                                        <div class="welcome__modal__box6"></div>
                                                    </div>
                                                </div>
                                                <div class="item__52">
                                                    <div class="welcome__modal__box4">
                                                        In Malaysia, dengue is endemic,3 <br>
                                                        with the <span>highest ever incidence of 131,101 cases</span> <br> reported in 2019.4
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($i==4): ?>
                                            <div class="uk-text-center item__61">
                                                <div class="item__49">
                                                    <div class="welcome__modal__box6__txt">
                                                        To heighten our awareness of dengue especially to recognize <br> our personal risk of getting dengue
                                                    </div>
                                                </div>
                                                <div class="item__49">
                                                    <div class="welcome__modal__box7">

                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($i==5): ?>
                                            <div class="item__30">
                                                <div uk-grid>
                                                    <div class="uk-width-auto">
                                                        <div class="welcome__modal__box8 welcome__modal__box8--bg">

                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <p class="welcome__modal__box8__txt"><span>TAKEDA is developing our very own dengue vaccine candidate, TAK-003</span>, with the potential to change dengue prevention globally and locally in Malaysia.</p>
                                                        <p class="welcome__modal__box8__txt">TAK-003 has demonstrated <span>overall efficacy against dengue, including against hospitalization</span> both in people, who have or have not previously been exposed to the disease.2</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item__30">
                                                <div class="welcome__modal__box8__divider"></div>
                                            </div>
                                            <div class="item__30">
                                                <div uk-grid>
                                                    <div class="uk-width-auto">
                                                        <div class="welcome__modal__box8">

                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <p class="welcome__modal__txt1">Disclaimer: TAK-003 is currently not approved for any indication in Malaysia.</p>
                                                        <p class="welcome__modal__txt1">This information is available to Takeda staff for information purposes only; it should not be used for diagnosing or treating a health problem or disease. It is not intended to substitute for consultation with a healthcare provider. ???Please consult your healthcare provider for further advice.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="uk-visible@m">
                                        <div class="uk-text-center welcome__modal__txt1">
                                            <?php if ($i==1): ?>
                                                World Health Organization. Dengue: Guidelines for Diagnosis, Treatment, Prevention and Control. New Edition 2009. Chapter 1: Epidemiology, Burden of Disease and Transmission. Available from: https://www.ncbi.nlm.nih.gov/books/NBK143157/pdf/Bookshelf_NBK143157.pdf. Accessed on 7th June 2022. ???2. World Health Organization (WHO). Dengue and Severe Dengue. Available at: https://www.who.int/news-room/fact-sheets/detail/dengue-and-severe-dengue
                                            <?php endif; ?>

                                            <?php if ($i==2): ?>
                                                1. World Health Organization (WHO). Dengue and Severe Dengue. Available at: https://www.who.int/news-room/fact-sheets/detail/dengue-and-severe-dengue 2.Guzman MG, et al. Dengue??? a continuing global threat. Nat Rev Microbiol. 2010;8(12 Suppl):S7-S16. 3. Rathakrishnan A, et al. Clinical and immunological carriers of dengue progression in a study cohort from a hyperendemic area in Malaysia. PLoS One.2014;9(3):e92021. 4. Idengue, Statistik Denggi, Bilangan kes dan kadar insiden Demam Denggi 2000-2019.
                                                Available at: https://idengue.mysa.gov.my/pdf/statistik.pdf#page=3. Accessed on 17th May 2022.
                                            <?php endif; ?>

                                            <?php if ($i==3): ?>
                                                1. World Health Organization (WHO). Dengue and Severe Dengue.
                                                Available at: https://www.who.int/news-room/fact-sheets/detail/dengue-and-severe-dengue
                                            <?php endif; ?>

                                            <?php if ($i==4): ?>
                                                1. Thisyakorn, U, Terapong T. Dengue vaccine: a key for prevention. Expert Rev Vaccines.2020;19(6): 499-506.
                                            <?php endif; ?>

                                            <?php if ($i==5): ?>
                                                2. Biswal A, et al. Efficacy of a tetravalent dengue vaccine in healthy children aged 4-16 years: a randomised, placebo-controlled, phase 3 trial. Lancet. 2020;395:1423-1433.
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

<div id="modal-welcome-full-mb" class="welcome__modal uk-modal-full uk-padding-remove" uk-modal>
    <div class="uk-modal-dialog welcome__modal__dialog">
        <div class="uk-container uk-container-large">
            <div uk-slider="finite: true;">

                <div class="uk-position-relative">

                    <div class="uk-slider-container uk-light">
                        <ul class="uk-slider-items uk-child-width-1-1 uk-grid-match" uk-height-viewport="min-height: 300">
                            <?php for ($i=1;$i<=5;$i++): ?>
                                <li>
                                    <div class="uk-section-xsmall uk-position-relative">
                                        <a href="" class="welcome_mb__btnInfo" data-src="images/welcome_mb_btninfo_Round_BTN.png" uk-img></a>
                                        <?php if ($i<4): ?>
                                            <div class="welcome_mb__box1 uk-text-center item__10">
                                                <div class="uk-position-relative uk-position-z-index"><span class="welcome_mb__box1__txt1 uk-border-pill">about</span></div>
                                                <div class="welcome_mb__box1__txt2 uk-margin-auto" data-src="images/welcome_mb_pink-ribbons.png" uk-img>dengue fever</div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($i>3): ?>
                                            <div class="uk-text-center welcome_mb__title">Why this game?</div>
                                        <?php endif; ?>

                                        <?php if ($i==1): ?>
                                            <div class="uk-text-center welcome_mb__desc1 item__10">Dengue is the most rapidly spreading mosquito-borne viral disease in the world.1</div>
                                        <?php endif; ?>
                                        <?php if ($i==2): ?>
                                            <div class="uk-text-center welcome_mb__desc1 item__10">Every year dengue causes</div>
                                        <?php endif; ?>
                                        <?php if ($i==1): ?>
                                            <div class="uk-text-center item__12">
                                                <div class="welcome_mb__slide1" data-src="images/welcome_mb_Frame64.png" uk-img>

                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($i==2): ?>
                                            <div class="uk-text-center item__9">
                                                <div class="welcome_mb__slide2" data-src="images/welcome_mb_Vector.png" uk-img>

                                                </div>
                                            </div>
                                            <div class="uk-text-center welcome_mb__desc2 item__15">
                                                In Malaysia, dengue is endemic,3 <br>
                                                with the <span>highest ever incidence of 131,101 cases</span> reported in 2019.4
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($i==3): ?>
                                            <div class="uk-text-center item__6">
                                                <div class="welcome_mb__slide3" data-src="images/welcome_mb_Frame-65.png" uk-img>

                                                </div>
                                            </div>
                                            <div class="uk-text-center item__19 welcome_mb__desc3">
                                                CURRENTLY, THERE IS <span>NO SPECIFIC TREATMENT</span> FOR DENGUE FEVER.1
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($i==4): ?>
                                            <div class="uk-text-center item__61">
                                                <div class="welcome_mb__slide4" data-src="images/welcome_mb_Untitled-1.png" uk-img>

                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($i==5): ?>
                                            <div class="item__17">
                                                <div class="uk-grid-small" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <div class="welcome_mb__slide5" data-src="images/welcome_mb_blueCircle.png" uk-img>

                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <p class="welcome_mb__desc2 uk-text-left"><span>TAKEDA is developing our very own dengue vaccine candidate, TAK-003</span>, with the potential to change dengue prevention globally and locally in Malaysia.</p>
                                                        <p class="welcome_mb__desc2 uk-text-left">TAK-003 has demonstrated <span>overall efficacy against dengue, including against hospitalization</span> both in people, who have or have not previously been exposed to the disease.2</p>
                                                        <hr>
                                                        <p class="welcome_mb__descsmall">Disclaimer: TAK-003 is currently not approved for any indication in Malaysia.</p>
                                                        <p class="welcome_mb__descsmall">This information is available to Takeda staff for information purposes only; it should not be used for diagnosing or treating a health problem or disease. It is not intended to substitute for consultation with a healthcare provider. ???Please consult your healthcare provider for further advice.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>

                    <div class="uk-position-bottom welcome_mb__boxNav">
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
    UIkit.modal('#modal-welcome-full-mb').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>