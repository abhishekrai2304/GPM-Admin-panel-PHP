
  <header class="main-header">
    <!-- Logo -->
    <a <?php echo $index ?> class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>G</b>PM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>GPM</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
       
          <!-- Notifications: style can be found in dropdown.less -->
         
          <!-- Tasks: style can be found in dropdown.less -->
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img <?php echo $img ?> class="user-image" alt="User Image">
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img <?php echo $img ?> class="img-circle" alt="User Image">

                <p>
                  
                </p>
              </li>
              <!-- Menu Body -->
            
              <!-- Menu Footer-->
              <li class="user-footer">
              
                <div class="pull-right">
                  <a <?php echo $logout ?> class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
          <img <?php echo $img ?> class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
       
        <li <?php echo $dashboard ?>>
          <a <?php echo $dashboard_href ?>>
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>
     
        <li <?php echo $cons ?>>
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Concession</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo $admin ?> ><a <?php echo $admin_href ?>><i class="fa fa-circle-o"></i> Concession </a></li>

           </ul>
        </li>
        <li <?php echo $student ?>>
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Student Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo $curr ?> ><a <?php echo $curr_href ?>><i class="fa fa-circle-o"></i> curriculum</a></li>
            <li <?php echo $TT ?> ><a <?php echo $TT_href ?>><i class="fa fa-circle-o"></i> Time Table</a></li>
            <li <?php echo $qs ?> ><a <?php echo $qs_href ?>><i class="fa fa-circle-o"></i> Question Paper</a></li>

           </ul>
        </li>
        <li <?php echo $feedback ?>>
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Feedback</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo $feed ?> ><a <?php echo $feedback_href ?>><i class="fa fa-circle-o"></i> Feedback</a></li>

           </ul>
        </li>
        
        <li <?php echo $notice ?>>
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Notices</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo $ln ?> ><a <?php echo $ln_href ?>><i class="fa fa-circle-o"></i> Notices</a></li>
          
           </ul>
        </li>

       
        

       
        
        
        

       

      
  </ul>
       
       
        
        
           
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
 
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
       
         
        <!-- /.control-sidebar-menu -->

        <ul class="control-sidebar-menu">
         
         
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
     
      <!-- /.tab-pane -->
    </div>
  </aside>