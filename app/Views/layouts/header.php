<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitTrack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f7f9;
            font-family: Arial, sans-serif;
            color: #222;
        }

        .custom-navbar {
            background: linear-gradient(90deg, #14532d, #16a34a);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.12);
        }

        .custom-navbar .navbar-brand,
        .custom-navbar a {
            color: white !important;
            font-weight: 600;
            text-decoration: none;
        }

        .custom-navbar a:hover {
            color: #d1fae5 !important;
        }

        .hero-section {
            background: linear-gradient(rgba(20, 83, 45, 0.85), rgba(22, 163, 74, 0.8)),
                        url('https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            border-radius: 20px;
            padding: 80px 40px;
            margin-bottom: 40px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .hero-section p {
            font-size: 1.1rem;
            max-width: 700px;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: #14532d;
            margin-bottom: 10px;
        }

        .section-subtitle {
            color: #555;
            margin-bottom: 30px;
        }

        .card {
            border: none;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            background-color: white;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
        }

        .card-title {
            color: #14532d;
            font-weight: 700;
        }

        .btn-success {
            background-color: #16a34a;
            border-color: #16a34a;
            border-radius: 10px;
            padding: 10px 20px;
            font-weight: 600;
        }

        .btn-success:hover {
            background-color: #15803d;
            border-color: #15803d;
        }

        .page-box {
            background: white;
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        }

        footer {
            background: #111827;
        }

        .feature-icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .workout-badge {
            display: inline-block;
            background-color: #dcfce7;
            color: #166534;
            padding: 6px 12px;
            border-radius: 999px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 12px;
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 50px 25px;
            }

            .hero-section h1 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">FitTrack</a>

        <div>
            <a class="text-white me-3" href="<?= site_url('/') ?>">Home</a>
            <a class="text-white me-3" href="<?= site_url('workouts') ?>">Workouts</a>
            <a class="text-white me-3" href="<?= site_url('about') ?>">About</a>
            <a class="text-white" href="<?= site_url('contact') ?>">Contact</a>
        </div>
    </div>
</nav>

<div class="container mt-4">