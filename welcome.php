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
            <div uk-slider>

                <div class="uk-position-relative">

                    <div class="uk-slider-container uk-light">
                        <ul class="uk-slider-items uk-child-width-1-1 uk-grid-match" uk-height-viewport="min-height: 300">
                            <?php for ($i=1;$i<=5;$i++): ?>
                            <li>
                                <div class="uk-flex uk-flex-column uk-section-xsmall">
                                    <div class="uk-flex-auto">
                                        <?php if ($i<=3): ?>
                                        <div class="uk-position-relative uk-text-center uk-margin-medium-top">
                                            <span class="uk-position-top-center welcome__modal__box2 uk-border-pill">About</span>
                                            <div class="welcome__modal__box1">
                                                <h2 class="welcome__modal__box1__title uk-h2 uk-position-center">Dengue Fever</h2>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <div class="uk-text-center welcome__modal__txt1">
                                            <?php if ($i==1): ?>
                                                World Health Organization. Dengue: Guidelines for Diagnosis, Treatment, Prevention and Control. New Edition 2009. Chapter 1: Epidemiology, Burden of Disease and Transmission. Available from: https://www.ncbi.nlm.nih.gov/books/NBK143157/pdf/Bookshelf_NBK143157.pdf. Accessed on 7th June 2022.  2. World Health Organization (WHO). Dengue and Severe Dengue. Available at: https://www.who.int/news-room/fact-sheets/detail/dengue-and-severe-dengue
                                            <?php endif; ?>

                                            <?php if ($i==2): ?>
                                                1. World Health Organization (WHO). Dengue and Severe Dengue. Available at: https://www.who.int/news-room/fact-sheets/detail/dengue-and-severe-dengue 2.Guzman MG, et al. Dengue” a continuing global threat. Nat Rev Microbiol. 2010;8(12 Suppl):S7-S16. 3. Rathakrishnan A, et al. Clinical and immunological carriers of dengue progression in a study cohort from a hyperendemic area in Malaysia. PLoS One.2014;9(3):e92021. 4. Idengue, Statistik Denggi, Bilangan kes dan kadar insiden Demam Denggi 2000-2019.
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
<script>
    UIkit.modal('#modal-welcome-full').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>