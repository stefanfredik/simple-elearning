<?php

function getAllRuanganKelas() {
    $db =  \Config\Database::connect();
    $builder = $db->table("dataguru");
    $builder->select("dataguru.*");
    $builder->select("dataruangankelas.nama_ruangan");
    $builder->join("dataruangankelas", "dataruangankelas.id = dataguru.status", "left");
    return $builder->get()->getResultArray();
}
