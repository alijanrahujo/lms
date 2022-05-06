      <nav class="sidebar sidebar-offcanvas sidebar-dark" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <img src="{{asset('images/faces/face1.jpg')}}" >
            <p class="text-center font-weight-medium">{{Auth::user()->name}}</p>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
              <i class="menu-icon icon-diamond"></i>
              <span class="menu-title">Dashboard</span>
              <div class="badge badge-success">3</div>
            </a>
          </li>
          
         
          <li class="nav-item d-none d-md-block">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="menu-icon icon-compass"></i>
              <span class="menu-title">User Managment</span>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('users.index') }}">Users</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('permissions.index') }}">Permissions</a>
                </li>
              
              </ul>
            </div>
          </li>
       

           @can('access-institute')
           <li class="nav-item">
            <a class="nav-link" href="{{route('institutes.index')}}">
              <i class="menu-icon icon-speedometer"></i>
              <span class="menu-title">Create Institute</span>
            </a>
          </li>
          @endcan

          @can('access-teacher')
           <li class="nav-item">
            <a class="nav-link" href="{{route('teachers.index')}}">
              <i class="menu-icon icon-speedometer"></i>
              <span class="menu-title">Teachers</span>
            </a>
          </li>
          @endcan

          @can('access-academic')
          <li class="nav-item d-none d-md-block">
            <a class="nav-link" data-toggle="collapse" href="#Academic" aria-expanded="false" aria-controls="page-layouts">
              <i class="menu-icon icon-compass"></i>
              <span class="menu-title">Academic</span>
            </a>
            <div class="collapse" id="Academic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('classes.index')}}">Class</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('subjects.index')}}">Subjects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('sections.index')}}">Sections</a>
                </li>
              
              </ul>
            </div>
          </li>
          @endcan

          
          @can('access-parent')
           <li class="nav-item">
            <a class="nav-link" href="{{route('fathers.index')}}">
              <i class="menu-icon icon-speedometer"></i>
              <span class="menu-title">Parents</span>
            </a>
          </li>
          @endcan

            @can('access-student')
            <li class="nav-item">
            <a class="nav-link" href="{{route('students.index')}}">
              <i class="menu-icon icon-speedometer"></i>
              <span class="menu-title">Students</span>
            </a>
          </li>
          @endcan

          @can('access-account')
          <li class="nav-item d-none d-md-block">
            <a class="nav-link" data-toggle="collapse" href="#account" aria-expanded="false" aria-controls="page-layouts">
              <i class="menu-icon icon-compass"></i>
              <span class="menu-title">Account</span>
            </a>
            <div class="collapse" id="account">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('fee_type.index') }}">Fee Types</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('invoice.index')}}">Invoice</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Payment History</a>
                </li>
              
              </ul>
            </div>
          </li>
          @endcan


          <li class="nav-item d-none d-md-block">
            <a class="nav-link" data-toggle="collapse" href="#page-test" aria-expanded="false" aria-controls="page-layouts">
              <i class="menu-icon icon-compass"></i>
              <span class="menu-title">Online Test</span>
            </a>
            <div class="collapse" id="page-test">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('candidates.index') }}">Candidates</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('roles.index') }}">Tests</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('permissions.index') }}">Result</a>
                </li>
              
              </ul>
            </div>
          </li>

          @can('access-pseb')
          <li class="nav-item d-none d-md-block">
            <a class="nav-link" data-toggle="collapse" href="#page-pseb" aria-expanded="false" aria-controls="page-layouts">
              <i class="menu-icon icon-compass"></i>
              <span class="menu-title">PSEB</span>
            </a>
            <div class="collapse" id="page-pseb">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('internees.index') }}">Internees</a>
                </li>
              
              </ul>
            </div>
          </li>
          @endcan

          @can('access-attendence')
          <li class="nav-item d-none d-md-block">
            <a class="nav-link" data-toggle="collapse" href="#page-attendence" aria-expanded="false" aria-controls="page-layouts">
              <i class="menu-icon icon-compass"></i>
              <span class="menu-title">Attendance</span>
            </a>
            <div class="collapse" id="page-attendence">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('attendence.index') }}">Manual</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('attendence.create') }}">Record</a>
                </li>
              
              </ul>
            </div>
          </li>
          @endcan





<!-- 
          <li class="nav-item d-none d-md-block">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts2" aria-expanded="false" aria-controls="page-layouts">
              <i class="menu-icon icon-compass"></i>
              <span class="menu-title">Admin</span>
            </a>
            <div class="collapse" id="page-layouts2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('teachers.index')}}">Teachers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('classes.index')}}">Classes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('subjects.index')}}">Subjects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('sections.index')}}">Section</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Parents</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('students.index')}}">Student</a>
                </li>
              </ul>
            </div>
          </li> -->
          
         
          <li class="nav-item">
            <a class="nav-link" href="pages/widgets.html">
              <i class="menu-icon icon-speedometer"></i>
              <span class="menu-title">Widgets</span>
              <div class="badge badge-warning">7</div>
            </a>
          </li>
 
     
  
     
    
         
          
          
        </ul>
      </nav>
