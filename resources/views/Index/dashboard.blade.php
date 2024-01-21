

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Attendance and Academia Management</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('logo.png')}}">
    <link rel="shortcut icon" href="{{asset('logo.png')}}">

    <link rel="stylesheet" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/jqvmap/dist/jqvmap.min.css')}}">


    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link href="{{asset('assets/css/fonts.css')}}" rel='stylesheet' type='text/css'>



</head>

<body>
<!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('/index') }}"><img src="logo.png" height="40px" width="40px" alt="Logo" align="Left">&nbsp&nbsp&nbsp&nbsp&nbspAAMS</a>
                <a class="navbar-brand hidden" href="#"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ url('/index') }}"><img src="{{asset('home.png')}}" height="23px" width="23px" alt="Logo" align="Left">&nbsp&nbsp&nbsp&nbsp Dashboard </a>
                    </li>
                    <h3 class="menu-title">Manage Users</h3><!-- /.menu-title -->
                    <li>
                        <a href="{{ url('/student_list') }}"><img src="{{asset('Student.png')}}" height="25px" width="25px" alt="Logo" align="Left">&nbsp&nbsp&nbsp&nbsp Students</a>
                       
                    </li>
                   
                    <li>
                        <a href="{{ url('/faculty')}}"><img src="{{asset('Faculty.png')}}" height="25px" width="25px" alt="Logo" align="Left">&nbsp&nbsp&nbsp&nbsp Faculties</a>
                    </li>
                   

                    <h3 class="menu-title">Manage Services</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('Timetable.png')}}" height="25px" width="25px" align="Left">&nbsp&nbsp&nbsp&nbsp Timetable</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="{{ url('/A_division')}}">A division timetable</a></li>
                            <li><a href="{{ url('/B_division')}}">B division timetable</a></li>
                            <li><a href="{{ url('/C_division')}}">C division timetable</a></li> 
                           
                        </ul>
                    </li>

                   

                  
                 
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
<!-- Left Panel -->

<!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{ url('/Admin_profile')}}"><i class="fa fa-user"></i> My Profile</a>
                            <a class="nav-link" href="{{ url('/logout')}}"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                   

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
<!-- Right Panel -->

<!-- content-->

    @yield('content')
<!-- end content-->
                <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
                <script src="{{asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>

                <script src="{{asset('vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>
                

                <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"> </script>
                <script src="{{asset('assets/js/main.js')}}"></script>


</body>

</html>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">


//console.log("Test ");
    
$(document).ready(function(){
   $('#student_details').dataTable({
        "ordering": true,
        columnDefs:[{
            'orderable':true,
            'searchable':true,
            'sortable':true
        }]
    }); 


    
     

    
    //console.log("Test com");

    $('#faculty_details').dataTable({
        "ordering": true,
        columnDefs:[{
            'orderable':true,
            'searchable':true,
            'sortable':true
        }]
    });


    $('#admin_details').dataTable({
        "ordering": true,
        columnDefs:[{
            'orderable':true,
            'searchable':true,
            'sortable':true
        }]
    });


});
/*$(window).on('load',function(){
console.log("Test");
    $('#student_details').dataTable(function(){ 
        console.log("Test");  
        $.ajax({
        url:'/student_list',
        type:"POST",
        data: {
            "_token": "{{ csrf_token() }}"        
            },
        dataType: "JSON",
        success:function(responce){
            console.log("Test");
            console.log(responce);
            $('#student_details').find('#first').after(responce);
           } 
        });
        
    });
});*/

$(document).ready(function(){
console.log("Test");
    $('#details').click(function(){ 
        console.log("Test");  
        $.ajax({
        url:'/student_list',
        type:"POST",
        data: {
            "_token": "{{ csrf_token() }}"        
            },
        dataType: "JSON",
        success:function(responce){
            console.log("Test");
            console.log(responce);
            $('#student_details').find('#first').after(responce);
           } 
        });
        
    });
});
 </script>