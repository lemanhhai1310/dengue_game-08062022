<?php $data["title"] = "04-PC-Gameplay/3-Item-detail_popup-1"; ?>
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
<div id="modal-gameplay-detail" class="uk-flex-top gameplay__detail__modal" uk-modal>
    <div class="uk-modal-dialog uk- uk-margin-auto-vertical uk-modal-body uk-text-center">
        <button class="uk-modal-close-default system__modal__close" type="button" uk-close></button>
        <div class="item__23">
            <div class="gameplay__detail__modal__box">
                <div class="item__39 gameplay__detail__modal__box2">
                    <div class="gameplay__detail__modal__box1">did you know?</div>
                </div>
                <div class="item__39">
                    <div class="gameplay__detail__modal__txt1">Dengue is caused by 4 distinct virus strains. We can get infected up to 4 times in our lifetime.1</div>
                </div>
            </div>
        </div>
        <div class="item__23">
            <div class="gameplay__detail__modal__txt2">1.  World Health Organization (WHO). Dengue and Severe Dengue.  Available at: https://www.who.int/news-room/fact-sheets/detail/dengue-and-severe-dengue</div>
        </div>
    </div>
</div>
<script>
    UIkit.modal('#modal-gameplay-detail').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>