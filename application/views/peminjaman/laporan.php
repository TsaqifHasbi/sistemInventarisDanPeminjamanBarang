<h2>Laporan Peminjaman</h2>

<form action="<?php echo site_url('peminjaman/laporan'); ?>" method="post" class="mb-4">
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="tgl_awal">Tanggal Awal</label>
            <input type="date" class="form-control" id="tgl_awal" name="tgl_awal" required>
        </div>
        <div class="form-group col-md-5">
            <label for="tgl_akhir">Tanggal Akhir</label>
            <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir" required>
        </div>
        <div class="form-group col-md-2">
            <label>&nbsp;</label>
            <button type="submit" class="btn btn-primary btn-block">Filter</button>
        </div>
    </div>
</form>

<?php if (!empty($peminjaman)): ?>
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
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>