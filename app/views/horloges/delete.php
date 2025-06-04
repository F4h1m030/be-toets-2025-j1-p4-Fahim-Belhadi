<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <h3><?= $data['title']; ?></h3>
    <p>Weet je zeker dat je het horloge van <strong><?= htmlspecialchars($data['horloge']->Merk); ?> <?= htmlspecialchars($data['horloge']->Model); ?></strong> wilt verwijderen?</p>
    <form action="<?= URLROOT; ?>/horloges/delete/<?= $data['horloge']->Id; ?>" method="post">
        <button type="submit" class="btn btn-danger">Verwijderen</button>
        <a href="<?= URLROOT; ?>/horloges/index" class="btn btn-secondary">Annuleer

