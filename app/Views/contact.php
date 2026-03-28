<?= $this->include('layouts/header') ?>

<div class="row">
    <div class="col-md-8">
        <h1 class="mb-4">Contact Us</h1>
        <p class="mb-4">
            If you have any questions about workouts or fitness goals, send us a message below.
        </p>

        <form action="<?= base_url('contact/submit') ?>" method="post">
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea class="form-control" name="message" rows="5" placeholder="Write your message" required></textarea>
            </div>

            <button type="submit" class="btn btn-success">Send Message</button>
        </form>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4>Contact Information</h4>
                <p><strong>Email:</strong> G.boakye@wlv.ac.uk</p>
                <p><strong>Phone:</strong> 07424 128328</p>
                <p><strong>Location:</strong> Wolverhampton, UK</p>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer') ?>