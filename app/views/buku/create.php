<div class="container">
    <h3 class="mb-3">Tambah Buku</h3>
    <form action="<?= BASE_URL; ?>/buku/simpanbuku" method="post">
        <div class="class-body">
            <div class="form-group mb-3">
                <label for="judul ">Nama Peminjam</label>
                <input type="text" class="form-control" id="nama_peminjaman" name="nama_peminjaman">
            </div>
             <div class="form-group mb-3">
                <label for="jenis_barang">Jenis Barang</label>
                <select class="form-control" id="jenis_barang" name="jenis_barang">
                    <option hidden value="">==PILIH BARANG==</option>
                    <option value="Laptop">Laptop</option>
                    <option value="HP">HP</option>
                    <option value="Adapter LAN">Adapter LAN</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="tgl_selesai ">Nomor Barang</label>
                <input type="number" class="form-control" id="no_barang" name="no_barang">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_selesai ">Tanggal Pinjam</label>
                <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>