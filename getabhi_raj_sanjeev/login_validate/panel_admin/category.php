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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin TrandHub | Dashboard - Categories</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
      body {
        font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-weight: 500;
      }
      .content-wrapper {
        padding: 0 10px;
        font-size: 14px;
      }
      .page-header {
        border: 0;        
        margin: 0 0 20px 0;
        padding: 0;
        position: relative;
        z-index: 1;
        font-size: 30px;
      }
      section[id] {
        padding: 20px 0 0 0;
      }
      #components > h3 {
        font-size: 25px;
        border-bottom: 1px solid #dedede;
        color: #000;
      }
      #components > h4 {
        font-size: 20px;
        color: #000;
      }
      .page-header span {
        z-index: 5;
        display: inline-block;
        background-color: #ecf0f5;
        padding-right: 10px;
      }
      .page-header::before {
        content: " ";
        display: block;
        background: #ccc;
        width: 100%;
        height: 1px;
        position: absolute;
        top: 50%;
        margin-top: 2px;
        z-index: -1;
      }
      .lead {
        font-size: 16px;
        font-weight: 400;
      }
      .eg{
        position: absolute;
        top: 0;
        left: 0;
        display: inline-block;
        background: #d2d6de;
        padding: 5px;
        border-bottom-right-radius: 3px;
        border-top-left-radius: 3px;
        border-bottom: 1px solid #d2d6dc;
        border-right: 1px solid #d2d6dc;
      }
      .eg + * {
        margin-top: 30px;
      }
      .content {
        padding: 10px 25px;
      }
      .hierarchy {
        background: #333;
        color: #fff;
      }
      .plugins-list li {
        width: 50%;
        float: left;
      }
      pre {
        border: none;
      }
      /* desert scheme ported from vim to google prettify */
      pre.prettyprint {display: block; background-color: #333; max-height: 300px; border: none!important; margin-bottom: 20px;}
      pre .nocode { background-color: none; color: #000 }
      pre .str { color: #ffa0a0;} /* string  - pink */
      pre .kwd { color: #f0e68c; font-weight: bold }
      pre .com { color: #87ceeb } /* comment - skyblue */
      pre .typ { color: #98fb98 } /* type    - lightgreen */
      pre .lit { color: #cd5c5c } /* literal - darkred */
      pre .pun { color: #fff }    /* punctuation */
      pre .pln { color: #fff }    /* plaintext */
      pre .tag { color: #f0e68c; font-weight: bold } /* html/xml tag    - lightyellow */
      pre .atn { color: #bdb76b; font-weight: bold } /* attribute name  - khaki */
      pre .atv { color: #ffa0a0 } /* attribute value - pink */
      pre .dec { color: #98fb98 } /* decimal         - lightgreen */

      /* Specify class=linenums on a pre to get line numbering */
      ol.linenums { margin-top: 0; margin-bottom: 0; color: #AEAEAE } /* IE indents via margin-left */
      li.L0,li.L1,li.L2,li.L3,li.L5,li.L6,li.L7,li.L8 { list-style-type: none }
      /* Alternate shading for lines */
      li.L1,li.L3,li.L5,li.L7,li.L9 { }

      @media print {
        pre.prettyprint { background-color: none }
        pre .str, code .str { color: #060 }
        pre .kwd, code .kwd { color: #006; font-weight: bold }
        pre .com, code .com { color: #600; font-style: italic }
        pre .typ, code .typ { color: #404; font-weight: bold }
        pre .lit, code .lit { color: #044 }
        pre .pun, code .pun { color: #440 }
        pre .pln, code .pln { color: #000 }
        pre .tag, code .tag { color: #006; font-weight: bold }
        pre .atn, code .atn { color: #404 }
        pre .atv, code .atv { color: #060 }
      }
      .sidebar {
        margin-top: 0;
        padding-top: 0!important;
      }
      .box .main-header {
        z-index: 1000;
        position: relative;
      }
      .treeview .nav li a:hover,
      .treeview .nav li a:active {
        background: transparent;
      }
    </style>
  </head>
  <body class="skin-blue fixed" data-spy="scroll" data-target="#scrollspy">
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
            <li class="active"><a href="supplier.php"><i class="fa fa-book"></i> Category</a></li>
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
        <div class="content-header">
          <h1>
            Available Category
            <small>All Available Category</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Category</li>
          </ol>
        </div>

        <!-- Main content -->
        <div class="content body">
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Buyer Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Sr. No.</th>
                        <th>Category</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $sql_fetch_category = "SELECT * FROM `category`";
                        $sr=0;
                        $result_fetch_category = mysqli_query($con, $sql_fetch_category);
                        if(mysqli_num_rows($result_fetch_category) > 0)
                        {
                          while ($row_fetch_category = mysqli_fetch_array($result_fetch_category, MYSQLI_BOTH)) 
                          {
                            $category = $row_fetch_category['category'];
                            $sr++;
                      ?>
                      <tr>
                        <td><?php echo $sr;?></td>
                        <td><?php echo $category;?></td>
                      </tr>
                      <?php
                          }
                        }
                      ?>
                  <form action="addcategory.php" method="POST">
                    <tr>
                      <td><input type="text" name="addcategory" style="width: 80%; border-radius: 2px"></td>
                      <td><button name="submit">Add Category</button></td>
                    </tr>
                  </form>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content -->
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
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <script>
      $(function () {
        $(".sidebar-menu li a").click(function () {
          var $this = $(this);
          var target = $this.attr("href");
          if (typeof target === 'string') {
            $("body").animate({
              scrollTop: ($(target).offset().top - 32) + "px"
            }, 500);
          }
        });

      });
    </script>
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