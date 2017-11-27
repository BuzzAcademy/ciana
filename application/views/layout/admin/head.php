<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="/public/vendors/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/public/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/public/vendors/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="/public/vendors/admin-lte/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="/public/vendors/admin-lte/dist/css/skins/skin-blue.min.css">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<?php if (isset($more_styles)) :?>
<?php   foreach($more_styles as $style): ?>
  <link rel="stylesheet" href="<?= $style ?>">
<?php   endforeach; ?>
<?php endif; ?>
<?php $this->load->view('layout/admin/tracking'); ?>
</head>
