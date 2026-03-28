<?= $this->include('layouts/header') ?>

<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">Welcome to FitTrack</h1>
        <p class="col-md-8 fs-5">
            FitTrack is a simple gym workouts website that helps users find workout ideas for different fitness goals.
        </p>
        <a href="<?= base_url('workouts') ?>" class="btn btn-success btn-lg">View Workouts</a>
    </div>
</div>

<div class="row text-center">
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h3 class="card-title">Beginner Friendly</h3>
                <p class="card-text">
                    Simple workouts for people who are new to the gym and want to build confidence.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h3 class="card-title">Build Strength</h3>
                <p class="card-text">
                    Explore workouts focused on improving strength and overall fitness.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h3 class="card-title">Stay Consistent</h3>
                <p class="card-text">
                    Keep your training simple and organised with clear workout ideas in one place.
                </p>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer') ?>