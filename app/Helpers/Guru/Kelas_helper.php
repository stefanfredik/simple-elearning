<?php

// semua kelass yang diajar oleh guru
function findKelasAjar($idguru) {
    $db =  \Config\Database::connect();
    $builder = $db->table("datajadwal");
    $builder->distinct("kelas");
    $builder->select("dataruangankelas.nama_ruangan");
    $builder->select("dataruangankelas.id");
    // $builder->select("dataruangankelas.*");
    $builder->join("dataguru", "datajadwal.guru = dataguru.id");
    $builder->join("dataruangankelas", "dataruangankelas.id = datajadwal.kelas");
    $builder->where("datajadwal.guru", $idguru);
    return $builder->get()->getResultArray();
}


// semua mata pelajaran yang diajar oleh guru dalam sebuah kelas
function findMapelAjar($id, $kls) {
    $db      =  \Config\Database::connect();
    $builder = $db->table("datajadwal");
    $builder->select("datamapel.nama_mapel");
    $builder->join("datamapel", "datajadwal.mapel = datamapel.id");
    $builder->where("datajadwal.guru", $id);
    $builder->where("datajadwal.kelas", $kls);
    $builder->distinct("mapel");
    return $builder->get()->getResultArray();
}



// nama kelas wali
function findKelasWali($idguru) {
    $db      =  \Config\Database::connect();
    $builder = $db->table("dataguru");
    $builder->select("dataruangankelas.id");
    $builder->select("dataruangankelas.nama_ruangan");
    $builder->join("dataruangankelas", "dataguru.status = dataruangankelas.id");
    $builder->where("dataguru.id", $idguru);
    return $builder->get()->getResultArray();
}

// nama ruangan kelas
function namaRuanganKelas($idsiswa) {
    $db      =  \Config\Database::connect();
    $builder = $db->table("datasiswa");
    $builder->select("dataruangankelas.id");
    $builder->select("dataruangankelas.nama_ruangan");
    $builder->join("dataruangankelas", "datasiswa.ruangan = dataruangankelas.id");
    $builder->where("datasiswa.id", $idsiswa);
    return $builder->get()->getFirstRow("array");
}
