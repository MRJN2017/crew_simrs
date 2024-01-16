<div class="row">
    <h2 class="mb-4">List Kerjaan</h2>
</div>
<div class="jumbotron bg-dark text-white">
    <br>
    <br>
    <table class="table table-bordered table-striped table-light">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Karyawan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (is_level('captain')) : ?>
                <?php foreach ($list_user as $i => $ls) : ?>
                    <tr>
                        <td><?= ($i + 1) ?></td>
                        <td><?= $ls->nama ?></td>
                        <td>
                            <a href="<?= base_url('jobdesk/list_jobById/' . $ls->id_user) ?>" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Detail Kerjaan</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <!-- Tampilkan hanya user yang sedang login -->
                <?php
                ?>
                <tr>
                    <td>1</td>
                    <td><?= $this->session->nama ?></td>
                    <td>
                        <a href="<?= base_url('jobdesk/list_jobById/' . $this->session->id_user) ?>" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Detail Kerjaan</a>
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>