<div class="row">
    <h2 class="mb-4">Form Penanganan</h2>
</div>

<div class="jumbotron bg-dark text-white">
    <form action="<?= base_url('patroli/report') ?>" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="tgl">Tanggal</label>
            <input type="datetime-local" class="form-control" id="tgl" name="tgl">
        </div>

        <div class="form-group">
            <label for="unit">Pilih Unit</label>
            <div>
                <select class="form-control" name="name_divisi" id="name_divisi">
                    <option value="">--- Pilih divisi ---</option>
                    <?php foreach ($divisi as $div) : ?>
                        <option value="<?php echo $div->id_divisi; ?>"><?php echo $div->nama_divisi; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="from-control">
            <label for="tgl">Nama Pelapor</label>
            <div>
                <input type="text" class="form-control">
            </div>

        </div>


        <div class="form-group">
            <label for="tgl">Masukan kendala yang dilaporkan</label>

            <div>
                <textarea id="ket_loket" name="ket_loket" style="height: 100px; width: 800px;" placeholder="Keterangan apabila terjadi masalah"></textarea>
            </div>
        </div>

        <div class="card-footer">
            <center>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Simpan Hasil Patroli</i> </button>
            </center>
        </div>
    </form>
</div>