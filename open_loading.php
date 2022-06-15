<?php $data["title"] = "00-PC-Opening/1-Loading_page"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-height-viewport opening opening__loading uk-position-relative uk-flex uk-flex-middle">
    <div class="uk-position-bottom-center opening__progressbar uk-border-pill">
        <div class="opening__progressbar__value uk-position-cover uk-border-pill" style="width: 0 !important;">
            <div class="opening__progressbar__current uk-position-center-right-out uk-cover-container uk-border-circle uk-flex-inline">
                <canvas width="82" height="82"></canvas>
                <div class="uk-position-cover opening__progressbar__img"></div>
            </div>
        </div>
    </div>
</div>
<div class="opening__homepage" uk-scrollspy="cls: uk-animation-scale-down; repeat: true">
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
</div>
<!-- Enter_game_alias -->
<div id="modal-enter-game" class="uk-flex-top" uk-modal>
    <div class="opening__modal__body uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-flex uk-flex-bottom">
        <div class="uk-width-1-1">
            <div class="item__10">
                <h2 class="uk-modal-title opening__modal__title">ENTER YOUR NAME</h2>
            </div>
            <div class="item__10">
                <input class="uk-input opening__modal__input" type="text" placeholder="ENTER YOUR NAME">
            </div>
            <div class="item__10">
                <div class="uk-child-width-auto uk-flex-center uk-grid-small" uk-grid>
                    <div>
                        <a href="" class="opening__modal__btn opening__modal__btn--cancel uk-button uk-button-default uk-modal-close"><span>CANCEL</span></a>
                    </div>
                    <div>
                        <a href="" class="opening__modal__btn opening__modal__btn--submit uk-button uk-button-default"><span>SUBMIT</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    const imgData = [{
        name:'image1',
        url:'https://picsum.photos/200/300/?random'
    }, {
        name:'image2',
        url:'https://picsum.photos/1200/300/?random'
    }, {
        name:'image3',
        url:'https://picsum.photos/800/300/?random'
    }, {
        name:'image4',
        url:'https://picsum.photos/400/300/?random'
    }, {
        name:'image5',
        url:'https://picsum.photos/900/300/?random'
    }, {
        name:'image6',
        url:'https://picsum.photos/600/300/?random'
    }];

    const options = {
        resources: imgData, //resources expected a JSON or Array
        onStart: function(total) {
            console.log('onStart:' + total);
            $('.opening__homepage').hide();
        },
        onProgress: function(currentIndex, total) {
            console.log('onProgress:' + currentIndex + '/' + total);
            document.querySelector(".opening__progressbar__value").style.width = Math.floor((currentIndex / total) * 100) + '%';
            console.log(Math.floor((currentIndex / total) * 100));
        },
        onComplete: function(total,result) {
            console.log('onComplete:' + total);
            console.log(result);
            $('.opening__loading').hide();
            $('.opening__homepage').show();
            setTimeout(function () {
                // code here
                UIkit.modal('#modal-enter-game').show();
                // console.log(1);
            },6000);
        }
    };

    resloader(options)
</script>
<?php require "template-parts/layouts/footer.php"; ?>