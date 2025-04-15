<h2>Edit Barang</h2>

<form action="<?php echo site_url('barang/edit/' . $barang->id_barang); ?>" method="post">
    <div class="form-group">
        <label for="kode_barang">Kode Barang</label>
        <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?php echo $barang->kode_barang; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $barang->nama_barang; ?>" required>
    </div>
    <div class="form-group">
        <label for="id_kategori">Kategori</label>
        <select class="form-control" id="id_kategori" name="id_kategori" required>
            <option value="">Pilih Kategori</option>
            <?php foreach ($kategori as $kat): ?>
                <option value="<?php echo $kat->id_kategori; ?>" <?php echo ($kat->id_kategori == $barang->id_kategori) ? 'selected' : ''; ?>>
                    <?php echo $kat->nama_kategori; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="stok">Stok</label>
        <input type="number" class="form-control" id="stok" name="stok" value="<?php echo $barang->stok; ?>" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?php echo $barang->deskripsi; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?php echo site_url('barang'); ?>" class="btn btn-secondary">Batal</a>
</form>