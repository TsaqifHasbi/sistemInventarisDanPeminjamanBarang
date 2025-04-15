<h2>Tambah Peminjaman</h2>

<form action="<?php echo site_url('peminjaman/create'); ?>" method="post">
    <div class="form-group">
        <label for="id_barang">Barang</label>
        <select class="form-control" id="id_barang" name="id_barang" required>
            <option value="">Pilih Barang</option>
            <?php foreach ($barang as $brg): ?>
                <option value="<?php echo $brg->id_barang; ?>"><?php echo $brg->nama_barang; ?> (Stok: <?php echo $brg->stok; ?>)</option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="peminjam">Peminjam</label>
        <input type="text" class="form-control" id="peminjam" name="peminjam" required>
    </div>
    <div class="form-group">
        <label for="jumlah">Jumlah</label>
        <input type="number" class="form-control" id="jumlah" name="jumlah" required>
    </div>
    <div class="form-group">
        <label for="tgl_pinjam">Tanggal Pinjam</label>
        <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" required>
    </div>
    <div class="form-group">
        <label for="tgl_kembali">Tanggal Kembali (Perkiraan)</label>
        <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali">
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo site_url('peminjaman'); ?>" class="btn btn-secondary">Batal</a>
</form>