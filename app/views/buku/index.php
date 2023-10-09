<div class="container">
    <h3 class="mb-3">Daftar barang</h3>
    <br>
    <a href="<?= BASE_URL; ?>/buku/tambah" class="btn btn-primary">Tambah Barang</a>
    <br>
    <br>
    <table class="table table-success table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis</th>
                <th scope="col">No Barang</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <form method="post" style="float: right;" action="<?= BASE_URL; ?>/buku/search">
                <div class="input-group">
                    <input class="form-control" type="text" name="search" id="search" />
                    <button class="btn btn-outline-secondary btn-sm " type="submit">Search</button>
                    <button class="btn btn-outline-danger btn-sm "><a class="text-danger" style="text-decoration: none;" href="index.php">Reset</a></button>
                </div>
            </form>
            <?php $no = 1; ?>
            <?php foreach ($data['buku'] as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nama_peminjaman']; ?></td>
                    <td><?= $row['jenis_barang']; ?></td>
                    <td><?= $row['no_barang']; ?></td>
                    <td><?= $row['tgl_pinjam']; ?></td>
                    <td><?= $row['tgl_kembali']; ?></td>
                    <?php
                    if ($row['tgl_kembali'] >= $row['tgl_pinjam']) {
                        $status = "<button type='button' class='btn btn-danger'>Belum Kembali</button>";
                    } else {
                        $status = "<button type='button' class='btn btn-success'>Sudah Kembali</button>";
                    }
                    ?>
                    <td><?= $status; ?></td>


                    <td>
                        <?php
                        if ($row['tgl_kembali'] <= $row['tgl_pinjam']) { ?>
                            <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                        <?php } ?>

                        <?php
                        if ($row['tgl_kembali'] >= $row['tgl_pinjam']) { ?>
                            <a href="<?= BASE_URL ?>/buku/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                            <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                        <?php } ?>
                    </td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</div>