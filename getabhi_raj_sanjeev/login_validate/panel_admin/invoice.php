<?php
  SESSION_START();
  include ('script/fetch_profile.php');
  if (isset($_SESSION['username'])) 
  {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin TrandHub | Dashboard - Enquiries</title>
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
        <a href="index2.html" class="logo"><b>Admin</b>TrandHub</a>
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
                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard Exclusive System</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Users</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/tables/simple.php"><i class="fa fa-circle-o"></i> Buyers</a></li>
                <li><a href="pages/tables/data.php"><i class="fa fa-circle-o"></i> Sellers</a></li>
              </ul>
            </li>
            <li>
              <a href="calendar.php">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
              </a>
            </li>
            <li>
              <a href="mailbox/mailbox.php">
                <i class="fa fa-envelope"></i> <span>Subscribers</span>
              </a>
            </li>
            <li class="treeview">
              <a href="store.php">
                <i class="fa fa-folder"></i> <span>Stores</span>
                <i class="fa pull-right"></i>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Products</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
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
            <li><a href="documentation/index.php"><i class="fa fa-book"></i> Category</a></li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-book"></i> <span>Enquiries</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="pages/examples/invoice.php"><i class="fa fa-circle-o"></i> All Enquiries</a></li>
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
            Enquiries
            <small>Enquiries Placed</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Enquiries</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="invoice">
        <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Name Buyer</th>
                    <th>Email Buyer</th>
                    <th>Phone Buyer</th>
                    <th>Name Seller</th>
                    <th>Email Seller</th>
                    <th>Phone Seller</th>
                    <th>Message</th>
                    <th>Date & Time</th>
                    <th>UID Product</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                      $sql_fetch_en = "SELECT * FROM `quotation`";
                      $sr=0;
                        $result_fetch_en = mysqli_query($con, $sql_fetch_en);
                        if(mysqli_num_rows($result_fetch_en) > 0)
                        {
                          while ($row_fetch_en = mysqli_fetch_array($result_fetch_en, MYSQLI_BOTH)) 
                          {
                            $uid_buyer = $row_fetch_en['uid_buyer'];
                            $uid_seller = $row_fetch_en['uid_seller'];
                            $uid_product = $row_fetch_en['uid_product'];
                            $msg = $row_fetch_en['message'];
                            $name_buyer = $row_fetch_en['name'];
                            $email_buyer = $row_fetch_en['email'];
                            $phone_buyer = $row_fetch_en['phone'];
                            $date = $row_fetch_en['date_time'];
                            $sr++;
                            $sql_fetch_seller = "SELECT * FROM `sign up` WHERE uid = '$uid_seller'";
                            $result_fetch_seller = mysqli_query($con, $sql_fetch_seller);
                            if(mysqli_num_rows($result_fetch_seller) > 0)
                            {
                              while ($row_fetch_seller = mysqli_fetch_array($result_fetch_seller, MYSQLI_BOTH)) 
                              {
                                $fname = $row_fetch_seller['fname'];
                                $lname = $row_fetch_seller['lname'];
                                $email_seller = $row_fetch_seller['email'];
                                $phone_seller = $row_fetch_seller['Phone'];
                              }
                            }

                    ?>
                    <td><?php echo $sr;?></td>
                    <td><?php echo $name_buyer;?></td>
                    <td><?php echo $email_buyer;?></td>
                    <td><?php echo $phone_buyer;?></td>
                    <td><?php echo $fname." ".$lname;?></td>
                    <td><?php echo $email_seller;?></td>
                    <td><?php echo $phone_seller;?></td>
                    <td><?php echo $msg;?></td>
                    <td><?php echo $date;?></td>
                    <td><a href="checkproduct.php?uid_product=<?php echo $uid_product;?>">Check Product</a></td>
                    <?php
                          }
                        }
                    ?>
                  </tr>
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        <div class="clearfix"></div>
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