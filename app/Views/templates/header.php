<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --primary-bg: #fafafa;
            --accent: #2563eb;
            --accent-hover: #1d4ed8;
            --text-main: #1f2937;
            --text-muted: #6b7280;
            --card-bg: #ffffff;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--primary-bg);
            color: var(--text-main);
            overflow-x: hidden;
        }
        h1, h2, h3, h4, h5, h6, .navbar-brand {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
        }
        /* Navbar */
        .navbar {
            background: #ffffff !important;
            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .nav-link {
            color: #4b5563 !important;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .nav-link:hover {
            color: var(--accent) !important;
        }
        /* Active Link Highlight */
        .nav-link.active {
            color: var(--accent) !important;
            font-weight: 700 !important;
            border-bottom: 2px solid var(--accent);
            padding-bottom: 6px;
        }
        /* Buttons */
        .btn-premium {
            background-color: var(--text-main);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 24px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-premium:hover {
            background-color: var(--accent);
            transform: translateY(-2px);
            color: white;
        }
        /* Cards */
        .premium-card {
            background: var(--card-bg);
            border: 1px solid #f3f4f6;
            border-radius: 12px;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
            overflow: hidden;
        }
        .premium-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1), 0 10px 10px -5px rgba(0,0,0,0.04);
        }
        .badge-premium {
            background-color: var(--accent);
            color: white;
            border-radius: 4px;
            font-weight: 600;
            padding: 5px 10px;
        }
        .form-control {
            background-color: #f9fafb;
            border: 1px solid #d1d5db;
            color: var(--text-main);
        }
        .form-control:focus {
            background-color: #ffffff;
            border-color: var(--accent);
            box-shadow: 0 0 0 0.25rem rgba(37, 99, 235, 0.25);
        }
        .text-accent {
            color: var(--accent);
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg sticky-top py-3">
  <div class="container">
    <a class="navbar-brand fs-3 text-dark" href="<?= base_url() ?>">

        <i class="bi bi-box-seam text-accent"></i> Ecart Application 2026<span class="text-accent">.</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item mx-2"><a class="nav-link <?= url_is('') || url_is('/') ? 'active' : '' ?>" href="<?= base_url() ?>">Home</a></li>
        <li class="nav-item mx-2"><a class="nav-link <?= url_is('home/shop') ? 'active' : '' ?>" href="<?= base_url('home/shop') ?>">Shop</a></li>
        <li class="nav-item mx-2"><a class="nav-link <?= url_is('home/categories') ? 'active' : '' ?>" href="<?= base_url('home/categories') ?>">Categories</a></li>
        <li class="nav-item mx-2"><a class="nav-link <?= url_is('home/about') ? 'active' : '' ?>" href="<?= base_url('home/about') ?>">About Us</a></li>
        <li class="nav-item mx-2"><a class="nav-link <?= url_is('home/aboutus') ? 'active' : '' ?>" href="<?= base_url('home/aboutus') ?>">Who We Are</a></li>
        <li class="nav-item mx-2"><a class="nav-link <?= url_is('home/contact') ? 'active' : '' ?>" href="<?= base_url('home/contact') ?>">Contact</a></li>
        <li class="nav-item ms-lg-4 mt-3 mt-lg-0">
            <a href="#" class="btn btn-premium"><i class="bi bi-cart3"></i> Cart (0)</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<main class="flex-grow-1">