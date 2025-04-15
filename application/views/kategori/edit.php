<h2>Edit Kategori</h2>

<form action="<?php echo site_url('kategori/edit/' . $kategori->id_kategori); ?>" method="post">
    <div class="form-group">
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="<?php echo $kategori->nama_kategori; ?>" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?php echo $kategori->deskripsi; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?php echo site_url('kategori'); ?>" class="btn btn-secondary">Batal</a>
</form>