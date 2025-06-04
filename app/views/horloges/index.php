<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <h3><?= $data['title']; ?></h3>

<div class="row mb-3">
        <div class="col-md-4 text-left">
            <a href="<?= URLROOT; ?>/horloges/create" class="btn btn-primary">Nieuwe Horloges Toevoegen</a>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Merk</th>
                <th>Model</th>
                <th>Prijs</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['horloges'] as $horloge): ?>
                <tr>
                    <td><?= htmlspecialchars($horloge->Merk); ?></td>
                    <td><?= htmlspecialchars($horloge->Model); ?></td>
                    <td>€ <?= number_format($horloge->Prijs, 2, ',', '.'); ?></td>
                    <td>
                        <a href="<?= URLROOT; ?>/horloges/delete/<?= $horloge->Id; ?>" class="btn btn-danger btn-sm">Verwijderen</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="<?= URLROOT; ?>/homepages/index">Terug</a>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
