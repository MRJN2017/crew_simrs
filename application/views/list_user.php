<div class="row">
    <h2 class="mb-4">List Karyawan</h2>

</div>
<div class="d-inline ml-auto float-left">
    <span class="text-white"> => Silakan menambahkan Kerjaan baru anda kemudian lihat pada list karyawan dibawah ini sesuai nama anda</span>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>
    <!-- <div class="d-inline ml-auto float-left">
        <a href="#" class="btn btn-success btn-sm btn-add-divisi" data-toggle="modal" data-target="#modal-add-divisi"><i class="fa fa-plus"></i> Tambah Kerjaan</a>
    </div> -->
    <br>
</div>
<?php if (is_level('captain')) : ?>
    <!-- <div class="d-inline ml-auto float-left" <?= @$_active ?>>
        <br>
        <a href="#" class="btn btn-success btn-sm btn-add-divisi" data-toggle="modal" data-target="#modal-add-divisi"><i class="fa fa-plus"></i> Tambah Kerjaan untuk crew</a>
    </div> -->
<?php endif; ?>

<div class="jumbotron bg-dark text-white">
    <br>
    <br>
    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Karyawan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Paskalis</td>
                <td>
                    <a href="<?= base_url('jobdesk/list_job') ?>" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Detail Kerjaan</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Irene</td>
                <td>
                    <a href="<?= base_url('jobdesk/list_job') ?>" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Detail Kerjaan</a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Marthinus</td>
                <td>
                    <a href="<?= base_url('jobdesk/list_job') ?>" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Detail Kerjaan</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- <div class="modal fade" id="modal-add-divisi" tabindex="-1" role="dialog" aria-labelledby="modal-add-divisi-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-light">
            <form id="form-add-divisi" action="<?= base_url('jobdesk/store') ?>" method="post" onsubmit="return false">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-add-divisi-label">Tambah Kerjaan Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-dark">
                    <div class="form-group">
                        <label for="nama-divisi" class="text-white">Kerjaan :</label>
                        <input type="text" name="nama_divisi" id="nama-divisi" class="form-control" placeholder="Nama Divisi" required="reuired" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div> -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('jobdesk/store') ?>" method="post">
                    <div class="form-group">
                        <!-- <label for="kerja">Masukan Kerjaan :</label> -->
                        <input type="text" name="kerja" id="kerja" class="form-control" placeholder="Nama Kerjaan" required="reuired" />
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>