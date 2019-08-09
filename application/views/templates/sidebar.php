        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                   <i class="fas fa-truck-moving"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> Trajek <sup>Line</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider ">

            <!-- QUERY MENU-->
            <?php
            $id_jabatan = $this->session->userdata('id_jabatan');
            $queryMenu = " SELECT tb_user_menu.id, menu FROM tb_user_menu JOIN tb_user_access_menu 
            ON tb_user_menu.id = tb_user_access_menu.menu_id WHERE tb_user_access_menu.id_jabatan = $id_jabatan
            ORDER BY tb_user_access_menu.menu_id ASC";

            $menu = $this->db->query($queryMenu)->result_array();
            ?>
            <!-- Looping Menu -->
            <?php foreach ($menu as $m) : ?>
                <div class="sidebar-heading">
                    <?= $m['menu']; ?>
                </div>
                <!-- Siapkan Sub-Menu Sesuai Menu -->
                <?php
                $menuId = $m['id'];
                $querySubMenu = "SELECT * FROM tb_user_sub_menu JOIN tb_user_menu ON tb_user_sub_menu.menu_id = tb_user_menu.id
                WHERE tb_user_sub_menu.menu_id = $menuId AND tb_user_sub_menu.aktif = 1";
                $subMenu = $this->db->query($querySubMenu)->result_array();
                ?>
                <?php foreach ($subMenu as $sm) : ?>
                    <?php if ($title == $sm['judul']) : ?>
                        <li class="nav-item active">
                        <?php else : ?>
                        <li class="nav-item">
                        <?php endif; ?>
                        <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                            <i class="<?= $sm['icon']; ?>"></i>
                            <span><?= $sm['judul']; ?></span></a>
                    </li>
                <?php endforeach; ?>

                <!-- Divider -->
                <hr class="sidebar-divider mt-3">

            <?php endforeach; ?>

            <!-- Nav Item - Logout -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->