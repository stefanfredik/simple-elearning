<?= $this->extend("template/guru/guruTemplate"); ?>

<?= $this->section("content"); ?>

<?php
helper("Guru/Walikelas");
?>

<div class="row">
    <div class="col-lg">
        <div class="card">
            <div class="card-header">
                Input Absensi Siswa
            </div>

            <div class="card-body">
                <label class="form-label" for="">Pilih Bulan</label>
                <select onchange="changeMonth(this)" class="form-control" name="" id="">
                    <option value="">Pilih Bulan</option>
                    <option value="januari">Januari</option>
                    <option value="februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                </select>

                <hr>

                <div id="dataabsen" class="table-responsive">

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>


<?= $this->section('script'); ?>
<script>
    let bulan = 'januari';
    changeMonth(bulan);
    // document.cookie = `bulan = ${bulan}`;
    const absensi = document.querySelectorAll('.absen');

    // absensi.forEach(absen => {
    //     absen.addEventListener('click', function handleClick(event) {
    //         let id = absen.getAttribute('id');
    //         absen.childNodes[0].setAttribute('hidden', true);
    //         absen.childNodes[1].removeAttribute('hidden');

    //         absen.setAttribute('style', 'background-color: yellow;');
    //     });
    // });



    function ubdateAbsensi(params) {
        // let bulan = params.parentElement.parentElement.firstChild.innerText;
        // let bulan = 'Februari';

        const tanggal = params.name;
        const siswa = params.parentElement.getAttribute('data-siswa');
        let id = params.parentElement.getAttribute('id');

        if (!id) id = 'null';

        axios.post("/guru/absensi/updateabsensi/", {
            id: id,
            guruwali: '',
            siswa: siswa,
            bulan: bulan,
            tanggal: tanggal,
            status: params.value,
        }).then((res) => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Data Absensi Berhasil Disimpan.',
                showConfirmButton: false,
                timer: 1500
            })

            // console.log(res.data.pesan);
        });
    }

    function changeMonth(v) {

        // alert(v.value);
        const dataabsen = document.getElementById('dataabsen');

        axios.get(`/guru/absensi/getabsensi/${v.value}`, {}).then((res) => {
            bulan = v.value;
            dataabsen.innerHTML = res.data;

            const absensi = document.querySelectorAll('.absen');

            absensi.forEach(absen => {
                absen.addEventListener('click', function handleClick(event) {
                    let id = absen.getAttribute('id');

                    absen.children[0].setAttribute('hidden', true);
                    absen.children[1].removeAttribute('hidden');
                    // absen.setAttribute('style', 'background-color: green;');
                    absen.classList.add("bg-success", "text-white", "border-rounded");
                });
            });
        });
    }
</script>

<?= $this->endSection(); ?>