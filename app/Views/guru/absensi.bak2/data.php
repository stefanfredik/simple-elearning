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
                        <td data-siswa="<?= $dt['id']; ?>" id="<?= $absen[$i - 1]['id']; ?>" class="absen">
                            <p><?= $absen[$i - 1]["status"]; ?></p>

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