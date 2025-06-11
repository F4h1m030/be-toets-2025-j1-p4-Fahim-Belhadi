<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <h1><?= $data['title']; ?></h1>

    <a href="<?= URLROOT; ?>/Sneakers/create" class="btn btn-primary mb-3">Toevoegen</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Merk</th>
                <th>Model</th>
                <th>Type</th>
                <th>Prijs</th>
                <th>Actie</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['Sneakers'] as $sneaker): ?>
                <tr>
                    <td><?= htmlspecialchars($sneaker->Merk) ?></td>
                    <td><?= htmlspecialchars($sneaker->Model) ?></td>
                    <td><?= htmlspecialchars($sneaker->Type) ?></td>
                    <td>€<?= number_format($sneaker->Prijs, 2, ',', '.') ?></td>
                    <td>
                        <a href="<?= URLROOT; ?>/Sneakers/delete/<?= $sneaker->Id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Weet je zeker dat je deze sneaker wilt verwijderen?');">Verwijderen</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
