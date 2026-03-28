<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitTrack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eef6fb;
            font-family: Arial, sans-serif;
            color: #1f2d3d;
        }

        .custom-navbar {
            background-color: #8ecae6;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .custom-navbar .navbar-brand,
        .custom-navbar a {
            color: #0b3c5d !important;
            font-weight: 600;
            text-decoration: none;
        }

        .custom-navbar a:hover {
            color: #ffffff !important;
        }

        .hero-section {
            background: linear-gradient(135deg, #d9f0ff, #bde0fe);
            border-radius: 20px;
            padding: 70px 40px;
            margin-bottom: 40px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        }

        .hero-section h1 {
            font-size: 2.8rem;
            font-weight: 700;
            color: #0b3c5d;
        }

        .hero-section p {
            font-size: 1.1rem;
            color: #355070;
            max-width: 700px;
            margin: 20px auto 0;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: #0b3c5d;
            margin-bottom: 10px;
        }

        .section-subtitle {
            color: #4f6d7a;
            margin-bottom: 30px;
        }

        .page-box {
            background: white;
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
        }

        .card {
            border: none;
            border-radius: 18px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
            background: #ffffff;
        }

        .card-title {
            color: #0b3c5d;
            font-weight: 700;
        }

        .btn-main {
            background-color: #5dade2;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 12px 24px;
            font-weight: 600;
        }

        .btn-main:hover {
            background-color: #3498db;
            color: white;
        }

        .workout-badge {
            display: inline-block;
            background-color: #d6eef9;
            color: #0b3c5d;
            padding: 6px 12px;
            border-radius: 999px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 12px;
        }

        footer {
            background-color: #8ecae6;
            color: #0b3c5d;
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 45px 25px;
            }

            .hero-section h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">FitTrack</a>

        <!-- Mobile toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('/') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('workouts') ?>">Workouts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('contact') ?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">