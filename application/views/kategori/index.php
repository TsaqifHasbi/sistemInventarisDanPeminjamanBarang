<h2>Daftar Kategori</h2>
<a href="<?php echo site_url('kategori/create'); ?>" class="btn btn-primary mb-3">Tambah Kategori</a>

<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
<?php endif; ?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Kategori</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kategori as $kat): ?>
            <tr>
                <td><?php echo $kat->id_kategori; ?></td>
                <td><?php echo $kat->nama_kategori; ?></td>
                <td><?php echo $kat->deskripsi; ?></td>
                <td>
                    <a href="<?php echo site_url('kategori/edit/' . $kat->id_kategori); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?php echo site_url('kategori/delete/' . $kat->id_kategori); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>