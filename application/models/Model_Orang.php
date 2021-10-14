<?php

class Model_orang extends CI_Model {

    public function AmbilDataOrang() {
    $this->load->database();

    $hasil = $this->db->query("SELECT * FROM orang");

    return $hasil->result();
    } 

    public function ProsesTambahOrang($nama, $alamat) {
        $this->load->database();
        
        $this->db->query ("INSERT INTO orang(nama, alamat) VALUES('$nama', '$alamat')");
    }
}

?>