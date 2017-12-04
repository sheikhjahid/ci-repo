<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DataTables | Gentelella</title>
    
    <style>

    input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

    .wrapper{
  text-align: left;
}
.btn-default
{
  top: 90%;
  left:80%;
  position:absolute;

}

  </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap -->

    <link href="<?php echo base_url('/'); ?>public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('/'); ?>public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('/'); ?>public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('/'); ?>public/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url('/'); ?>public/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/'); ?>public/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/'); ?>public/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/'); ?>public/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/'); ?>public/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('/'); ?>public/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php
            require_once 'layout/left-bar.php';
            require_once 'layout/top-bar.php';
            
        ?>

        <!-- top navigation -->
       

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                
              </div>

              
            </div>
            <div class="clearfix"></div>
            <h2>REGISTRATION TABLE<small><!-- /.php code -->   </small></h2>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>INSERT DATA : <small>ADMIN</small></h2>
                  </br>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                 
                  
                 <!--  <?php //foreach($specific_data as $value){ ?> -->
                  <form action="<?php echo base_url('jc/insert_action_data');?>" method="POST">
                  <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i>FIRST NAME</i></span>
                  <input type="text" class="form-control" placeholder="Enter yourr firstname.."  name= "firstname" aria-describedby="basic-addon1"   >
                  </div>

                  <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i>LAST NAME</i></span>
                  <input type="text" class="form-control" placeholder="Enter your lastname.."  name= "lastname" aria-describedby="basic-addon1"   >
                  </div>


                  <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i>PHONE</i></span>
                  <input type="text" class="form-control" placeholder="Enter your phone number.."  name= "phone" aria-describedby="basic-addon1"  >
                  </div>
                  <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i>EMAIL</i></span>
                  <input type="text" class="form-control" placeholder="change your email.."  name= "email" aria-describedby="basic-addon1"  >
                  </div>

                  <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i>ADDRESS</i></span>
                  <input type="text" class="form-control" placeholder="Enter your address.."  name= "address" aria-describedby="basic-addon1"  >
                  </div>
                  
                  <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i>USERNAME</i></span>
                  <input type="text" class="form-control" placeholder="Enter your username.."  name= "username" aria-describedby="basic-addon1"  >
                  </div>

                 <div class="input-group">
                 <span class="input-group-addon" id="basic-addon1"><i>PASSWORD</i></span>
                 <input type="password" class="form-control"  placeholder="Enter your password.."  name= "password" aria-describedby="basic-addon1"></center>
              </div>
              <div>
                <div class="wrapper">
              <input type="submit"  class="btn btn-default" >
            </div>
              </div>
            </br>
          </br>
             
            <div>
            </div>
          
            </div>
          </div>
         
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('/'); ?>public/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('/'); ?>public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('/'); ?>public/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('/'); ?>public/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('/'); ?>public/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url('/'); ?>public/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('/'); ?>public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url('/'); ?>public/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url('/'); ?>public/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url('/'); ?>public/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url('/'); ?>public/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url('/'); ?>public/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url('/'); ?>public/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url('/'); ?>public/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url('/'); ?>public/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url('/'); ?>public/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url('/'); ?>public/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url('/'); ?>public/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url('/'); ?>public/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url('/'); ?>public/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('/'); ?>public/build/js/custom.min.js"></script>

  </body>
</html>