<?php $data["title"] = "02-PC-Welcome/2-Why-This-Game-3"; ?>
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
<div id="modal-welcome-thisgame" class="welcome__modal uk-modal-full uk-padding-remove" uk-modal>
    <div class="uk-modal-dialog welcome__modal__dialog">
        <div class="uk-container uk-container-large uk-height-viewport uk-flex uk-flex-middle">
            <div class="uk-width-1-1 uk-text-center">
                <div class="uk-position-relative">
                    <div class="uk-position-top-center uk-text-center welcome1__title">
                        <span>Come and dive</span> <br>
                        into the Dengue world!
                    </div>
                    <div class="welcome__modal__box9__bg uk-margin-auto uk-display-inline-block">

                    </div>
                    <div class="uk-position-bottom-center uk-text-center" style="bottom: -50px">
                        <div class="item__24">
                            <a href="" class="uk-button uk-button-default opening__copyright__btn"><span>play now!</span></a>
                        </div>
                        <div class="item__24">
                            <a href="" class="welcome1__link">tutorial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    UIkit.modal('#modal-welcome-thisgame').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>