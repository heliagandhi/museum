<div id="page-wrapper">
    <?= $this->session->flashdata('pesan'); ?>
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Struktur Organisasi</h4>
                    </div>
                </div>
        
        <!-- Tabel Struktur Organisasi -->
        <table ng-hide="form" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr align="center" style="background-color: #4F4F4F; color: white;">
                    <th ng-click="order('id_gambar')" style="text-align: center; color: white;">ID Gambar</th>
                    <th style="text-align: center; color: white;">Gambar</th>
                    <th colspan="2" style="text-align: center; color: white;">Aksi</th>
                </tr>
            </thead>

            <p ng-hide="form">
                <a href="<?= base_url('dashboard/tambah_struktur'); ?>">
                    <button ng-click="add()" class=" btn btn-primary">
                        <span class="fa fa-plus"></span> Tambah Data
                    </button>
                </a>
            </p>

        <?php
            foreach ($struktur as $s) :
            ?>
                <tr style="background-color: white; color: black;">
                    <td align="center"><b><?php echo $s["id_gambar"]; ?></b></td>
                    <td align="center"><img src="<?php echo base_url('assets/gambars/struktur/').$s["gambar"]; ?>" width="30" height="30"> </td>
                    <td align="center">
                        <a href="<?= base_url('dashboard/ubah_struktur/').$s['id_gambar']; ?>"><button ng-click="edit" class="btn btn-info">
                            <span class="fa fa-edit"> Ubah</span>
                        </button></a>
                    </td>
                    <td align="center">
                         <a href="<?= base_url('dashboard/hapus_struktur/').$s['id_gambar']; ?>">
                        <button ng-click="delete" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                            <span class="fa fa-trash"> Hapus</span>
                        </button></a>
                </tr>
             <?php
            endforeach;  
        ?>
        </table>