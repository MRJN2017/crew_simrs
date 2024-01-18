<div class="row">
    <h2 class="mb-4">Patroli Harian</h2>
</div>

<div class="jumbotron bg-dark text-white">
    <form action="<?= base_url('patroli/store') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="tgl">Tanggal</label>
            <input type="date" class="form-control" id="tgl" name="tgl">
        </div>

        <div class="form-group">
            <label for="poli">Unit Poli</label><br>

            <input type="checkbox" name="poli[]" id="poli[]" value="Display" />
            <label for="contact_email">Display</label>

            <input type="checkbox" name="poli[]" id="poli[]" value="Speaker" />
            <label for="contact_phone">Speaker</label>

            <div>
                <textarea id="ket_poli" name="ket_poli" style="height: 100px; width: 800px;" placeholder="Keterangan apabila terjadi masalah pada unit Loket"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="loket">Unit Loket</label><br>
            <input type="checkbox" name="loket[]" value="Display"> Display <br /> 
            <input type="checkbox" name="loket[]" value="Speaker"> Speaker <br />
            <input type="checkbox" name="loket[]" value="Minipc"> Mini PC <br />
            <input type="checkbox" name="loket[]" value="Kesehatan CPU"> Kesehatan CPU <br />

            <div>
                <textarea id="ket_loket" name="ket_loket" style="height: 100px; width: 800px;" placeholder="Keterangan apabila terjadi masalah pada unit Loket"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="igd">Unit IGD</label><br>
            <input type="checkbox" name="igd[]" value="Display"> Display <br />
            <input type="checkbox" name="igd[]" value="Speaker"> Speaker <br />
            <input type="checkbox" name="igd[]" value="Donggle HDMI"> Donggle HDMI <br />
            <input type="checkbox" name="igd[]" value="Kesehatan CPU"> Kesehatan CPU <br />
            <div>
                <textarea id="ket_igd" name="ket_igd" style="height: 100px; width: 800px;" placeholder="Keterangan apabila terjadi masalah pada unit IGD"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="josep1">Unit Kamar Operasi</label><br>
            <input type="checkbox" name="josep1[]" value="Display"> Display Kamar Operasi <br />
            <input type="checkbox" name="josep1[]" value="Network"> Network <br />
            <input type="checkbox" name="josep1[]" value="Kesehatan CPU"> Kesehatan CPU (On/Off)<br />
            <div>
                <textarea id="ket_josep1" name="ket_josep1" style="height: 100px; width: 800px;" placeholder="Keterangan apabila terjadi masalah pada unit Kamar Operasi"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="farmasi">Unit Farmasi</label><br>
            <input type="checkbox" name="farmasi[]" value="Display"> Display <br />
            <input type="checkbox" name="farmasi[]" value="Info Kamar"> Keselarasan Informasi Kamar <br />
            <input type="checkbox" name="farmasi[]" value="Network"> Network <br />
            <input type="checkbox" name="farmasi[]" value="Kabel LAN"> Kabel LAN <br />
            <div>
                <!-- <select class="form-control" name="ket_farmasi" id="ket_farmasi">
                    <option value="">--- Choose a Issue ---</option>
                    <option value="Rusak">Rusak</option>
                    <option value="Perlu Tindankan">Perlu Tindankan</option>
                    <option value="Ganti Baru">Ganti Baru</option>
                </select> -->
                <textarea id="ket_farmasi" name="ket_farmasi" style="height: 100px; width: 800px;" placeholder="Keterangan apabila terjadi masalah pada unit Farmasi"></textarea>
            </div>
        </div>

        <div class="card-footer">
            <center>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Simpan Hasil Patroli</i> </button>
            </center>
        </div>
    </form>
</div>