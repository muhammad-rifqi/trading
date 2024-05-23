<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator :: Trading</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?= base_url();?>/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?= base_url();?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?= base_url();?>/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="<?= base_url();?>/assets/css/style.css" rel="stylesheet" />
      <link href="<?= base_url();?>/assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="<?= base_url();?>/assets/img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?= $this->session->flashdata('message');?>
                        <form role="form" method="POST" action="<?= base_url('admin/login')?>">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="User-ID" name="user_id" type="user_id" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="<?= base_url();?>/assets/plugins/jquery-1.10.2.js"></script>
    <script src="<?= base_url();?>/assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url();?>/assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
