<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->

  <title>Arkademy B15K4</title>
  <!-- Custom CSS -->
  <link href="<?php echo base_url ("assets/assets/libs/flot/css/float-chart.css")?>" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="<?php echo base_url ("assets/dist/css/style.min.css")?>" rel="stylesheet">

</head>

<body>
 
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
 
  <div id="main-wrapper">
    
    <header class="topbar" data-navbarbg="skin5">

      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
       
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
         
          <ul class="navbar-nav float-left mr-auto">
            <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url ("assets/assets/images/arka.png")?>" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                       
                    </a>
          </ul>
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-right">

            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <button type="button" class="btn btn-warning">Add</button>
            </li>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
          </ul>
        </div>
      </nav>
    </header>
   
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
      <div class="container-fluid">

        <div class="row">
         <table class="table">
          <thead class="table-warning">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Cashier</th>
              <th scope="col">Product</th>
              <th scope="col">Category</th>
              <th scope="col">Price</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php                 
            foreach ($data_join as $value) {   ?>
            <tr>
              <th scope="row"><?php echo $value->id  ?></th>
              <td><?php echo $value->name_cashier  ?></td>
              <td><?php echo $value->name_product  ?></td>
              <td><?php echo $value->name_category  ?></td>
              <td><?php echo $value->price  ?></td>
              <td>
                <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>  <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>
            </tr>
 <?php } ?>
          </tbody>
        </table>

      </div>

    </div>
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
  </div>

</div>
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url ("assets/assets/libs/jquery/dist/jquery.min.js")?>"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url ("assets/assets/libs/popper.js/dist/umd/popper.min.js")?>"></script>
<script src="<?php echo base_url ("assets/assets/libs/bootstrap/dist/js/bootstrap.min.js")?>"></script>
<script src="<?php echo base_url ("assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js")?>"></script>
<script src="<?php echo base_url ("assets/assets/extra-libs/sparkline/sparkline.js")?>"></script>
<!--Wave Effects -->
<script src="<?php echo base_url ("assets/dist/js/waves.js")?>"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url ("assets/dist/js/sidebarmenu.js")?>"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url ("assets/dist/js/custom.min.js")?>"></script>
<!--This page JavaScript -->
<!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->
<script src="<?php echo base_url ("assets/assets/libs/flot/excanvas.js")?>"></script>
<script src="<?php echo base_url ("assets/assets/libs/flot/jquery.flot.js")?>"></script>
<script src="<?php echo base_url ("assets/assets/libs/flot/jquery.flot.pie.js")?>"></script>
<script src="<?php echo base_url ("assets/assets/libs/flot/jquery.flot.time.js")?>"></script>
<script src="<?php echo base_url ("assets/assets/libs/flot/jquery.flot.stack.js")?>"></script>
<script src="<?php echo base_url ("assets/assets/libs/flot/jquery.flot.crosshair.js")?>"></script>
<script src="<?php echo base_url ("assets/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js")?>"></script>
<script src="<?php echo base_url ("assets/dist/js/pages/chart/chart-page-init.js")?>"></script>

</body>

</html>