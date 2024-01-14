<div class="row">
    <h2 class="mb-4">Laporan Patroli Harian</h2>
</div>

<div class="jumbotron bg-dark text-white">
    <a class="btn btn-primary" href="<?= base_url('patroli/excel_hasil_patroli') ?>" target="_blank" rel="noopener">
        <i class="fa fa-file-excel-o"></i> Export data hasil patroli harian
    </a><br><br>

    <div class="table-responsive">
    <table class="table table-bordered table-striped table-light">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>

                <th scope="col">Unit Poli</th>
                <th scope="col">Hasil Cek Poli</th>
                <th scope="col">Keterangan Poli</th>

                <th scope="col">Unit Loket</th>
                <th scope="col">Hasil Cek Loket</th>
                <th scope="col">Keterangan Loket</th>

                <th scope="col">Unit IGD</th>
                <th scope="col">Hasil Cek IGD</th>
                <th scope="col">Keterangan IGD</th>

                <th scope="col">Unit Farmasi</th>
                <th scope="col">Hasil Cek Farmasi</th>
                <th scope="col">Keterangan Farmasi</th>

                <th scope="col">Unit Kamar Operasi</th>
                <th scope="col">Hasil Cek Kamar Operasi</th>
                <th scope="col">Keterangan Kamar Operasi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($patroli as $i => $dc) : ?>
                <tr>
                    <td><?= ($i + 1) ?></td>
                    <td><?= date('l, d-m-Y', strtotime($dc->tanggal)) ?></td>

                    <td><?= $dc->unit_poli ?></td>
                    <td><?= $dc->hasil_cek_poli ?> Aman</td>
                    <td><?= $dc->ket_poli ?></td>

                    <td><?= $dc->unit_loket ?></td>
                    <td><?= $dc->hasil_cek_loket ?> Aman</td>
                    <td><?= $dc->ket_loket ?></td>

                    <td><?= $dc->unit_igd ?></td>
                    <td><?= $dc->hasil_cek_igd ?> Aman</td>
                    <td><?= $dc->ket_igd ?></td>

                    <td><?= $dc->unit_farmasi ?></td>
                    <td><?= $dc->hasil_cek_farmasi ?> Aman</td>
                    <td><?= $dc->ket_farmasi ?></td>

                    <td><?= $dc->unit_operasi ?></td>
                    <td><?= $dc->hasil_cek_operasi ?> Aman</td>
                    <td><?= $dc->ket_operasi ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
                
</div>