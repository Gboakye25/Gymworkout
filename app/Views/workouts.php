<?= $this->include('layouts/header') ?>

<h1 class="mb-4">Gym Workouts</h1>
<p class="mb-4">Choose a workout below.</p>

<div class="row">
    <?php if (!empty($workouts)): ?>
        <?php foreach ($workouts as $workout): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title"><?= esc($workout['name']) ?></h3>
                        <p><?= esc($workout['description']) ?></p>
                        <p><strong>Slug:</strong> <?= esc($workout['slug']) ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No workouts found.</p>
    <?php endif; ?>
</div>

<?= $this->include('layouts/footer') ?>