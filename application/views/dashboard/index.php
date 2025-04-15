<div class="container">
    <div class="jumbotron text-center bg-primary text-white rounded-lg shadow">
        <h1 class="display-4">Selamat Datang!</h1>
        <p class="lead">Sistem Inventaris dan Peminjaman Barang</p>
        <hr class="my-4 bg-white">
        <p>Kelola stok barang dan peminjaman dengan mudah</p>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-primary h-100 shadow">
                <div class="card-body text-center">
                    <i class="fas fa-tags fa-4x text-primary mb-3"></i>
                    <h4 class="card-title">Kategori</h4>
                    <p class="card-text">Kelompokkan barang berdasarkan kategori</p>
                    <a href="<?= site_url('kategori') ?>" class="btn btn-primary btn-block stretched-link">
                        Buka Kategori
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-success h-100 shadow">
                <div class="card-body text-center">
                    <i class="fas fa-boxes fa-4x text-success mb-3"></i>
                    <h4 class="card-title">Barang</h4>
                    <p class="card-text">Kelola data barang dan stok</p>
                    <a href="<?= site_url('barang') ?>" class="btn btn-success btn-block stretched-link">
                        Buka Barang
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-info h-100 shadow">
                <div class="card-body text-center">
                    <i class="fas fa-hand-holding fa-4x text-info mb-3"></i>
                    <h4 class="card-title">Peminjaman</h4>
                    <p class="card-text">Kelola peminjaman barang</p>
                    <a href="<?= site_url('peminjaman') ?>" class="btn btn-info btn-block stretched-link">
                        Buka Peminjaman
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card border-warning h-100 shadow">
                <div class="card-body text-center">
                    <i class="fas fa-clipboard-list fa-4x text-warning mb-3"></i>
                    <h4 class="card-title">Barang Dipinjam</h4>
                    <p class="card-text">Daftar barang yang sedang dipinjam</p>
                    <a href="<?= site_url('peminjaman/aktif') ?>" class="btn btn-warning btn-block stretched-link">
                        Lihat Barang Dipinjam
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card border-danger h-100 shadow">
                <div class="card-body text-center">
                    <i class="fas fa-chart-bar fa-4x text-danger mb-3"></i>
                    <h4 class="card-title">Laporan</h4>
                    <p class="card-text">Lihat laporan peminjaman</p>
                    <a href="<?= site_url('peminjaman/laporan') ?>" class="btn btn-danger btn-block stretched-link">
                        Buka Laporan
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>