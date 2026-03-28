<?= $this->include('layouts/header') ?>

<div class="hero-section">
    <h1>Train Better with FitTrack</h1>
    <p class="mt-3 mb-4">
        Discover simple workout ideas, build consistency, and stay motivated with a clean and easy gym workouts website.
    </p>
    <a href="<?= base_url('workouts') ?>" class="btn btn-success btn-lg">Explore Workouts</a>
</div>

<h2 class="section-title text-center">Why Use FitTrack?</h2>
<p class="section-subtitle text-center">Everything you need to keep your training simple and organised.</p>

<div class="row text-center">
    <div class="col-md-4 mb-4">
        <div class="card h-100 p-3">
            <div class="card-body">
                <div class="feature-icon">💪</div>
                <h3 class="card-title">Beginner Friendly</h3>
                <p class="card-text">
                    Simple workout ideas for people who want to start training with confidence.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card h-100 p-3">
            <div class="card-body">
                <div class="feature-icon">🏋️</div>
                <h3 class="card-title">Build Strength</h3>
                <p class="card-text">
                    Explore workouts designed to improve strength, fitness, and routine.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card h-100 p-3">
            <div class="card-body">
                <div class="feature-icon">🔥</div>
                <h3 class="card-title">Stay Consistent</h3>
                <p class="card-text">
                    Keep your goals in mind with workouts that are easy to browse and understand.
                </p>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer') ?>