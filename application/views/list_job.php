<div class="row">
    <h2 class="mb-4">List Kerjaan</h2>

</div>
<div class="jumbotron bg-dark text-white">
    <a class="btn btn-primary" href="<?= base_url('jobdesk/excel_hasil_pelaporan/'.$id_userL) ?>" target="_blank" rel="noopener">
        <i class="fa fa-file-excel-o"></i> Export data pelaporan
    </a><br><br>
    <div class="table-responsive">

        <table class="table table-bordered table-striped table-light">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Unit Pelapor</th>
                    <th scope="col">Nama Pelapor</th>
                    <th scope="col">List Kerjaan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listUserById as $i => $lj) : ?>
                    <tr>
                        <td><?= ($i + 1) ?></td>
                        <td><?= $lj->tanggal ?></td>
                        <td><?= $lj->nama_divisi ?></td>
                        <td><?= $lj->nama_pelapor ?></td>
                        <td><?= $lj->tugas ?></td>
                        <td><?= $lj->status ?></td>
                        <td>
                            <!-- <a href="<?= base_url('jobdesk/list_jobById/' . $ls->id_user) ?>" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Detail Kerjaan</a> -->

                            <a href="<?= base_url('') ?>" class="btn btn-success btn-sm  ml-2"><i class=" fa fa-pencil-square-o "></i> Edit</a>

                            <a href=" <?= base_url('') ?>" class="btn btn-primary btn-sm btn-delete ml-2" onclick="return false"><i class="fa fa-check"></i> Selesai</a>
                        </td>
                    </tr>
                <?php endforeach; ?>


            </tbody>
        </table>
    </div>