<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Fasilitas</h4>
                    </div>
                </div>
        
        <!-- Form Ubah Fasilitas -->
        <div>
        <form action="" method="post" enctype="multipart/form-data">
            <!--<div class="form-group">
                <h5>Nama Fasilitas</h5>
                <input type="text" name="nf" value="<?php echo $fasilitas["nama_fasilitas"]; ?>" class="form-control">
            </div>
            -->
            <div class="form-group">
                <select name = "nf" class="form-control">
                        <option value = "Penginapan">Penginapan</option>
                        <option value = "RuangPertemuan">Ruang Pertemuan</option>
                        <option value = "Rooftop">Rooftop</option>
                        <option value = "Caffe">Caffe</option>
                        <option value = "RuangCinema">Ruang Cinema</option>
                        <option value = "Musolah">Musolah</option>
                        <option selected>....</option>
                </select>
            </div>
             <div class="form-group">
                <h5>Isi Fasilitas</h5>
                <input type="text" name="if" value="<?php echo $fasilitas["isi_fasilitas"]; ?>" class="form-control">
            </div>
            <div class="form-group">
                <h5>Gambar Struktur Organisasi</h5>
            <input type="file" name="nfp">
            </div>
            <div class="form-group">
                <br/>
                <button type="submit" name="tmbl" class="btn btn-success">
                    <span class="fa fa-save"></span> Simpan
                </button>
                <a href="<?= base_url('dashboard/fasilitas'); ?>" style="color: white;">
                <button class="btn btn-info">
                    <span class="fa fa-ban"></span> Batal
                </button></a>
            </div>
        </form>
        </div>     