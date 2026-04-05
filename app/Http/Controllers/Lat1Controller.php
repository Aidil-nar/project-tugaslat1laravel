<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    // Method untuk latihan 1
    public function index() {
        $data["nama"] = "Agus";
        $data["asal"] = "Bandung";
        return view('v_latihan1', $data);
    }

    // Method untuk latihan 2 (Data Tabel Mahasiswa)
    public function method2() {
        $data["title"] = "Daftar Mahasiswa";
        
        // Menyiapkan array data mahasiswa sesuai hasil output di gambar
        $data["daf_mhs"] = [
            array("nama" => "Agus", "asal" => "Bandung"),
            array("nama" => "Budi", "asal" => "Jakarta"),
            array("nama" => "Roni", "asal" => "Surabaya")
        ];
        
        return view('v_latihan2', $data);
    }
}