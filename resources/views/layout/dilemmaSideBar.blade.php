<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
@if (Auth::guest())

@else
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset("dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->name }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" id="menuSearch" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>

            <script type="text/javascript">
                $("#menuSearch").on('input', function() {
                  var filter = $(this).val();
                  $(".sidebar-menu > li").each(function(){
                      if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                          $(this).hide();
                      } else {
                          $(this).show();
                      }
                  });
                });
            </script>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Questions</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="/questions"><i class="fa fa-circle-o"></i> Questions</a></li>
              </ul>
            </li>
            <li><a href="/users"><i class="fa fa-user "></i> <span>Users</span></a></li>


            <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
          </ul>
        </section>
@endif
        <!-- /.sidebar -->
      </aside>
