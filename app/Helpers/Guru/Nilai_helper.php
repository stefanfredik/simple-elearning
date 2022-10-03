<?php

use App\Controllers\Guru\Tugas;

function getNilaiTugas($idsiswa, $idkelas, $idmapel) {
    $db =  \Config\Database::connect();
    $builder = $db->table("hasiltugas");
    $builder->select("hasiltugas.*");
    $builder->select("tugas.*");
    $builder->join("tugas", "tugas.id = hasiltugas.tugas", "left");

    $builder->where("hasiltugas.siswa", $idsiswa);
    $builder->where("tugas.mapel", $idmapel);
    $builder->where("tugas.kelas", $idkelas);
    return $builder->get()->getResultArray();
}

function getJumlahTugas($idkelas, $idmapel) {
    $db =  \Config\Database::connect();
    $builder = $db->table("hasiltugas");

    $builder->select("hasiltugas.*");
    $builder->join("tugas", "tugas.id = hasiltugas.tugas");
    $builder->where("tugas.mapel", $idmapel);
    $builder->where("tugas.kelas", $idkelas);
    return $builder->countAllResults();
}

function getNilaiQuiz($idsiswa, $idkelas, $idmapel) {
    $db =  \Config\Database::connect();
    $builder = $db->table("hasilquiz");
    $builder->select("hasilquiz.*");
    $builder->select("quiz.*");
    $builder->join("quiz", "quiz.id = hasilquiz.quiz", "left");

    $builder->where("hasilquiz.siswa", $idsiswa);
    $builder->where("quiz.mapel", $idmapel);
    $builder->where("quiz.kelas", $idkelas);
    return $builder->get()->getResultArray();
}

function getJumlahQuiz($idkelas, $idmapel) {
    $db =  \Config\Database::connect();
    $builder = $db->table("hasilquiz");

    $builder->select("hasilquiz.*");
    $builder->join("quiz", "quiz.id = hasilquiz.quiz");
    $builder->where("quiz.mapel", $idmapel);
    $builder->where("quiz.kelas", $idkelas);
    return $builder->countAllResults();
}

function getNilaiUjian($idsiswa, $idkelas, $idmapel) {
    $db =  \Config\Database::connect();
    $builder = $db->table("hasilujian");
    $builder->select("hasilujian.*");
    $builder->select("ujian.*");
    $builder->join("ujian", "ujian.id = hasilujian.ujian", "left");

    $builder->where("hasilujian.siswa", $idsiswa);
    $builder->where("ujian.mapel", $idmapel);
    $builder->where("ujian.kelas", $idkelas);
    return $builder->get()->getResultArray();
}

function getJumlahUjian($idkelas, $idmapel) {
    $db =  \Config\Database::connect();
    $builder = $db->table("hasilujian");

    $builder->select("hasilujian.*");
    $builder->join("ujian", "ujian.id = hasilujian.ujian");
    $builder->where("ujian.mapel", $idmapel);
    $builder->where("ujian.kelas", $idkelas);
    return $builder->countAllResults();
}


function jumlahNilai($idsiswa, $idmapel, $idkelas) {
    $jumlahTugas = intval(getJumlahTugas($idkelas, $idmapel));
    $jumlahQuiz = getJumlahQuiz($idkelas, $idmapel);
    $jumlahUjian = getJumlahUjian($idkelas, $idmapel);

    return $jumlahTugas + $jumlahQuiz + $jumlahUjian;
}

function totalNilai($idsiswa, $idmapel, $idkelas) {
    $nilaiTugas = getNilaiTugas($idsiswa, $idkelas, $idmapel);
    $tugas = 0;

    foreach ($nilaiTugas as $tg) {
        $tugas = $tugas +  $tg["nilai"];
    }

    $nilaiQuiz = getNilaiQuiz($idsiswa, $idkelas, $idmapel);
    $quiz = 0;

    foreach ($nilaiQuiz as $qz) {
        $quiz += $qz["nilai"];
    }

    $nilaiUjian = getNilaiUjian($idsiswa, $idkelas, $idmapel);
    $ujian = 0;

    foreach ($nilaiUjian as $uj) {
        $ujian += $uj["nilai"];
    }

    return (int)$tugas + $quiz + $ujian;
}

function totalTugas($idsiswa, $idmapel, $idkelas) {
    $nilaiTugas = getNilaiTugas($idsiswa, $idkelas, $idmapel);
    $tugas = 0;

    foreach ($nilaiTugas as $tg) {
        $tugas = $tugas +  $tg["nilai"];
    }

    return $tugas;
}

function totalQuiz($idsiswa, $idmapel, $idkelas) {
    $nilaiTugas = getNilaiQuiz($idsiswa, $idkelas, $idmapel);
    $tugas = 0;

    foreach ($nilaiTugas as $tg) {
        $tugas = $tugas +  $tg["nilai"];
    }

    return $tugas;
}

function totalUjian($idsiswa, $idmapel, $idkelas) {
    $nilaiTugas = getNilaiUjian($idsiswa, $idkelas, $idmapel);
    $tugas = 0;

    foreach ($nilaiTugas as $tg) {
        $tugas = $tugas +  $tg["nilai"];
    }

    return $tugas;
}
