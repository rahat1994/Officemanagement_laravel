     <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Office Management</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="{{asset('assets/images/user.png')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>My Profile</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('/home')}}">Dashboard</a>
                    </li>
                  </ul>
                </li>
              
                <li><a><i class="fa fa-desktop"></i> Others <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                 
                    <li><a href="{{url('/media')}}">Document</a>
                    </li>
                    <li><a href="contacts.html">Contacts</a>
                   
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
               
                    <li><a href="{{url('/table')}}">User Info</a>
                    </li>
                      <li><a href="{{url('/table')}}">Investment</a>
                    </li>
                          <li><a href="{{url('/table')}}">Salary</a>
                    </li>
                    
                  </ul>
                </li>
            
                           <li><a><i class="fa fa-bug"></i>Projects<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                
                   <!-- <li><a href="{{url('/projects')}}">Projects</a>-->
                    <li><a href="{{url('/projects')}}">Projects</a>
                    </li>
                    <li><a href="#">Project Detail</a>
                 <li><a href="{{url('/add_project')}}">Add new</a>
                        
                   
                    </li>
                   
                    </li>
                   
                    </li>
                  </ul>
                </li>
                  
                  
                  
              </ul>
            </div>
            <div class="menu_section">
               <h3>User Section</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> All projects <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                
                   <li><a href="{{url('/project_2')}}">Projects</a>
                    </li>
                    <li><a href="#">Project Detail</a>
                        
                   <!-- <li><a href="{{url('/add_project')}}">Add new</a>
                    </li>
                    <li><a href="contacts.html">Contacts</a>
                    </li>
                    <li><a href="{{url('/profile')}}">Profile</a>
                    </li>-->
                  </ul>
                </li>
                <li><a><i class="fa fa-windows"></i> Tasks <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                   
                    <li><a href="{{url('/add_task')}}">Add new</a>
                    </li>
                       <li><a href="{{url('/tasks')}}">Tasks</a>
                    </li>

                  </ul>
                </li>
                   <li><a href="{{url('/profile')}}">Profile</a>
                  
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>
      