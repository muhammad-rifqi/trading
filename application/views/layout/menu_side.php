<nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="<?= base_url();?>/assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div>Jonny <strong>Deen</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="active">
                        <a href="<?= base_url('admin/dashboard');?>"> <i class="fa fa-dashboard fa-fw"></i> Dashboard </a>
                    </li>
                    <li>
                        <a href="#"> <i class="fa fa-table fa-fw"></i> Master <span class="fa arrow"> </span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?= base_url('admin/gudang');?>">Gudang</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/kelompok_barang');?>">Kelompok Barang</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/barang');?>">Gudang</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/supplier');?>">Kelompok Barang</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/pelanggan');?>">Gudang</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/type_bayar');?>">Kelompok Barang</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    
                    <li>
                        <a href="#"> <i class="fa fa-wrench fa-fw"></i> Inventory <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?= base_url('admin/stock_location');?>">Stock Location</a>
                            </li>
                            <li>
                                <a href="#">Stock Management <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="<?= base_url('admin/item_management');?>">Item Management</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('admin/item_group');?>">Item Group</a>
                                    </li>
                                </ul>
                                <!-- third-level-items -->
                            </li>
                            <li>
                                <a href="<?= base_url('admin/stock_transfer');?>">Stock Transfer</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>