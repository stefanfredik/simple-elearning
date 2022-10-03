<?= $this->extend("template/guru/guruTemplate"); ?>

<?= $this->section("content"); ?>

<?php
helper("Guru/Walikelas");
$bulan = 'februari';
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
                </select>

                <hr>

                <div id="dataabsen" class="table-responsive">
                    <?php $bulan = $bulan ?>

                    <table class="table table-bordered">
                        <thead class="border align-middle align-center  text-center">
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Nama</th>
                                <th colspan="32">Tanggal</th>
                            </tr>
                            <tr>
                                <?php for ($i = 1; $i <= 31; $i++) : ?>
                                    <td><?= $i; ?></td>
                                <?php endfor; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;

                            // dd($siswa);
                            foreach ($siswa as $dt) :  ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td>
                                        <?= $dt["nama"]; ?>
                                    </td>

                                    <?php for ($i = 1; $i <= 31; $i++) : ?>

                                        <?php

                                        $absen =  getAbsensi($dt['id'], $guru, $bulan, $i);

                                        // dd($absen);

                                        if ($absen != false) { ?>

                                            <td data-siswa="<?= $dt['id']; ?>" id="<?= $absen[0]['id']; ?>" class="absen">
                                                <p>
                                                    <?= $absen[0]["status"]; ?></p>
                                                <select hidden onchange="ubdateAbsensi(this)" class="form-controll absen" name="<?= $i; ?>" id="">
                                                    <option value="">-</option>
                                                    <option value="H">H</option>
                                                    <option value="I">I</option>
                                                    <option value="S">S</option>
                                                    <option value="A">A</option>
                                                </select>
                                            </td>

                                        <?php } else { ?>
                                            <td data-siswa="<?= $dt['id']; ?>" class="absen">
                                                <p>-</p>

                                                <select hidden onchange="ubdateAbsensi(this)" class="form-controll absen" name="<?= $i; ?>" id="">
                                                    <option value="">-</option>
                                                    <option value="H">H</option>
                                                    <option value="I">I</option>
                                                    <option value="S">S</option>
                                                    <option value="A">A</option>
                                                </select>
                                            </td>
                                        <?php }; ?>
                                    <?php endfor; ?>

                                </tr>


                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <!-- <a href="javascript:window.top.location.reload(true)" class="continue">Continue</a> -->
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>


<?= $this->section('script'); ?>
<script>
    const absensi = document.querySelectorAll('.absen');

    absensi.forEach(absen => {
        absen.addEventListener('click', function handleClick(event) {
            let id = absen.getAttribute('id');
            absen.childNodes[0].setAttribute('hidden', true);
            absen.childNodes[1].removeAttribute('hidden');

            absen.setAttribute('style', 'background-color: yellow;');
        });
    });



    function ubdateAbsensi(params) {
        // let bulan = params.parentElement.parentElement.firstChild.innerText;
        let bulan = 'Februari';

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
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })

            console.log(res.data.pesan);
        });
    }

    function changeMonth(v) {

        // alert(v.value);
        const dataabsen = document.getElementById('dataabsen');

        axios.get(`/guru/absensi/getabsensi/${v.value}`, {}).then((res) => {
            dataabsen.innerHTML = res.data;

            const absensi = document.querySelectorAll('.absen');

            absensi.forEach(absen => {
                absen.addEventListener('click', function handleClick(event) {
                    let id = absen.getAttribute('id');

                    absen.children[0].setAttribute('hidden', true);
                    absen.children[1].removeAttribute('hidden');
                    absen.setAttribute('style', 'background-color: green;');
                });
            });
        });
    }
</script>

<?= $this->endSection(); ?>