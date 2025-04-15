<h2>Daftar Peminjaman</h2>
<a href="<?php echo site_url('peminjaman/create'); ?>" class="btn btn-primary mb-3">Tambah Peminjaman</a>

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
            <th>Barang</th>
            <th>Peminjam</th>
            <th>Jumlah</th>
            <th>Tgl Pinjam</th>
            <th>Tgl Kembali</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($peminjaman as $pjm): ?>
            <tr>
                <td><?php echo $pjm->id_peminjaman; ?></td>
                <td><?php echo $pjm->nama_barang; ?> (<?php echo $pjm->kode_barang; ?>)</td>
                <td><?php echo $pjm->peminjam; ?></td>
                <td><?php echo $pjm->jumlah; ?></td>
                <td><?php echo $pjm->tgl_pinjam; ?></td>
                <td><?php echo $pjm->tgl_kembali; ?></td>
                <td>
                    <?php if ($pjm->status == 'Dipinjam'): ?>
                        <span class="badge badge-warning"><?php echo $pjm->status; ?></span>
                    <?php else: ?>
                        <span class="badge badge-success"><?php echo $pjm->status; ?></span>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if ($pjm->status == 'Dipinjam'): ?>
                        <a href="<?php echo site_url('peminjaman/kembali/' . $pjm->id_peminjaman); ?>" class="btn btn-success btn-sm">Kembalikan</a>
                    <?php endif; ?>
                    <a href="<?php echo site_url('peminjaman/delete/' . $pjm->id_peminjaman); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>