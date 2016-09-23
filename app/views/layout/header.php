<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $this->pageTitle;?></title>

    <link href="<?= base_url('public_html/css/bootstrap.min.css');?>" rel="stylesheet">

    <link href="<?= base_url('public_html/css/modern-business.css');?>" rel="stylesheet">

    <link href="<?= base_url('public_html/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

    <link href="<?= base_url('public_html/datatables/dataTables.bootstrap.css');?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php if($this->uri->segment(2) == 'login' || $this->uri->segment(2) == 'reset'){?>
<?php } else{?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url();?>">Result Verification System</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?= base_url();?>">Home</a>
                    </li>
                    <?php if($this->aauth->is_loggedin()){?>
                    <?php if($this->aauth->is_member('Admin')){?>
                    <?php }?>
                    <li><a href="<?= base_url('result/index');?>"> Result Database</a></li>
                    <li><a href="<?= base_url('accounts/logout');?>"> Signout</a></li>
                    <?php }else{?>
                    <li>
                        <a href="<?= base_url('application/create');?>">Application</a>
                    </li>
                    <li>
                        <a href="<?= base_url('index/login');?>">Login</a>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>
<?php }?>