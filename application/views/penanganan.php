<div class="container">
    <div class="row">
        <h2 class="mb-4">Form Penanganan</h2>
    </div>

    <div class="jumbotron bg-dark text-white">
        <form action="<?= base_url('jobdesk/save_report') ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="tgl">Tanggal</label>
                <input type="datetime-local" class="form-control" id="tgl" name="tgl">
            </div>

            <div class="form-group">
                <label for="name_divisi">Pilih Unit</label>
                <select class="form-control" name="name_divisi" id="name_divisi">
                    <option value="">--- Pilih divisi ---</option>
                    <?php foreach ($divisi as $div) : ?>
                        <option value="<?= $div->id_divisi; ?>"><?= $div->nama_divisi; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="nama_pelapor">Nama Pelapor</label>
                <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor">
            </div>

            <div class="form-group">
                <label for="ket">Masukan kendala yang dilaporkan</label>
                <textarea id="ket" name="ket" class="form-control" style="height: 100px;" placeholder="Keterangan apabila terjadi masalah"></textarea>
            </div>

            <div class="card-footer">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
