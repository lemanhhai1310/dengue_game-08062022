<?php $data["title"] = "05-PC-Result/1-Victory"; ?>
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
<div id="modal-result-victory" class="uk-flex-top result__victory__modal" uk-modal>
    <div class="uk-modal-dialog uk-margin-auto-vertical uk-text-center uk-position-relative">
        <div class="result__victory__modal__bg uk-position-top-center"></div>
        <div class="uk-modal-body uk-margin-auto uk-position-relative uk-position-z-index">
            <div class="uk-position-top-center result__victory__modal__bgheader">
                <h2 class="uk-h2 result__victory__modal__bgheader__title">Victory</h2>
            </div>
            <div class="uk-position-cover uk-card uk-card-body uk-flex-middle uk-flex">
                <div class="uk-width-1-1">
                    <div class="item__16">
                        <div class="result__victory__modal__txt1">You have won the game!</div>
                    </div>
                    <div class="item__16">
                        <div class="result__victory__modal__boxcard">
                            <div class="uk-position-relative uk-flex uk-flex-left">
                                <div class="result__victory__modal__box__bg uk-position-relative uk-position-z-index"></div>
                                <div class="result__victory__modal__box uk-border-pill uk-position-bottom-right uk-flex uk-flex-middle uk-flex-center">
                                    <div>
                                        <div class="result__victory__modal__box__txt1">Mosquitoes killed</div>
                                        <div class="result__victory__modal__box__txt2">401</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item__16">
                        <div class="result__victory__modal__txt2">
                            Now Justeen has <span>BETTER PROTECTED</span> <br>
                            against dengue
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-position-bottom-center result__victory__modal__boxBottom">
                <a href="" class="result__victory__modal__btn result__victory__modal__btn--home"></a>
                <a href="" class="result__victory__modal__btn result__victory__modal__btn--cup"></a>
                <a href="" class="result__victory__modal__btn result__victory__modal__btn--reload"></a>
            </div>
        </div>
    </div>
</div>

<!-- modal result victory mobile -->
<div id="modal-result-victory-mb" class="uk-flex-top result_mb__modal uk-overflow-hidden" uk-modal>
    <div class="uk-modal-dialog uk-margin-auto-vertical result_mb__victory__dialog">
        <div class="uk-position-top-center result_mb__victory__header" data-src="images/result_mb_victory_header.png" uk-img>
            victory
        </div>
        <div class="uk-modal-body result_mb__victory__body uk-flex uk-flex-middle" data-src="images/result_mb_victory_body.png" uk-img>
            <div class="uk-width-1-1">
                <div class="uk-text-center result_mb__victory__title">You have won the game!</div>
                <div uk-grid>
                    <div class="uk-width-expand">

                    </div>
                    <div class="uk-width-auto">
                        <div>Now Justeen has</div>
                        <div>BETTER PROTECTION</div>
                        <div>again dengue</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-position-bottom-center" style="z-index: 4;bottom: -20px;">
            <a href="" class="result_mb__victory__icon result_mb__victory__icon--home" data-src="images/result_mb_Round_BTN-home.png" uk-img></a>
            <a href="" class="result_mb__victory__icon result_mb__victory__icon--rank" data-src="images/result_mb_Round_BTN-rank.png" uk-img></a>
            <a href="" class="result_mb__victory__icon result_mb__victory__icon--reload" data-src="images/result_mb_Round_BTN-reload.png" uk-img></a>
        </div>
    </div>
</div>
<script>
    UIkit.modal('#modal-result-victory-mb').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>