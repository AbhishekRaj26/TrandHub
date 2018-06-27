<?php
  SESSION_START();
  include ('script/fetch_profile.php');
  $uid_supplier = $_GET['uid_supplier'];
  $store_name = $_GET['store_name'];
  $uid_product11 = $_GET['uid_product'];
  if (isset($_SESSION['username'])) 
  {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin TrandHub | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
   <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <a href="index2.php" class="logo"><b>Admin</b>TrandHub</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo $link;?>" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name;?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo $link;?>" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name;?> - <?php echo $position;?>
                      <small>Since June 15th, 2018</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="script/signout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo $link;?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $name;?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php"><i class="fa fa-circle-o"></i> Dashboard Enquiry System</a></li>
                <li><a href="index2.php"><i class="fa fa-circle-o"></i> Dashboard Exclusive System</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Users</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="simple.php"><i class="fa fa-circle-o"></i> Cutomer</a></li>
                <li><a href="supplier.php"><i class="fa fa-circle-o"></i> Supplier</a></li>
              </ul>
            </li>
            <li>
              <a href="calendar.php">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
              </a>
            </li>
            <li>
              <a href="mailbox.php">
                <i class="fa fa-envelope"></i> <span>Orders</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Billing Information</span>
                <i class="fa pull-right"></i>
              </a>
            </li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Products</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="active treeview-menu">
                <?php
                  $sql11 = "SELECT * FROM `category`";
                  $result11 = mysqli_query($con, $sql11);
                  if(mysqli_num_rows($result11) > 0)
                  {
                    while ($row11 = mysqli_fetch_array($result11, MYSQLI_BOTH)) 
                    {
                      $category = $row11['category'];
                ?>
                <li><a href="products_ecom.php?category=<?php echo $category;?>"><i class="fa fa-circle-o"></i> <?php echo $category;?></a></li>
                <?php
                    }
                  }
                ?>
              </ul>
            </li>
            <li><a href="supplier.php"><i class="fa fa-book"></i> Suplliers</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Products
            <small>Edit products to <?php echo $store_name;?>.</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">User</a></li>
            <li class="active">Edit Products</li>
          </ol>
        </section>
        <?php
          $sql_fetch_pro = "SELECT * FROM `products_ecom` WHERE uid_product = '$uid_product11' AND uid_supplier = '$uid_supplier'";
          $sr=0;
          $result_fetch_pro = mysqli_query($con, $sql_fetch_pro);
          if(mysqli_num_rows($result_fetch_pro) > 0)
          {
            while ($row_fetch_pro = mysqli_fetch_array($result_fetch_pro, MYSQLI_BOTH)) 
            {
              $uid_pro = $row_fetch_pro['uid_product'];
              $name_pro = $row_fetch_pro['name'];
              $description_pro = $row_fetch_pro['description'];
              $category_pro = $row_fetch_pro['category'];
              $quantity_per_unit = $row_fetch_pro['quantity_per_unit'];
              $unirprice = $row_fetch_pro['unitprice'];
              $trandhub_charges = $row_fetch_pro['trandhub_chagres'];
              $weight = $row_fetch_pro['unitweight'];
              $unit_in_order = $row_fetch_pro['unit_on_order'];
              $discount_pro = $row_fetch_pro['discount'];
              $instock = $row_fetch_pro['unit_in_stock'];
              $uid_supplier = $row_fetch_pro['uid_supplier'];
              $sr++;
            }
          }
        ?>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Edit Product</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form action="script/editproduct.php?uid_supplier=<?php echo $uid_supplier;?>&&uid_product=<?php echo $uid_product11;?>" method="POST">
                    <table id="example2" class="table table-bordered table-hover">
                      <tr>
                        <td><b>Name Product</b></td>
                        <td><input type="text" name="name" required="" style="width: 80%; border-radius: 20px" value="<?php echo $name_pro;?>"></td>
                      </tr>
                      <tr>
                        <td><b>Description</b></td>
                        <td><input type="text" name="description" required="" style="width: 80%; border-radius: 20px" value="<?php echo $description_pro;?>"></td>
                      </tr>
                      <tr>
                        <td><b>Quantity Per Unit</b></td>
                        <td><input type="number" min="1" name="quantity_per_unit" required="" style="width: 80%; border-radius: 20px" value="<?php echo $quantity_per_unit;?>"></td>
                      </tr>
                      <tr>
                        <td><b>Unit Price</b></td>
                        <td><input type="number" name="unitprice" required="" min="1" style="width: 80%; border-radius: 20px" value="<?php echo $unirprice;?>"></td>
                      </tr>
                      <tr>
                        <td><b>TrandHub Charges</b></td>
                        <td><input type="number" name="trandhub_charges" required="" min="1" style="width: 80%; border-radius: 20px" value="<?php echo $trandhub_charges;?>"></td>
                      </tr>
                      <tr>
                        <td><b>Unit Weight (Gram)</b></td>
                        <td><input type="text" name="unit_weight" min="1" required="" style="width: 80%; border-radius: 20px" value="<?php echo $weight;?>"></td>
                      </tr>
                      <tr>
                        <td><b>Unit in Stock</b></td>
                        <td><input type="number" name="unit_in_stock" min="1" required="" style="width: 80%; border-radius: 20px" value="<?php echo $instock;?>"></td>
                      </tr>
                      <tr>
                        <td><b>Units in order</b></td>
                        <td><input type="number" name="unit_in_order" min="0" required="" style="width: 80%; border-radius: 20px" value="<?php echo $unit_in_order;?>"></td>
                      </tr>
                      <tr>
                        <td><b>Discount</b></td>
                        <td><input type="number" min="1" name="discount" required="" style="width: 80%; border-radius: 20px" value="<?php echo $discount_pro;?>"></td>
                      </tr>
                      <?php
                      # Fetch image
                        $sql_fetch_img = "SELECT * FROM `ecom_product_images` WHERE uid_product = '$uid_pro'";
                        $result_fetch_img = mysqli_query($con, $sql_fetch_img);
                        if(mysqli_num_rows($result_fetch_img) > 0)
                        {
                          while ($row_fetch_img = mysqli_fetch_array($result_fetch_img, MYSQLI_BOTH)) 
                          {
                            $link_img = $row_fetch_img['link'];
                           ?>
                      <tr>
                        <td><b>Images</b></td>
                        <td><a href="upload_product_image.php?uid_supplier=<?php echo $uid_supplier;?>&&uid_product=<?php echo $uid_pro;?>"><img src="../../../<?php echo $link_img;?>" width="100px" ></a></td>
                      </tr>
                      <?php
                          }
                        } 
                      ?>
                      <tr>
                        <td colspan="2"><input type="submit" name="submit"></td>
                      </tr>
                    </table>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.1.1
        </div>
        <strong>Copyright &copy; 2018 <a href="http://index.php">TrandHub Admin Panel</a>.</strong>
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
<?php
  }
  else
  {
    header('Location: index.php');
    exit;
  }
?>