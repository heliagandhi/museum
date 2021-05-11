
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <?php if(isset($active_dashboard)): ?>
                            <a href="<?= base_url('dashboard/index'); ?>" class="waves-effect active"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                        <?php else: ?>
                            <a href="<?= base_url('dashboard/index'); ?>" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                        <?php endif; ?>
                    </li>
                    
                    <li>
                        <?php if(isset($active_berita)): ?>
                            <a href="<?= base_url('dashboard/berita'); ?>" class="waves-effect active"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Berita</a>
                        <?php else: ?>
                            <a href="<?= base_url('dashboard/berita'); ?>" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Berita</a>
                        <?php endif; ?>
                    </li>
                    <li>
                        <?php if(isset($active_event)): ?>
                            <a href="<?= base_url('dashboard/event'); ?>" class="waves-effect active"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Event</a>
                        <?php else: ?>
                            <a href="<?= base_url('dashboard/event'); ?>" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Event</a>
                        <?php endif; ?>
                    </li>
                    <li>
                        <?php if(isset($active_fasilitas)): ?>
                            <a href="<?= base_url('dashboard/fasilitas'); ?>" class="waves-effect active"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Fasilitas</a>
                        <?php else: ?>
                            <a href="<?= base_url('dashboard/fasilitas'); ?>" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Fasilitas</a>
                        <?php endif; ?>
                    </li>
                    <li>
                        <?php if(isset($active_struktur)): ?>
                            <a href="<?= base_url('dashboard/struktur'); ?>" class="waves-effect active"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Struktur Organisasi</a>
                        <?php else: ?>
                            <a href="<?= base_url('dashboard/struktur'); ?>" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Struktur Organisasi</a>
                        <?php endif; ?>
                    </li>
                    <li>
                        <?php if(isset($active_pesan)): ?>
                            <a href="<?= base_url('dashboard/pesan'); ?>" class="waves-effect active"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Pesan</a>
                        <?php else: ?>
                            <a href="<?= base_url('dashboard/pesan'); ?>" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Pesan</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->