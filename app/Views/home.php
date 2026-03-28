<?= $this->include('layouts/header') ?>

<div class="hero-section">
    <h1>Welcome to FitTrack</h1>
    <p>
        A simple gym workouts website to help you discover useful workout ideas and keep your training organised.
    </p>
    <a href="<?= base_url('workouts') ?>" class="btn btn-main mt-4">View Workouts</a>
</div>

<div class="page-box mb-4 text-center">
    <h2 class="section-title">Need an Exercise Idea?</h2>
    <p class="section-subtitle">Click the button below to load a random exercise from an external fitness API.</p>

    <button id="exerciseBtn" class="btn btn-main">Show Exercise Idea</button>

    <div id="exerciseResult" class="mt-4" style="display:none;">
        <div class="card p-3">
            <div class="card-body">
                <h3 id="exerciseName" class="card-title"></h3>
                <p id="exerciseDescription" class="mb-0"></p>
            </div>
        </div>
    </div>
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

<script>
document.getElementById('exerciseBtn').addEventListener('click', function () {
    fetch('<?= base_url('api/exercise-idea') ?>')
        .then(response => response.json())
        .then(data => {
            const resultBox = document.getElementById('exerciseResult');
            const name = document.getElementById('exerciseName');
            const description = document.getElementById('exerciseDescription');

            resultBox.style.display = 'block';

            if (data.success) {
                name.textContent = data.name;
                description.textContent = data.description;
            } else {
                name.textContent = 'Unavailable';
                description.textContent = data.message;
            }
        })
        .catch(() => {
            const resultBox = document.getElementById('exerciseResult');
            document.getElementById('exerciseName').textContent = 'Unavailable';
            document.getElementById('exerciseDescription').textContent = 'Could not load exercise idea right now.';
            resultBox.style.display = 'block';
        });
});
</script>

<?= $this->include('layouts/footer') ?>