<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <h3><?= $data['title']; ?></h3>

    <form action="<?= URLROOT; ?>/Sneakers/store" method="post">
        <div class="form-group">
            <label for="Merk">Merk</label>
            <input type="text" name="Merk" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Model">Model</label>
            <input type="text" name="Model" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Type">Type</label>
            <input type="text" name="Type" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Prijs">Prijs</label>
            <input type="number" step="0.01" name="Prijs" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success w-100 mt-2">Verstuur</button>
    </form>

    <a href="<?= URLROOT; ?>/Sneakers" class="btn btn-secondary mt-3">Terug naar overzicht</a>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
