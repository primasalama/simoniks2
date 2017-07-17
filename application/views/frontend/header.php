
<!DOCTYPE html>
<html>
  <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/maritim.png">
        <title>SIMONIKS :: <?php echo $this->uri->segment(1);?></title>
        
        <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>assets/css/datepicker.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/demo_table_jui.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.dataTables.min.css">
        <!-- Material Datetimepicker -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-material-datetimepicker.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/lightbox.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/daterangepicker.css" />
        <style type="text/css">

        </style>
        <!-- Include Date Range Picker -->


        <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/moment.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url();?>assets/js/dataTables.rowsGroup.js"></script>
        <script src="<?php echo base_url();?>assets/js/lightbox.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/daterangepicker.js"></script>
        
        <!-- Js buat datepicker -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/material.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-material-datetimepicker.js"></script>
      <script type="text/javascript">
            $(document).ready(function() {
              $('#kebijakan').DataTable();
          } );
</script>
</script>
        
    </head>
    <body>
    <div align="center" class="jumbotron" style="margin-bottom: 0;"><img src="<?php echo base_url();?>assets/img/banner.jpg" width="100%">
                    <div class="col-md-3">
                    </div>
      <nav class="navbar navbar-inverse" role="navigation" style="margin-bottom: 0;">
          <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav" style="margin-left:150px;">
                        <li>
                            <a href="<?php echo base_url();?>" class="btn btn-danger navbar-btn">BERANDA</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>Beranda/view/asdep1" class="btn btn-danger navbar-btn">ASDEP 1</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>Beranda/view/asdep2" class="btn btn-danger navbar-btn">ASDEP 2</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>Beranda/view/asdep3" class="btn btn-danger navbar-btn">ASDEP 3</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>Beranda/view/asdep4" class="btn btn-danger navbar-btn">ASDEP 4</a>
                        </li>
                        <?php 
                        if ($this->session->userdata('session')) {
                        ?>
                            <li>
                                <a href="<?php echo base_url();?>Auth/logout" class="btn btn-danger navbar-btn">LOGOUT</a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        
                </div>
            </div>
        </div>