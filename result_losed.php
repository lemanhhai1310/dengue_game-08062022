<?php $data["title"] = "05-PC-Result/2-Losed"; ?>
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
<div id="modal-result-losed" class="uk-flex-top result__victory__modal" uk-modal>
    <div class="uk-modal-dialog uk- uk-margin-auto-vertical uk-text-center uk-position-relative">
        <div class="uk-modal-body uk-margin-auto uk-position-relative uk-position-z-index">
            <div class="uk-position-top-center result__victory__modal__bgheader">
                <h2 class="uk-h2 result__victory__modal__bgheader__title">GAME OVER</h2>
            </div>
            <div class="uk-position-cover uk-card uk-card-body uk-flex-middle uk-flex">
                <div class="uk-width-1-1">
                    <div class="">
                        <div class="result__victory__modal__txt2">
                            You've failed to eliminate at least 50 mosquitoes within 1 minute.
                        </div>
                    </div>
                    <div class="">
                        <div class="result__victory__modal__boxcard">
                            <div class="uk-position-relative uk-flex uk-flex-left">
                                <div class="result__victory__modal__box__bg result__victory__modal__box__bg--losed uk-position-relative uk-position-z-index"></div>
                                <div class="result__victory__modal__box result__victory__modal__box--losed uk-border-pill uk-position-bottom-right uk-flex uk-flex-middle uk-flex-center">
                                    <div>
                                        <div class="result__victory__modal__box__txt3">Justeen is now affected by dengue virus and needs to be hospitalized!</div>
                                    </div>
                                </div>
                            </div>
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
<script>
    UIkit.modal('#modal-result-losed').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>