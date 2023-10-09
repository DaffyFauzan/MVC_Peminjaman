<div class="container">
    <h3 class="mb-3">Edit Barang : <?= $data['buku']['nama_peminjaman']; ?> </h3>
    <form action="<?= BASE_URL; ?>/buku/updateBuku" method="post">
        <div class="class-body">
            <input type="hidden" name="id" value="<?= $data['buku']['id']; ?>">
            <div class="form-group mb-3">
                <label for="nama_peminjaman">Nama Peminjam</label>
                <input type="text" class="form-control" id="nama_peminjaman" name="nama_peminjaman" value="<?= $data['buku']['nama_peminjaman'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="jenis_barang">Jenis Barang</label>
                <select class="form-control" id="jenis_barang" name="jenis_barang" >
                    <option hidden value=>==PILIH BARANG==</option>
                    <option value="Laptop">Laptop</option>
                    <option value="HP">HP</option>
                    <option value="Adapter LAN">Adapter LAN</option>
                </select>

            </div>
            <div class="form-group mb-3">
                <label for="no_barang">No Barang</label>
                <input type="number" class="form-control" id="no_barang" name="no_barang" value="<?= $data['buku']['no_barang'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_pinjam">Tanggal Pinjam</label>
                <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= $data['buku']['tgl_pinjam'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_kembali">Tanggal Kembali</label>
                <input type="datetime-local" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?= $data['buku']['tgl_kembali'] ?>">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>