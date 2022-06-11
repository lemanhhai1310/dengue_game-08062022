<?php $data["title"] = "00-PC-Opening/4-Homepage"; ?>
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
<div class="uk-position-relative uk-height-viewport uk-flex uk-flex-column">
    <div class="uk-flex-auto uk-flex uk-flex-middle">
        <div class="uk-section-small opening__copyright__section uk-width-1-1">
            <div class="opening__copyright__item">
                <div class="uk-container uk-text-center">
                    <div class="uk-position-relative">
                        <img class="opening__copyright__img" src="images/logo31.png" alt="">
                        <div class="uk-position-bottom-center opening__logo__box uk-border-pill"><span>#jomhalaudenggi</span></div>
                    </div>
                </div>
            </div>
            <div class="opening__copyright__item uk-text-center uk-visible@m">
                <div class="uk-container">
                    <div class="item__8">
                        <div class="opening__copyright__txt1">WELCOME JUSTEEN</div>
                    </div>
                    <div class="item__8">
                        <a href="" class="uk-button uk-button-default opening__copyright__btn"><span>start</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section-small uk-text-center opening__copyright">
        <div class="uk-container">
            <div class="uk-child-width-expand uk-flex-middle" uk-grid>
                <div>
                    <div class="opening__copyright__txt uk-text-center@m uk-text-left">For Takeda employees internal use only.</div>
                </div>
                <div class="uk-hidden@m">
                    <div class="opening__copyright__txt1">WELCOME JUSTEEN</div>
                </div>
                <div class="uk-hidden@m uk-text-right">
                    <a href="" class="uk-button uk-button-default opening__copyright__btn"><span>start</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>