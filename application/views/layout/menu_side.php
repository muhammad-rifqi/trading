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
                                <div>User : <?= $info; ?></div>
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
                                <a href="<?= base_url('admin/barang');?>">Barang</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/supplier');?>">Supplier</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/pelanggan');?>">Pelanggan</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/type_bayar');?>">Kelompok Type Bayar</a>
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
                    <li>
                        <a href="#"> <i class="fa fa-table fa-fw"></i> Pembelian <span class="fa arrow"> </span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?= base_url('admin/suplier');?>">Master Supplier</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/kelompok_supplier');?>">Kelompok Supplier</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/faktur_pembelian');?>">Faktur Pembelian</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/return_pembelian');?>">Return Pembelian</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"> <i class="fa fa-table fa-fw"></i> Penjualan <span class="fa arrow"> </span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?= base_url('admin/kelompok_pelanggan');?>">Kelompok Pelanggan</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/kelompok_supplier');?>">Master Salesmen</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/faktur_penjualan');?>">Faktur Penjualan</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/return_penjualan');?>">Return Penjualan</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"> <i class="fa fa-table fa-fw"></i> Keuangan <span class="fa arrow"> </span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?= base_url('admin/type_pembayaran');?>">Type Pembayaran</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/pembayaran_hutang');?>">Pembayaran Hutang</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/nota_debet');?>">Nota Debet</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/penerima_piutang');?>">Penerima Piutang</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/nota_kredit');?>">Nota Kredit</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"> <i class="fa fa-table fa-fw"></i> Utility <span class="fa arrow"> </span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?= base_url('admin/saldo_awal');?>">Saldo Awal</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/persediaan_barang');?>">Persediaan Barang</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/hutang_dagang');?>">Hutang Dagang</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/piutang_dagang');?>">Piutang Dagang</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/setting_password');?>">Setting Password</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/tutup_periode');?>">Tutup Periode</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/ganti_periode');?>">Ganti Periode</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/reindex_file');?>">Reindex File</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/hitung_ulang');?>">Hitung Ulang</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/tracking');?>">Tracking S.N</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/hpp');?>">HPP</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/validasi_data');?>">Validasi Data</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/backup');?>">Backup/Restore</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>