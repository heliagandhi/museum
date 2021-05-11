<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Berita</h4>
                    </div>
                </div>
        
        <!-- Form Tambah Berita -->
        <div> 
        <form method="post" action="" nameclass="jumbotron" enctype="multipart/form-data">
        <div class="form-group">
            <h5>Judul Berita</h5>
            <input type="text" name="jb" class="form-control">
        </div>
        <div class="form-group">
            <h5>Tanggal Berita</h5>
            <input type="date" name="tgl" class="form-control">
        </div>
        <div class="form-group">
            <h5>Isi Berita</h5>
            <textarea name="isi" id="editor"></textarea>
        </div>
        <div class="form-group">
            <h5>Gambar</h5>
            <input type="File" name="nfp">
        </div>
        <div class="form-group">
                <!--<input type="submit" name="tmbl" value="SIMPAN">-->
            <button type="submit" name="tmbl" class="btn btn-success">
                <span class="fa fa-save"></span> Simpan
            </button>
            <a href="<?= base_url('dashboard/berita'); ?>" style="color: white;">
            <button class="btn btn-info">
                <span class="fa fa-ban"></span> Batal
            </button></a>
        </div>   
        </form>   