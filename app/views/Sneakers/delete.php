<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <h3><?= $data['title']; ?></h3>
    <p>Weet je zeker dat je de sneaker van <strong><?= htmlspecialchars($data['Sneakers']->Merk); ?> <?= htmlspecialchars($data['Sneakers']->Model); ?> <?= htmlspecialchars($data['Sneakers']->Type); ?> <?= htmlspecialchars($data['Sneakers']->Prijs); ?></strong> wilt verwijderen?</p>
    <form action="<?= URLROOT; ?>/Sneakers/delete/<?= $data['Sneakers']->Id; ?>" method="post">
        <button type="submit" class="btn btn-danger">Verwijderen</button>
        <a href="<?= URLROOT; ?>/Sneakers/index" class="btn btn-secondary">Annuleer
