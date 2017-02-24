<!DOCTYPE html>
<html>
<head>
  <title>Assalaam Payroll</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" type="text/css" href="{{url('Master/dist/angularjs/assets/css/vendor.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('Master/dist/angularjs/assets/css/flat-admin.css')}}">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="{{url('Master/dist/angularjs/assets/css/blue-sky.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('Master/dist/angularjs/assets/css/blue.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('Master/dist/angularjs/assets/css/red.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('Master/dist/angularjs/assets/css/yellow.css')}}">

</head>
<body>
  <div class="app app-default">

<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href="#"><span class="highlight">SMK</span>Assalaam</a>
   
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li class="active">
        <a href="{{url('/Pegawai')}}">
          <div class="icon">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
          <div class="">PEGAWAI</div>
        </a>
      </li>
       
       <li class="active">
        <a href="{{url('/Jabatan')}}">
          <div class="icon">
            <i class="fa fa-cubes" aria-hidden="true"></i>
          </div>
          <div class="">JABATAN</div>
        </a>
      </li>
     
          <li class="active">
        <a href="{{url('/Golongan')}}">
          <div class="icon">
            <i class="fa fa-navicon" aria-hidden="true"></i>
          </div>
          <div class="">GOLONGAN</div>
        </a>
      </li>

      <li class="dropdown ">
      
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
          </div>
          <div class="active">LEMBUR</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li><a href="{{url('/Kategori_Lembur')}}">Kategori Lembur</a></li>
            <li><a href="{{url('/Lembur_Pegawai')}}">Lembur Pegawai</a></li>
            
           
          </ul>
        </div>
      </li>
         <li class="dropdown ">
     
         
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-database" aria-hidden="true"></i>
          </div>
          <div class="active">TUNJANGAN</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li><a href="{{url('/Tunjangan')}}">Data Tunjangan</a></li>
            <li><a href="{{url('/Tunjangan_Pegawai')}}">Tunjangan Pegawai</a></li>
            
           </li>
          </ul>
        </div>
      </li>
       <li class="active">
        <a href="{{url('/Penggajian')}}">
          <div class="icon">
            <i class="fa fa-money" aria-hidden="true"></i>
          </div>
          <div class="">PENGGAJIAN</div>
        </a>
      </li>
      </li>
  </div>
</ul>
</aside>

<script type="text/ng-template" id="sidebar-dropdown.tpl.html">
  <div class="dropdown-background">
    <div class="bg"></div>
  </div>

  </div>
</script>
<div class="app-container">

  <nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <div class="navbar-collapse collapse in">
      <ul class="nav navbar-nav navbar-mobile">
        <li>
          <button type="button" class="sidebar-toggle">
            <i class="fa fa-bars"></i>
          </button>
        </li>
        <li class="logo">
          <a class="navbar-brand" href="#"><span class="highlight">Flat v3</span> Admin</a>
        </li>
        <li>
          <button type="button" class="navbar-toggle">
            <img class="profile-img" src="./assets/images/profile.png">
          </button>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        <li class="navbar-title">Assalaam Payroll Application</li>
       <!--  <li class="navbar-search hidden-sm">
          <input id="search" type="text" placeholder="Search..">
          <button class="btn-search"><i class="fa fa-search"></i></button>
        </li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
      @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><!-- Login --></a></li>
                             @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
 
        <li class="dropdown profile">
      
          <div class="dropdown-menu">
            <div class="profile-info">
              <h4 class="username">Scott White</h4>
            </div>
            <ul class="action">
              <li>
                <a href="#">
                  Profile
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">5</span>
                  My Inbox
                </a>
              </li>
              <li>
                <a href="#">
                  Setting
                </a>
              </li>
              <li>
                <a href="#">
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

 
<!-- <div class="row">
  <div class="col-xs-12">
    <div class="card card-banner card-chart card-green no-br">
      <div class="card-header">
        <div class="card-title">
          <div class="title">Assalaam Payroll Application</div>
        </div>
        <ul class="card-action">
          <li>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="ct-chart-sale"></div>
      </div>
    </div>
  </div>
</div> -->
<div class="row">

  <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
  <div class="card-body">

        @yield('content')
  <div class="content">
    </div>
  </div>
</a>

  </div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

  </div>

  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="card card-tab card-mini">
  
      <div class="card-body tab-content">
    
        <div role="tabpanel" class="tab-pane" id="tab2">
          <div class="row">
            <div class="col-sm-8">
              <div class="chart ct-chart-os ct-perfect-fourth"></div>
            </div>
            <div class="col-sm-4">
            
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="tab3">
        </div>
      </div>
    </div>
  </div>
</div>

</div>

  </div>

  <script type="text/javascript" src="{{url('Master/dist/angularjs/hvendor.js')}}"></script>
  <script type="text/javascript" src="{{url('Master/dist/angularjs/happ.js')}}"></script>
</body>
</html>