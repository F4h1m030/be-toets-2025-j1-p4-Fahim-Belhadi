<?php require_once APPROOT . '/views/includes/header.php'; ?>

<!-- Voor het centreren van de container gebruiken we het boorstrap grid -->
<div class="container">
    <div class="row mt-3">

        <div class="col-2"></div>

        <div class="col-8">

            <h3><?php echo $data['title']; ?></h3>

            <a href="<?= URLROOT; ?>/smartphones/index ">Toon smartphones</a>

            <a href="<?= URLROOT; ?>/sneakers/index">Toon sneakers</a>

            <a href="<?= URLROOT; ?>/zangeres/index">Toon zangers</a>

            <a href="<?= URLROOT; ?>/cyberaanval/index">Toon cyberaanval</a>

            <a href="<?= URLROOT; ?>/horloges/index">Toon horloges</a>

        </div>
        
        <div class="col-2"></div>
        
    </div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>