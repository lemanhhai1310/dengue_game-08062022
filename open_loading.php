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
    }];

    const options = {
        resources: imgData, //resources expected a JSON or Array
        onStart: function(total) {
            console.log('onStart:' + total);
            // document.querySelector(".status > span").innerHTML = 'onStart';
            // $("body").addClass("uk-overflow-hidden");
            $('.opening__logo').hide();
        },
        onProgress: function(currentIndex, total) {
            console.log('onProgress:' + currentIndex + '/' + total);
            // document.querySelector(".status > span").innerHTML = 'onProgress';
            // document.querySelector(".division > span").innerHTML = currentIndex + '/' + total;
            // document.querySelector(".percent > span").innerHTML = Math.floor((currentIndex / total) * 100) + '%';
            document.querySelector(".opening__progressbar__value").style.width = Math.floor((currentIndex / total) * 100) + '%';
            console.log(Math.floor((currentIndex / total) * 100));
        },
        onComplete: function(total,result) {
            console.log('onComplete:' + total);
            console.log(result);
            $('.opening__progressbar').hide();
            $('.opening__logo').show();
            // $("body").removeClass("uk-overflow-hidden");
            // setTimeout(function () {
            //     $(".loadpage").animate({ height: 0, opacity: 0.5 }, 'slow');
            // },400);
            // document.querySelector(".status > span").innerHTML = 'onComplete';
        }
    };

    resloader(options)
</script>
<?php require "template-parts/layouts/footer.php"; ?>