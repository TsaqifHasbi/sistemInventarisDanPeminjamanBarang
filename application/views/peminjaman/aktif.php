<h2>Barang Yang Masih Dipinjam</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Barang</th>
            <th>Peminjam</th>
            <th>Jumlah</th>
            <th>Tgl Pinjam</th>
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
                <td>
                    <a href="<?php echo site_url('peminjaman/kembali/' . $pjm->id_peminjaman); ?>" class="btn btn-success btn-sm">Kembalikan</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>