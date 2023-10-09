<?php

class BukuModel {

    private $table = 'barang';
    private $db;

    public function __construct()
    {
     $this->db = new Database;   
    }

    public function getAllBuku()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultset(); 
    }

    public function getBukuById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id); 
        return $this->db->single(); 
    }

    public function tambahBuku($data)
    {
        $query = "INSERT INTO barang (nama_peminjaman, jenis_barang, no_barang, tgl_pinjam, tgl_kembali) 
        VALUES (:nama_peminjaman, :jenis_barang, :no_barang, :tgl_pinjam, :tgl_kembali)";
        $this->db->query($query);
        $this->db->bind('nama_peminjaman',$data['nama_peminjaman']); 
        $this->db->bind('jenis_barang',$data['jenis_barang']); 
        $this->db->bind('no_barang',$data['no_barang']); 
        $this->db->bind('tgl_pinjam',$data['tgl_pinjam']); 
        $tglPinj = $data['tgl_pinjam'];
        $data['tgl_kembali'] = date('Y-m-d h:m:s', strtotime($tglPinj . '+ 2 days'));
        $this->db->bind('tgl_kembali',$data['tgl_kembali']);
        $this->db->execute(); 
        return $this->db->rowCount(); 
    }

    public function updateDataBuku($data)
    {
        $query = "UPDATE barang SET nama_peminjaman=:nama_peminjaman, jenis_barang=:jenis_barang, no_barang=:no_barang, tgl_pinjam=:tgl_pinjam, tgl_kembali=:tgl_kembali WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$data['id']);
        $this->db->bind('nama_peminjaman',$data['nama_peminjaman']); 
        $this->db->bind('jenis_barang',$data['jenis_barang']); 
        $this->db->bind('no_barang',$data['no_barang']); 
        $this->db->bind('tgl_pinjam',$data['tgl_pinjam']); 
        $this->db->bind('tgl_kembali',$data['tgl_kembali']); 
        $this->db->execute(); 
        return $this->db->rowCount(); 
    }

    public function deleteBuku($id)
    {
        $this->db->query("DELETE FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        $this->db->execute(); 

        return $this->db->rowCount(); 
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE nama_peminjaman LIKE :keyword OR jenis_barang LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', '%' . $keyword . '%');
        return $this->db->resultSet();
    }

}
?>