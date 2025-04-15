<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Inventaris dan Peminjaman Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .jumbotron {
            background: linear-gradient(135deg, #3498db, #2c3e50);
            margin-top: 20px;
        }

        .card {
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo site_url(); ?>">
            <i class="fas fa-box-open mr-2"></i>Inventaris Barang
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('kategori'); ?>">
                        <!-- <i class="fas fa-tags mr-1"></i> -->
                        Kategori
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('barang'); ?>">
                        <!-- <i class="fas fa-boxes mr-1"></i> -->
                        Barang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('peminjaman'); ?>">
                        <!-- <i class="fas fa-hand-holding mr-1"></i> -->
                        Peminjaman
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('peminjaman/aktif'); ?>">
                        <!-- <i class="fas fa-clipboard-list mr-1"></i> -->
                        Barang Dipinjam
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('peminjaman/laporan'); ?>">
                        <!-- <i class="fas fa-chart-bar mr-1"></i> -->
                        Laporan
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">