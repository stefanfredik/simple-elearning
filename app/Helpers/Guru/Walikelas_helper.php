<?php

function getMapelAllKelas($kelas) {
    $db =  \Config\Database::connect();
    $builder = $db->table("datajadwal");
    $builder->select("datajadwal.*");
    $builder->select("datamapel.nama_mapel");
    $builder->select("dataguru.nama");
    $builder->join("dataguru", "dataguru.id = datajadwal.guru");
    $builder->join("datamapel", "datamapel.id = datajadwal.mapel");
    $builder->distinct("mapel");

    $builder->where("datajadwal.kelas", $kelas);
    return $builder->get()->getResultArray();
}



function getAllSiswaKelas($kelas) {
    $db =  \Config\Database::connect();
    $builder = $db->table("datasiswa");
    $builder->select("datasiswa.*");

    // $builder->select("hasiltugas.nilai");
    // $builder->select("hasilquiz.nilai");
    // $builder->select("hasilujian.nilai");
    $builder->where("datasiswa.ruangan", $kelas);



    // $builder->select("dataguru.nama");
    // $builder->join("dataguru", "dataguru.id = datajadwal.guru");
    // $builder->join("datamapel", "datamapel.id = datajadwal.mapel");
    // $builder->distinct("mapel");

    // $builder->where("datajadwal.kelas", $kelas);


    // $builder->where("datajadwal.kelas", $kelas);
    return $builder->get()->getResultArray();
}


// get kkm
function getKkm($idmapel) {
    $db =  \Config\Database::connect();
    $builder = $db->table("datamapel");
    $builder->select("datamapel.*");
    // $builder->join("datamapel", "datamapel.id = datajadwal.mapel");
    $builder->distinct("mapel");
    $builder->where("datamapel.id", $idmapel);

    return $builder->get()->getFirstRow("array");
}


// Get Absensi Siswa
// function getAbsensi($siswa, $guru, $bulan, $tanggal) {

//     $db =  \Config\Database::connect();



//     $builder = $db->table("absensi");
//     // $builder->select("status");
//     $builder->where("siswa", $siswa);
//     $builder->where("tanggal", $tanggal);
//     $builder->where("guruwali", $guru);
//     $builder->where("bulan", $bulan);


//     if ($builder->get()->getResult() == null) {
//         return false;
//     } else {
//         return $builder->get()->getResultArray();
//     }
// }


function getAbsensi($siswa, $guru, $bulan, $tanggal) {

    $db = db_connect();

    $query = $db->query("SELECT * FROM `absensi` WHERE siswa = '$siswa' and guruwali = '$guru' and bulan = '$bulan' and tanggal =  '$tanggal'");
    // $query = $db->query("SELECT * FROM `absensi` WHERE siswa = 13 and guruwali = 30 and bulan = 'februari' and tanggal = 1;");

    if (!$query) {
        return false;
    } else {
        return $query->getResultArray();
    }
}


// function getStatusAbsen(){

// }
