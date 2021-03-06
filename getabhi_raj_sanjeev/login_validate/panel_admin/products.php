<?php
  SESSION_START();
  include ('script/fetch_profile.php');
  $category111 = $_GET['category'];
  if (isset($_SESSION['username'])) 
  {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin TrandHub | Dashboard - Stores</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

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
              <!-- Notifications: style can be found in dropdown.less -->
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
                <li><a href="simple.php"><i class="fa fa-circle-o"></i> Buyers</a></li>
                <li><a href="data.php"><i class="fa fa-circle-o"></i> Sellers</a></li>
              </ul>
            </li>
            <li>
              <a href="calendar.php">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
              </a>
            </li>
            <li>
              <a href="mailbox.php">
                <i class="fa fa-envelope"></i> <span>Subscribers</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Stores</span>
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
                <li><a href="products.php?category=<?php echo $category;?>"><i class="fa fa-circle-o"></i> <?php echo $category;?></a></li>
                <?php
                    }
                  }
                ?>
              </ul>
            </li>
            <li><a href="category.php"><i class="fa fa-book"></i> Category</a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i> <span>Enquiries</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="invoice.php"><i class="fa fa-circle-o"></i> All Enquiries</a></li>
                <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Message</a></li>
                <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Notify Seller</a></li>
                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Bids Placed</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Products
            <small>All Register Products of category.</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">User</a></li>
            <li class="active">Products</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Products Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Sr. No.</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Store</th>
                        <th>Owner</th>
                        <th>Owner Number</th>
                        <th>Owner Email</th>
                        <th>Max. Order</th>
                        <th>Min. Order</th>
                        <th>Image</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $sql_fetch_pro = "SELECT * FROM `products` WHERE category = '$category111'";
                        $sr=0;
                        $result_fetch_pro = mysqli_query($con, $sql_fetch_pro);
                        if(mysqli_num_rows($result_fetch_pro) > 0)
                        {
                          while ($row_fetch_pro = mysqli_fetch_array($result_fetch_pro, MYSQLI_BOTH)) 
                          {
                            $uid_pro = $row_fetch_pro['uid_product'];
                            $uid_company = $row_fetch_pro['uid_company'];
                            $uid_owner = $row_fetch_pro['uid_user'];
                            $price_pro = $row_fetch_pro['price'];
                            $name_pro = $row_fetch_pro['name_product'];
                            $description_pro = $row_fetch_pro['description'];
                            $max_order_pro = $row_fetch_pro['max_order'];
                            $min_order_pro = $row_fetch_pro['min_order'];
                            $sr++;
                            #Fetch Owner
                            $sql_fetch_seller = "SELECT * FROM `sign up` WHERE uid = '$uid_owner'";
                            $result_fetch_seller = mysqli_query($con, $sql_fetch_seller);
                            if(mysqli_num_rows($result_fetch_seller) > 0)
                            {
                              while ($row_fetch_seller = mysqli_fetch_array($result_fetch_seller, MYSQLI_BOTH)) 
                              {
                                $fname = $row_fetch_seller['fname'];
                                $lname = $row_fetch_seller['lname'];
                                $phone_owner = $row_fetch_seller['Phone'];
                                $email_owner = $row_fetch_seller['email'];
                              }
                            }
                            #Fetch Store
                            $sql_fetch_store = "SELECT * FROM `company` WHERE uid_company = '$uid_company'";
                            $result_fetch_store = mysqli_query($con, $sql_fetch_store);
                            if(mysqli_num_rows($result_fetch_store) > 0)
                            {
                              while ($row_fetch_store = mysqli_fetch_array($result_fetch_store, MYSQLI_BOTH)) 
                              {
                                $name_store = $row_fetch_store['company_name'];
                              }
                            }    
                            # Fetch image
                            $sql_fetch_img = "SELECT * FROM `item_images` WHERE uid_product = '$uid_pro'";
                            $result_fetch_img = mysqli_query($con, $sql_fetch_img);
                            if(mysqli_num_rows($result_fetch_img) > 0)
                            {
                              while ($row_fetch_img = mysqli_fetch_array($result_fetch_img, MYSQLI_BOTH)) 
                              {
                                $link_img = $row_fetch_img['link'];
                              }
                            }    
                      ?>
                      <tr>
                        <td><?php echo $sr;?></td>
                        <td><?php echo $name_pro;?></td>
                        <td><?php echo $price_pro;?></td>
                        <td><?php echo $description_pro;?></td>
                        <td><?php echo $name_store;?></td>
                        <td><?php echo $fname." ".$lname;?></td>
                        <td><?php echo $phone_owner;?></td>
                        <td><?php echo $email_owner;?></td>
                        <td><?php echo $max_order_pro;?></td>
                        <td><?php echo $min_order_pro;?></td>
                        <td><img src="../../../script/<?php echo $link_img;?>" width="60px" ></td>
                      </tr>
                      <?php
                          }
                        }
                      ?>
                    </tbody>
                  </table>
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
    header('Location: ../index.php');
    exit;
  }
?>