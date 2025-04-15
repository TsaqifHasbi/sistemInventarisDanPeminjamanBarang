<h2>Daftar Barang</h2>
<a href="<?php echo site_url('barang/create'); ?>" class="btn btn-primary mb-3">Tambah Barang</a>

<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
<?php endif; ?>
<?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
<?php endif; ?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($barang as $brg): ?>
            <tr>
                <td><?php echo $brg->id_barang; ?></td>
                <td><?php echo $brg->kode_barang; ?></td>
                <td><?php echo $brg->nama_barang; ?></td>
                <td><?php echo $brg->nama_kategori; ?></td>
                <td><?php echo $brg->stok; ?></td>
                <td>
                    <a href="<?php echo site_url('barang/edit/' . $brg->id_barang); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?php echo site_url('barang/delete/' . $brg->id_barang); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>