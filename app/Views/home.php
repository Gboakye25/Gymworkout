<?= $this->include('layouts/header') ?>

<div class="hero-section">
    <h1>Welcome to FitTrack</h1>
    <p>
        A simple gym workouts website to help you discover useful workout ideas and keep your training organised.
    </p>
    <a href="<?= base_url('workouts') ?>" class="btn btn-main mt-4">View Workouts</a>
</div>

<div class="row text-center">
    <div class="col-md-4 mb-4">
        <div class="card h-100 p-3">
            <div class="card-body">
                <h3 class="card-title">Simple to Use</h3>
                <p class="card-text">
                    Browse workouts easily with a clean and straightforward layout.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card h-100 p-3">
            <div class="card-body">
                <h3 class="card-title">Useful Workouts</h3>
                <p class="card-text">
                    Find workout ideas for different training goals and routines.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card h-100 p-3">
            <div class="card-body">
                <h3 class="card-title">Easy Navigation</h3>
                <p class="card-text">
                    Move around the website quickly and access important pages with ease.
                </p>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer') ?>