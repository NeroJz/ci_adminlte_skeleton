<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome | StarHub</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/dist/css/bootstrap.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/css/AdminLTE.css') ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url('assets/css/skins/_all-skins.min.css'); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/plugins/iCheck/flat/blue.css'); ?>">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/plugins/morris/morris.css'); ?>">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/plugins/datepicker/datepicker3.css'); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/plugins/daterangepicker/daterangepicker.css'); ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet"
          href="<?= base_url('assets/vendor/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">
    <link rel="stylesheet"
          href="<?= base_url('assets/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
    <link rel="stylesheet"
          href="<?= base_url('assets/css/starhub.css') ?>">
</head>

<body class="hold-transition login-page">

<div class="wrapper">

    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>CI</b>AdminLTE</a>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Connecting Tones Push Notification Centre</p>

            <?php if (isset($message)): ?>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 align="center" style="margin-top: 0px">Errors <i class="fa fa-warning"></i></h3>
                        <?php echo $message; ?>
                    </div>

                </div>
            <?php endif; ?>

            <?php echo form_open("auth/login"); ?>

            <div class="form-group has-feedback">
                <?php echo form_input($identity); ?>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <?php echo form_input($password); ?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <?php echo form_submit('submit', lang('login_submit_btn'),
                        array('class' => 'btn btn-primary btn-block btn-flat')); ?>
                </div>
            </div>

            <?php echo form_close(); ?>

<!--            <p><a href="forgot_password">--><?php //echo lang('login_forgot_password'); ?><!--</a></p>-->
        </div>
    </div>
</div>
</body>