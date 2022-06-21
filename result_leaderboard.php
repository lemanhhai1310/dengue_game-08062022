<?php $data["title"] = "05-PC-Result/3-Leaderboard"; ?>
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
<div id="modal-result-leaderboard" class="uk-flex-top result__leaderboard__modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-position-relative">
        <button class="uk-modal-close-default system__modal__close" type="button" uk-close></button>
        <div class="uk-position-top-center result__victory__modal__bgheader">
            <h2 class="uk-h2 result__victory__modal__bgheader__title">LEADERBOARD</h2>
        </div>
        <div class="result__leaderboard__modal__box">
            <?php for ($i=1;$i<=3;$i++): ?>
            <div class="result__leaderboard__modal__item result__leaderboard__modal__item--top<?= $i ?> uk-border-pill uk-flex uk-flex-middle">
                <div class="uk-width-1-1">
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="result__leaderboard__modal__item__txt1">uncanny</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="result__leaderboard__modal__item__txt2">555</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
        <div class="result__leaderboard__modal__divider">

        </div>
        <div class="result__leaderboard__modal__box">
            <div class="result__leaderboard__modal__item result__leaderboard__modal__item--rank uk-border-pill uk-flex uk-flex-middle" data-rank="21">
                <div class="uk-width-1-1">
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="result__leaderboard__modal__item__txt1">uncanny</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="result__leaderboard__modal__item__txt2">555</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    UIkit.modal('#modal-result-leaderboard').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>