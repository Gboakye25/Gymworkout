<?= $this->include('layouts/header') ?>

<div class="page-box">
    <h1 class="section-title"><?= esc($workout['name']) ?></h1>
    <p class="section-subtitle">Workout Details</p>

    <div class="card p-3">
        <div class="card-body">
            <p><strong>Name:</strong> <?= esc($workout['name']) ?></p>
            <p><strong>Slug:</strong> <?= esc($workout['slug']) ?></p>
            <p><strong>Description:</strong> <?= esc($workout['description']) ?></p>

            <a href="<?= site_url('workouts') ?>" class="btn btn-success mt-3">Back to Workouts</a>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer') ?>