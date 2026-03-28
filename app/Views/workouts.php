<?= $this->include('layouts/header') ?>

<div class="page-box">
    <h1 class="section-title">Gym Workouts</h1>
    <p class="section-subtitle">Choose a workout below and find a routine that matches your goal.</p>

    <div class="row">
        <?php if (!empty($workouts)): ?>
            <?php foreach ($workouts as $workout): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 p-2">
                        <div class="card-body">
                            <span class="workout-badge">Workout Plan</span>
                            <h3 class="card-title"><?= esc($workout['name']) ?></h3>
                            <p><?= esc($workout['description']) ?></p>
                            <p><strong>Slug:</strong> <?= esc($workout['slug']) ?></p>
                            <a href="#" class="btn btn-success mt-2">View More</a>
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