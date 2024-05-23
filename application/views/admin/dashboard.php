<div id="wrapper">
        <!-- navbar top -->
        <?php include APPPATH.'views/layout/menu_top.php';?>
        <!-- end navbar top -->

        <!-- navbar side -->
        <?php include APPPATH.'views/layout/menu_side.php';?>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard Page</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                        <h2>Welcome <?= $info; ?> Silahkan Mengelola Module Disamping!</h3>
                        <h3>Tanggal Akses : <?= date('D,d/m/Y H:i:s');?></h3>
                </div>
            </div>

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->