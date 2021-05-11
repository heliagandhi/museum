<div id="page-wrapper">
    <?= $this->session->flashdata('pesan'); ?>
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Event</h4>
                    </div>
                </div>
        
        <!-- Tabel Event -->
        <table ng-hide="form" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr align="center" style="background-color: #4F4F4F; color: white;">
                    <th ng-click="order('id')" style="text-align: center; color: white;">ID Event</th>
                    <th ng-click="order('nama_event')" style="text-align: center; color: white;">Judul Event</th>
                    <th ng-click="order('tanggal')" style="text-align: center; color: white;">Tanggal Event</th>
                    <th ng-click="order('isi_event')" style="text-align: center; color: white;">Isi Event</th>
                    <th ng-click="order('gambar')"style="text-align: center; color: white;">Gambar</th>
                    <!--<th ng-click="order('tgl_event')" style="text-align: center; color: white;">Gambar</th>-->
                    <th colspan="2" style="text-align: center; color: white;">Aksi</th>
                </tr>
            </thead>

            <p ng-hide="form">
                <a href="<?= base_url('dashboard/tambah_event'); ?>">
                    <button ng-click="add()" class=" btn btn-primary">
                        <span class="fa fa-plus"></span> Tambah Data
                    </button>
                </a>
            </p>
            <?php foreach ($event as $e): 
                $tanggal1 = $e["tanggal"];
                $potong_berita = $e["isi_event"];
                $potong = substr($potong_berita, 0, 20);
            ?>
        
                <tr style="background-color: white; color: black;">
                    <td align="center"><b><?php echo $e["id"]; ?></b></td>
                    <td align="center"><b><?php echo $e["nama_event"]; ?></b></td>
                    <td align="center"><b><?php echo date("d/F/Y", strtotime($tanggal1)); ?></b></td>
                    <td align="center"><b><?php echo $potong; ?></b></td>
                    <td align="center"><img src="<?php echo base_url('assets/gambars/events/').$e["gambar"]; ?>" width="30" height="30"> </td>
                    <td align="center">
                        <a href="<?= base_url('dashboard/ubah_event/').$e['id']; ?>"><button ng-click="edit" class="btn btn-info">
                            <span class="fa fa-edit"> Ubah</span>
                        </button></a>
                    </td>
                    <td align="center">
                        <a href="<?= base_url('dashboard/hapus_event/').$e['id']; ?>">
                        <button ng-click="delete" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                            <span class="fa fa-trash"> Hapus</span>
                        </button></a>
                </tr>
            <?php endforeach; ?>
        </table>        