  <div id="page-wrapper">
    <?= $this->session->flashdata('pesan'); ?>
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Fasilitas</h4>
                    </div>
                </div>
        


        <!-- Tabel Fasilitas -->
        <table ng-hide="form" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr align="center" style="background-color: #4F4F4F; color: white;">
                    <th ng-click="order('id_fasilitas')" style="text-align: center; color: white;">ID Fasilitas</th>
                    <th ng-click="order('nama_fasilitas')" style="text-align: center; color: white;">Nama Fasilitas</th>
                    <th ng-click="order('isi_fasilitas')" style="text-align: center; color: white;">Isi Fasilitas</th>
                    <th ng-click="order('gambar')" style="text-align: center; color: white;">Gambar</th>
                    <th colspan="2" style="text-align: center; color: white;">Aksi</th>
                </tr>
            </thead>

            <p ng-hide="form">
                <a href="<?= base_url('dashboard/tambah_fasilitas'); ?>">
                    <button ng-click="add()" class=" btn btn-primary">
                        <span class="fa fa-plus"></span> Tambah Data
                    </button>
                </a>
            </p>

        <?php
            foreach ($fasilitas as $f) :
            ?>
                <tr style="background-color: white; color: black;">
                    <td align="center"><b><?php echo $f["id_fasilitas"]; ?></b></td>
                    <td align="center"><b><?php echo $f["nama_fasilitas"]; ?></b></td>
                    <td align="center"><b><?php echo $f["isi_fasilitas"]; ?></b></td>
                    <td align="center"><img src="<?php echo base_url('assets/gambars/fasilitas/').$f["gambar"]; ?>" width="30" height="30"> </td>
                    <td align="center">
                        <a href="<?= base_url('dashboard/ubah_fasilitas/').$f['id_fasilitas']; ?>"><button ng-click="edit" class="btn btn-info">
                            <span class="fa fa-edit"> Ubah</span>
                        </button></a>
                    </td>
                    <td align="center">
                         <a href="<?= base_url('dashboard/hapus_fasilitas/').$f['id_fasilitas']; ?>">
                        <button ng-click="delete" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                            <span class="fa fa-trash"> Hapus</span>
                        </button></a>
                </tr>
             <?php
            endforeach;  
        ?>
        </table>        