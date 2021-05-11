<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Pesan</h4>
                    </div>
                </div>
        


        <!-- Tabel Pesan -->
        <table ng-hide="form" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr align="center" style="background-color: #4F4F4F; color: white;">
                    <th ng-click="order('nama')" style="text-align: center; color: white;">Nama</th>
                    <th ng-click="order('email')" style="text-align: center; color: white;">Email</th>
                    <th ng-click="order('isi')" style="text-align: center; color: white;">Isi Pesan</th>
                </tr>
            </thead>

        <?php
           foreach ($pesan as $p):
            ?>
                <tr style="background-color: white; color: black;">
                    <td align="center"><b><?php echo $p["nama"]; ?></b></td>
                    <td align="center"><b><?php echo $p["email"]; ?></b></td>
                    <td align="center"><b><?php echo $p["isi"]; ?></b></td>
                </tr>
             <?php
            endforeach;  
        ?>
        </table>     