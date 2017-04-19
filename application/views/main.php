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
    <!-- Time Picker -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/plugins/timepicker/bootstrap-timepicker.css'); ?>">
    <!-- Select 2 -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/plugins/select2/select2.min.css'); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/plugins/daterangepicker/daterangepicker.css'); ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet"
          href="<?= base_url('assets/vendor/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">
    <link rel="stylesheet"
        href="<?= base_url('assets/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
    <link rel="stylesheet"
        href="<?= base_url('assets/css/starhub.css')?>">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php $this->load->view('includes/header'); ?>

    <?php $this->load->view('includes/sidebar'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                CI AdminLTE Skeleton
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>  <?= (isset($title)) ? $title : '' ?></a></li>
                <li class="active"><?= (isset($breadcrumb)) ? $breadcrumb : '' ?></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <?php if($this->session->flashdata()): ?>
                <div class="row>">
                    <div class="alert <?= $this->session->flashdata('msg_type'); ?> alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong align="center"><?= $this->session->flashdata('msg'); ?></strong>
                    </div>
                </div>
            <?php endif; ?>
            <?php
                if(isset($content)){
                    echo $content;
                }
            ?>
        </section>
        <!-- /.content -->
    </div>
    <?php $this->load->view('includes/footer'); ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?= base_url('assets/vendor/jquery/dist/jquery.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/vendor/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- timepicker -->
<!-- datepicker -->
<script src="<?= base_url('assets/vendor/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/plugins/timepicker/bootstrap-timepicker.js'); ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url('assets/vendor/bootstrap/dist/js/bootstrap.js'); ?>"></script>
<!-- Select 2 -->
<script src="<?= base_url('assets/vendor/plugins/select2/select2.full.min.js') ?>"></script>
<!-- Morris.js charts -->
<script src="<?= base_url('assets/js/raphael-min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/plugins/morris/morris.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/vendor/plugins/sparkline/jquery.sparkline.min.js'); ?>"></script>
<!-- jvectormap -->
<script src="<?= base_url('assets/vendor/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/vendor/plugins/knob/jquery.knob.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/js/moment.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url('assets/vendor/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
<!-- Slimscroll -->
<script src="<?= base_url('assets/vendor/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/vendor/plugins/fastclick/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/js/app.min.js'); ?>"></script>

<script src="<?= base_url('assets/vendor/datatables.net/js/jquery.dataTables.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/datatables.net-bs/js/dataTables.bootstrap.js'); ?>"></script>

<script src="<?= base_url('assets/js/ajaxfileupload.js'); ?>"></script>

<script>
    //JS Global variable
    var base_url = '<?= base_url() ?>';
</script>

<?php if(isset($scripts)): ?>
    <?php foreach($scripts as $js): ?>
        <script src="<?= base_url('assets/js/' . $js . '.js') ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>
