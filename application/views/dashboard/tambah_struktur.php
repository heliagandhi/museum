<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Event</h4>
                    </div>
                </div>
        
        <!-- Form Tambah Struktur Organisasi -->
        <div> 
        <form method="post" action="" nameclass="jumbotron" enctype="multipart/form-data">
        <div class="form-group">
            <h5>Nama Gambar</h5>
            <input type="text" name="ng" class="form-control">
        </div>
        <div class="form-group">
            <h5>Gambar Struktur Organisasi</h5>
            <input type="File" name="nfp"><p/>
        </div>
        <div class="form-group">
                <!--<input type="submit" name="tmbl" value="SIMPAN">-->
            <button type="submit" name="tmbl" class="btn btn-success">
                <span class="fa fa-save"></span> Simpan
            </button>
            <a href="<?= base_url('dashboard/struktur'); ?>" style="color: white;">
            <button class="btn btn-info">
                <span class="fa fa-ban"></span> Batal
            </button></a>
        </div>