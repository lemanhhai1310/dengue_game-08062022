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
    <div class="uk-modal-dialog uk-margin-auto-vertical">
        <div class="uk-modal-body uk-background-default item__34">

        </div>
        <div class="uk-text-center item__34">
            <a href="" class="uk-button uk-button-default">GOTCHA!</a>
        </div>
    </div>
</div>
<script>
    UIkit.modal('#modal-gameplay-congratulation').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>