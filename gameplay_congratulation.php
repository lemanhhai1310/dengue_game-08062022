<?php $data["title"] = "04-PC-Gameplay/2-Congratulation-1"; ?>
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
<div id="modal-gameplay-congratulation" class="uk-flex-top gameplay__congratulation__modal" uk-modal>
    <div class="uk-modal-dialog uk-margin-auto-vertical uk-position-relative">
        <div class="gameplay__congratulation__modal__bg uk-position-top-center"></div>
        <div class="uk-position-relative uk-position-z-index">
            <div class="uk-text-center item__19">
                <div class="gameplay__congratulation__modal__bgheader"><h2 class="uk-h2 gameplay__congratulation__modal__bgheader__title">Congratulations!</h2></div>
            </div>
            <div class="item__19">
                <div class="item__34">
                    <div style="width: 663px;" class="uk-margin-auto uk-position-relative">
                        <div class="uk-modal-body gameplay__congratulation__modal__body uk-position-bottom">

                        </div>
                        <div style="min-height: 492px" class="uk-card gameplay__congratulation__modal__body1 uk-card-body uk-position-relative uk-position-z-index">
                            <div class="item__29 uk-text-center">
                                <div class="uk-position-relative uk-display-inline-block">
                                    <div class="uk-cover-container uk-flex-inline uk-margin-auto gameplay__congratulation__modal__boxImg uk-border-circle">
                                        <canvas width="308" height="308"></canvas>
                                        <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                            <img src="images/hands2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="gameplay__congratulation__modal__boxImg__icon uk-position-bottom-right"></div>
                                </div>
                            </div>
                            <div class="item__29 uk-text-center">
                                <div class="item__15">
                                    <div class="gameplay__congratulation__modal__txt1">You have bagged your 1ST weapon</div>
                                </div>
                                <div class="item__15">
                                    <div class="item__10">
                                        <input class="uk-input gameplay__congratulation__modal__input" type="text" placeholder="" value="A giant pair of hands" disabled>
                                    </div>
                                    <div class="item__10">
                                        <div class="gameplay__congratulation__modal__txt2">Smack to kill all mosquitoes
                                            <br>
                                            within (X) radius</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-text-center item__34">
                    <a href="" class="uk-button uk-button-default gameplay__congratulation__modal__btn">GOTCHA!</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    UIkit.modal('#modal-gameplay-congratulation').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>