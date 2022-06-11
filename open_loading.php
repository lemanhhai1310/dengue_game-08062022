<?php $data["title"] = "00-PC-Opening/1-Loading_page"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-height-viewport opening uk-position-relative uk-flex uk-flex-middle">
    <div class="uk-width-1-1 uk-section-small opening__logo">
        <div class="uk-container uk-text-center">
            <div class="uk-position-relative">
                <img class="opening__logo__img" src="images/logo31.png" alt="">
                <div class="uk-position-bottom-center opening__logo__box uk-border-pill"><span>#jomhalaudenggi</span></div>
            </div>
        </div>
    </div>
    <div class="uk-position-bottom-center opening__progressbar uk-border-pill">
        <div class="opening__progressbar__value uk-position-cover uk-border-pill" style="width: 0 !important;">
            <div class="opening__progressbar__current uk-position-center-right-out uk-cover-container uk-border-circle uk-flex-inline">
                <canvas width="82" height="82"></canvas>
                <div class="uk-position-cover opening__progressbar__img"></div>
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
            $('.opening__logo').hide();
        },
        onProgress: function(currentIndex, total) {
            console.log('onProgress:' + currentIndex + '/' + total);
            document.querySelector(".opening__progressbar__value").style.width = Math.floor((currentIndex / total) * 100) + '%';
            console.log(Math.floor((currentIndex / total) * 100));
        },
        onComplete: function(total,result) {
            console.log('onComplete:' + total);
            console.log(result);
            $('.opening__progressbar').hide();
            $('.opening__logo').show();
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