<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitTrack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-navbar {
            background-color: #16a085;
        }

        .custom-navbar a {
            color: white !important;
            font-weight: 500;
            text-decoration: none;
        }

        .custom-navbar a:hover {
            color: #d1f2eb !important;
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