<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Berita</h4>
                    </div>
                </div>
        
        <!-- Form Ubah Struktur Organisasi -->
        <div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <h5>ID Gambar</h5>
                <input type="hidden" name="ig" value="<?php echo $struktur["id_gambar"]; ?>" class="form-control">
            </div>
            <div class="form-group">
                <h5>Gambar Struktur Organisasi</h5>
            <input type="file" name="nfp">
            </div>
            <!--
            Form untuk ubah gambar
            -->
            <div class="form-group">
                <br/>
                <button type="submit" name="tmbl" class="btn btn-success">
                    <span class="fa fa-save"></span> Simpan
                </button>
                 <a href="<?= base_url('dashboard/struktur'); ?>" style="color: white;">
                <button class="btn btn-info">
                    <span class="fa fa-ban"></span> Batal
                </button></a>
            </div>
        </form>
        </div>     