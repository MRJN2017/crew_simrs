<div class="row">
    <h2 class="mb-4">List Kerjaan</h2>

</div>
<div class="jumbotron bg-dark text-white">
    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">List Kerjaan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Keunit pks</td>
                <td>
                    <a href="<?= base_url('') ?>" class="btn btn-success btn-sm  ml-2""><i class=" fa fa-pencil-square-o "></i> Edit</a>
                    <a href=" <?= base_url('') ?>" class="btn btn-danger btn-sm btn-delete ml-2" onclick="return false"><i class="fa fa-trash"></i> Selesai</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>