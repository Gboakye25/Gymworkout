<?= $this->include('layouts/header') ?>

<div class="page-box">
    <h1 class="section-title">Gym Workouts</h1>
    <p class="section-subtitle">Browse the workouts below.</p>

    <div class="row">
        <?php if (!empty($workouts)): ?>
            <?php foreach ($workouts as $workout): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 p-3">
                        <div class="card-body">
                            <span class="workout-badge">Workout</span>
                            <h3 class="card-title"><?= esc($workout['name']) ?></h3>
                            <p style="white-space: pre-line;">
                                 <?= esc($workout['description']) ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No workouts found.</p>
        <?php endif; ?>
    </div>
</div>

<?= $this->include('layouts/footer') ?>