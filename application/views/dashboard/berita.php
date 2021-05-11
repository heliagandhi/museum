<div id="page-wrapper">
    <?= $this->session->flashdata('pesan'); ?>
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Berita</h4>
                    </div>
                </div>
        


        <!-- Tabel Berita -->
        <table ng-hide="form" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr align="center" style="background-color: #4F4F4F; color: white;">
                    <th ng-click="order('id_berita')" style="text-align: center; color: white;">ID Berita</th>
                    <th ng-click="order('jdl_berita')" style="text-align: center; color: white;">Judul Berita</th>
                    <th ng-click="order('tgl_berita')" style="text-align: center; color: white;">Tanggal Berita</th>
                    <th ng-click="order('isi_berita')" style="text-align: center; color: white;">Isi Berita</th>
                    <th ng-click="order('gambar')"style="text-align: center; color: white;">Gambar</th>
                    <th colspan="3" style="text-align: center; color: white;">Aksi</th>
                </tr>
            </thead>

            <p ng-hide="form">
                <a href="<?= base_url('dashboard/tambah_berita'); ?>">
                    <button ng-click="add()" class=" btn btn-primary">
                        <span class="fa fa-plus"></span> Tambah Data
                    </button>
                </a>
            </p>

        <?php
            foreach ($berita as $b):
                $tanggal = $b["tgl_berita"];
                $potong_berita = $b["isi_berita"];
                $potong = substr($potong_berita, 0, 20);
            ?>
                <tr style="background-color: white; color: black;">
                    <td align="center"><b><?php echo $b["id_berita"]; ?></b></td>
                    <td align="center"><b><?php echo $b["jdl_berita"]; ?></b></td>
                    <td align="center"><b><?php echo date("d/F/Y", strtotime($tanggal));  ?></b></td>
                    <td align="center"><b><?php echo $potong ?></b></td>
                    <td align="center"><img src="<?php echo base_url('assets/gambars/berita/').$b["gambar"]; ?>" width="30" height="30"> </td>
                    <td align="center">
                        <a href="<?= base_url('dashboard/ubah_berita/').$b['id_berita']; ?>"><button ng-click="edit" class="btn btn-info">
                            <span class="fa fa-edit"></span> Ubah
                        </button></a>
                    </td>
                    <td align="center">
                        <a href="<?= base_url('dashboard/hapus_berita/').$b['id_berita']; ?>"><button ng-click="delete" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                            <span class="fa fa-trash"></span> Hapus
                        </button></a>
                </tr>
             <?php
            endforeach;   
        ?>
        </table> 