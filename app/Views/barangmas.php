<h3> Barang Masuk</h3>
<form action="<?= base_url('home/savebm') ?>" method="post">
  <div class="mb-3 mt-3">
    <label for="idb" class="form-label">ID Barang Masuk:</label>
    <input type="text" class="form-control" id="idb" placeholder="Masukkan ID Barang" name="idb" value="<?= $anjas->id_barang ?>">
  </div>
  <div class="mb-3">
    <label for="jumlah" class="form-label">Jumlah Barang Masuk:</label>
    <input type="text" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah" value="<?= $anjas->jumlah ?>">
  </div>
  <div class="mb-3">
    <label for="tanggal" class="form-label">Tanggal Barang Masuk:</label>
    <input type="date" class="form-control" id="tanggal" placeholder="Tanggal Masuk" name="tanggal" value="<?= $anjas->tanggal_masuk ?>">
  </div>
    <input type="hidden" value="<?= $anjas->id_bm ?>" name="idbm">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>