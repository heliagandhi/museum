<!-- <?php foreach ($event as $e) ?> -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Event</h4>
                    </div>
                </div>
  
        
        <!-- Form Ubah Event -->
        <div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <h5>Judul Event</h5>
                <input type="text" name="jb" value="<?php echo $event["nama_event"]; ?>" class="form-control">
            </div>
            <div class="form-group">
                <h5>Tanggal Event</h5>
                <input type="date" name="tgl" value="<?php echo $event["tanggal"] ?>" class="form-control">
            </div>
            <div class="form-group">
                <h5>Isi Event</h5>
                <textarea name="isi" id="editor"><?php echo $event["isi_event"] ?>
                </textarea>
            </div>
            <div class="form-group">
                <h5>Gambar</h5>
                <input type="file" name="nfp" class="form-control">
            </div>
            
            <!--<tr style="background-color: white; color: black;">
                <td>
                    <img src="<?php echo base_url('assets/gambars/events/').$e["gambar"]; ?>" width="30" height="30"> 
                </td>
            </tr>
            -->
            <!--
            Form untuk ubah gambar
            -->
            <div class="form-group">
                <br/>
                <button type="submit" name="tmbl" class="btn btn-success">
                    <span class="fa fa-save"></span> Simpan
                </button>
                <a href="<?= base_url('dashboard/event'); ?>" style="color: white;">
            <button class="btn btn-info">
                <span class="fa fa-ban"></span> Batal
            </button></a>
            </div>
        </form>
        
        </div> 