<?= $this->extend("/template/guru/guruTemplate"); ?>
<?= $this->section("content"); ?>


<div class="card">
    <div class="card-header">
        Edit Data Absensi
    </div>

    <div class="card-body table-responsive">
        <table class="table table-bordered">
            <thead class="align-middle text-center">
                <tr>
                    <th rowspan="2">Bulan</th>
                    <th colspan="31">Tanggal</th>
                </tr>
                <tr>
                    <?php for ($i = 0; $i < 31; $i++) : ?>
                        <th><?= $i + 1; ?></th>
                    <?php endfor; ?>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Januari</td>

                    <?php for ($i = 0; $i < 31; $i++) : ?>
                        <td>
                            <select onchange="ubdateAbsensi(this)" class="form-controll absen" name="<?= $i + 1; ?>" id="">
                                <option value="">-</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="S">S</option>
                                <option value="A">A</option>
                            </select>
                        </td>
                    <?php endfor; ?>
                </tr>
                <tr>
                    <td>Februari</td>
                    <?php for ($i = 0; $i < 31; $i++) : ?>
                        <td>
                            <select onchange="ubdateAbsensi(this)" class="form-controll absen" name="<?= $i + 1; ?>" id="">
                                <option value="">-</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="S">S</option>
                                <option value="A">A</option>
                            </select>
                        </td>
                    <?php endfor; ?>
                </tr>
                <tr>
                    <td>Maret</td>
                    <?php for ($i = 0; $i < 31; $i++) : ?>
                        <td>
                            <select onchange="ubdateAbsensi(this)" class="form-controll absen" name="<?= $i + 1; ?>" id="">
                                <option value="">-</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="S">S</option>
                                <option value="A">A</option>
                            </select>
                        </td>
                    <?php endfor; ?>
                </tr>
                <tr>
                    <td>April</td>
                    <?php for ($i = 0; $i < 31; $i++) : ?>
                        <td>
                            <select onchange="ubdateAbsensi(this)" class="form-controll absen" name="<?= $i + 1; ?>" id="">
                                <option value="">-</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="S">S</option>
                                <option value="A">A</option>
                            </select>
                        </td>
                    <?php endfor; ?>
                </tr>
                <tr>
                    <td>Mei</td>
                    <?php for ($i = 0; $i < 31; $i++) : ?>
                        <td>
                            <select onchange="ubdateAbsensi(this)" class="form-controll absen" name="<?= $i + 1; ?>" id="">
                                <option value="">-</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="S">S</option>
                                <option value="A">A</option>
                            </select>
                        </td>
                    <?php endfor; ?>
                </tr>
                <tr>
                    <td>Juni</td>
                    <?php for ($i = 0; $i < 31; $i++) : ?>
                        <td>
                            <select onchange="ubdateAbsensi(this)" class="form-controll absen" name="<?= $i + 1; ?>" id="">
                                <option value="">-</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="S">S</option>
                                <option value="A">A</option>
                            </select>
                        </td>
                    <?php endfor; ?>
                </tr>
                <tr>
                    <td>Juli</td>
                    <?php for ($i = 0; $i < 31; $i++) : ?>
                        <td>
                            <select onchange="ubdateAbsensi(this)" class="form-controll absen" name="<?= $i + 1; ?>" id="">
                                <option value="">-</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="S">S</option>
                                <option value="A">A</option>
                            </select>
                        </td>
                    <?php endfor; ?>
                </tr>
                <tr>
                    <td>Agustus</td>
                    <?php for ($i = 0; $i < 31; $i++) : ?>
                        <td>
                            <select onchange="ubdateAbsensi(this)" class="form-controll absen" name="<?= $i + 1; ?>" id="">
                                <option value="">-</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="S">S</option>
                                <option value="A">A</option>
                            </select>
                        </td>
                    <?php endfor; ?>
                </tr>
                <tr>
                    <td>September</td>
                    <?php for ($i = 0; $i < 31; $i++) : ?>
                        <td>
                            <select onchange="ubdateAbsensi(this)" class="form-controll absen" name="<?= $i + 1; ?>" id="">
                                <option value="">-</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="S">S</option>
                                <option value="A">A</option>
                            </select>
                        </td>
                    <?php endfor; ?>
                </tr>
                <tr>
                    <td>Oktober</td>
                    <?php for ($i = 0; $i < 31; $i++) : ?>
                        <td>
                            <select onchange="ubdateAbsensi(this)" class="form-controll absen" name="<?= $i + 1; ?>" id="">
                                <option value="">-</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="S">S</option>
                                <option value="A">A</option>
                            </select>
                        </td>
                    <?php endfor; ?>
                </tr>
                <tr>
                    <td>November</td>
                    <?php for ($i = 0; $i < 31; $i++) : ?>
                        <td>
                            <select onchange="ubdateAbsensi(this)" class="form-controll absen" name="<?= $i + 1; ?>" id="">
                                <option value="">-</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="S">S</option>
                                <option value="A">A</option>
                            </select>
                        </td>
                    <?php endfor; ?>
                </tr>
                <tr>
                    <td>Desember</td>
                    <?php for ($i = 0; $i < 31; $i++) : ?>
                        <td>
                            <select onchange="ubdateAbsensi(this)" class="form-controll absen" name="<?= $i + 1; ?>" id="">
                                <option value="">-</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="S">S</option>
                                <option value="A">A</option>
                            </select>
                        </td>
                    <?php endfor; ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>


<?= $this->section("script"); ?>

<script>
    async function ubdateAbsensi(params) {
        let bulan = params.parentElement.parentElement.firstChild.innerText;
        let tanggal = params.name;

        // console.log(bulan);

        await axios.post("/guru/absensi/updateabsensi/", {
            siswa: <?= $siswa["id"]; ?>,
            guruwali: '',
            bulan: bulan,
            tanggal: tanggal,
            status: params.value,
        }).then((res) => {
            console.log(res.data);
            // document.write(res.data);
        });
    }
</script>
<?= $this->endSection(); ?>