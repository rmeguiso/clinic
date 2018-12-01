<?php function login_header(){ ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Patients Information System - The best System in the world.</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 4-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/bower_components/font-awesome/css/font-awesome.min.css">
        


        <!-- jQuery -->
        <script language="javascript" src="<?php echo base_url() ?>assets/jquery-3.2.1.js"></script>

       
        <head>

            <body class="hold-transition login-page">


                <?php
            }

            function login_footer(){
                ?>

                <!-- jQuery 3 -->
                <script src="<?php echo base_url() ?>assets/theme/bower_components/jquery/dist/jquery.min.js"></script>
                <!-- Bootstrap 3.3.7 -->
                <script src="<?php echo base_url() ?>assets/theme/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
                <!-- iCheck -->
                <script src="<?php echo base_url() ?>assets/theme/plugins/iCheck/icheck.min.js"></script>

                <script>
                    $(function () {
                        $('input').iCheck({
                            checkboxClass: 'icheckbox_square-blue',
                            radioClass: 'iradio_square-blue',
                            increaseArea: '20%' /* optional */
                        });
                    });
                </script>

            </body>
            </html>
            <?php
        }

        function main_header() {
            ?>


            <!DOCTYPE html>
            <html>
            <head>

                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>Clinic Patients Information System - The best System in the world.</title>
                

                <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
                <!-- Bootstrap 3.3.7 -->
                <link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/bower_components/bootstrap/dist/css/bootstrap.min.css">
                <!-- Font Awesome -->
                <link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/bower_components/font-awesome/css/font-awesome.min.css">
                
                <!-- fullCalendar -->
                <link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/bower_components/fullcalendar/dist/fullcalendar.min.css">
                <link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
               
               
                <!-- jQuery -->
                <script language="javascript" src="<?php echo base_url() ?>assets/jquery-3.2.1.js"></script>
                

                <link rel="icon" href="https://www.favicon-generator.org/download/2015-01-29/ffad968f613d041521ba8adde62617e0.ico"  type="image/x-icon">


                <!-- Theme style -->
                <link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/dist/css/AdminLTE.min.css">
                <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
                <link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/dist/css/skins/_all-skins.min.css">

                <!-- bootstrap datepicker -->
                <link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

                 <!-- bootstrap 4 and jquery -->
                 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
                 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


                <head>

                    <body class="hold-transition fixed skin-blue sidebar-mini">

                        <div class="wrapper">
                         <header class="main-header">

                            
                            <!-- Logo -->
                            <a href="<?php echo base_url().'secretary'; ?>";" class="logo" style="background-color: #125d69; height: 50px;">
                                <!-- mini logo for sidebar mini 50x50 pixels -->
                                <span class="logo-mini"><b>C</b> Clinic </span>
                                <!-- logo for regular state and mobile devices -->
                                <p style="font-size: 13px;"> <b>Clinic Patients Information System</b></p>
                            </a>


                            <nav class="navbar navbar-expand-lg navbar-dark" style="max-height: 50px; background-color: #313e4b">
                                <!-- Sidebar toggle button-->
                                <a href="#" class="" style="width: 2.5em; height: 2.5em; color: white" data-toggle="push-menu" role="button">
                                    <!-- <span class="sr-only">Toggle navigation</span> -->
                                    <i class="fa fa-bars fa-3x"></i>
                                </a> 
                                

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                  
                                </ul>
                        
                            </div>

                            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Profile Navigation</a>
                                    </li>

                                </ul>
                            </div>
              </nav>
          </header> 
          <?php
      }

      function main_footer(){
        ?>

        <script language="javascript">
            


        </script>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> Alpha
            </div>
            <strong>Copyright &copy; 2018 <a href="http://cravedigitalad.com/">Clinic Patients Information System</a>.</strong> All rights reserved.
        </footer>

        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <!-- Bootstrap JS FILES -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- jQuery 3 -->
        <script src="<?php echo base_url() ?>assets/theme/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 4-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- FastClick -->
        <script src="<?php echo base_url() ?>assets/theme/bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() ?>assets/theme/dist/js/adminlte.min.js"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url() ?>assets/theme/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- jvectormap  -->
        <script src="<?php echo base_url() ?>assets/theme/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo base_url() ?>assets/theme/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- SlimScroll -->
        <script src="<?php echo base_url() ?>assets/theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- ChartJS -->
        <script src="<?php echo base_url() ?>assets/theme/bower_components/chart.js/Chart.js"></script>

        <!-- fullCalendar -->
        <script src="<?php echo base_url() ?>assets/theme/bower_components/moment/moment.js"></script>
        <script src="<?php echo base_url() ?>assets/theme/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
        <!-- date-range-picker -->
        <script src="<?php echo base_url() ?>assets/theme/bower_components/moment/min/moment.min.js"></script>
        <script src="<?php echo base_url() ?>assets/theme/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap datepicker -->
        <script src="<?php echo base_url() ?>assets/theme/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script language="javascript">
            var baseUrl= '<?php echo base_url()?>';


            // setInterval(request(), 1000);
        </script>
    </body>
    </html>
    <?php
}

function sidebar_secretary($module,$submenu,$submenu1) {
    ?>

    <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);
        .active
        {
            color: white !important;
        }
        .active > a > span
        {
            color: #fff !important;
        }
        .sidebar-menu>li.active>a, .skin-blue .sidebar-menu>li.menu-open>a
        {
            background-color: #1baa7d;
        }
        .sidebar-menu>li:hover>a
        {
            color: white;
        }
        .sidebar-menu>li>a>.fa, .sidebar-menu>li>a>.glyphicon, .sidebar-menu>li>a>.ion
        {
            width: 30px;
        }
        .skin-blue .sidebar-menu>li.header 
        {
            color: #4b646f;
            background: #313e4b;
        }
        .sidebar-menu .anchor-side
        {
            font-size: 15px;
            color: #808b9c;
            font-family: 'Open Sans',serif !important;
            letter-spacing: 0.5px;
        }
        .sidebar-menu .anchor-side-small
        {
            font-size: 13px;
            color: #808b9c;
            font-family: 'Open Sans',serif !important;
            letter-spacing: 0.5px;
        }
    </style>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar" style="background-color: #313e4b">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <ul class="sidebar-menu" data-widget="tree" id="side">
                <li class="header"></li>

                <li class="<?php echo ($module=='dashboard') ? 'active' : ''; ?>" id="dash">
                    <a href="#secretary/dashboard"  class="links">
                        <i class="fa fa-2x fa-dashboard"></i> 
                        <span class="anchor-side"> Dashboard</span>
                    </a>
                </li>

                <li class="treeview <?php echo ($module=='patient') ? 'active' : ''; ?>">
                 <a id="treeview_anchor" href="#">
                    <i class="fa fa-2x fa-hospital-o"></i>
                    <span class="anchor-side"> Patients</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                 </a>
                <ul class="treeview-menu">
                    <li class="<?php echo ($submenu == 'new') ? 'active' : ''; ?>">
                        <a href="#secretary/patient_new"  class="links anchor-side-small">
                            <i class="fa fa-user-plus"></i> Add Patient
                        </a>
                    </li>
                    
                    <li class="<?php echo ($submenu == 'search') ? 'active' : ''; ?>">
                        <a href="#secretary/patient_list"  class="links anchor-side-small">
                            <i class="fa fa-search"></i> Patients list
                        </a>
                    </li>
                </ul>
                </li>




            <li class="treeview <?php echo ($module=='doctors') ? 'active' : ''; ?>">
               <a id="treeview_anchor" href="#">
                <i class="fa fa-2x fa-user-md"></i>
                <span class="anchor-side"> Doctors</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>

            <ul class="treeview-menu">
                <li class="<?php echo ($submenu == 'new_doctor') ? 'active' : ''; ?>">
                    <a href="#secretary/doctor_new"  class="links anchor-side-small">
                        <i class="fa fa-user-plus"></i> Add Doctor
                    </a>
                </li>

                <li class="<?php echo ($submenu == 'doctor_list') ? 'active' : ''; ?>">
                    <a href="#secretary/doctor_list"  class="links anchor-side-small">
                        <i class="fa fa-stethoscope"></i> Doctors List
                    </a>
                </li>
            </ul>
            </li>

            <li class="treeview <?php echo ($module=='patientdiagnosis') ? 'active' : ''; ?>">
                 <a id="treeview_anchor" href="#">
                    <i class="fa fa-2x fa-list-alt"></i>
                    <span class="anchor-side">Patients Diagnosis</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu">
                    <li class="<?php echo ($submenu == 'patientdia') ? 'active' : ''; ?>">
                        <a href="#secretary/diagnosis_list"  class="links anchor-side-small">
                            <i class="fa fa-list-alt"></i> Diagnosis List
                        </a>
                    </li>

                    <li class="<?php echo ($submenu == 'patientdia2') ? 'active' : ''; ?>">
                        <a href="#secretary/patient_diagnosis"  class="links anchor-side-small">
                            <i class="fa fa-th-list"></i> Patients Diagnosis
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                  <a id="treeview_anchor" href="#">
                    <i class="fa fa-2x fa-medkit"></i>
                    <span class="anchor-side">Medicines</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a> 


                <ul class="treeview-menu">
                    <li class="<?php echo ($submenu == 'addmedicine') ? 'active' : ''; ?>">
                        <a href="#secretary/medicine_new"  class="links anchor-side-small">
                            <i class="fa fa-plus-circle"></i> Add Medicine
                        </a>
                    </li>
                    <li class="<?php echo ($submenu == 'medicinelist') ? 'active' : ''; ?>">
                        <a href="#secretary/medicine_list"  class="links anchor-side-small">
                            <i class="fa fa-medkit"></i> Medicine List
                        </a>
                    </li>

                    <li class="<?php echo ($submenu == 'patientmedicine') ? 'active' : ''; ?>">
                        <a href="#secretary/patient_medicine"  class="links anchor-side-small">
                            <i class="fa fa-wheelchair"></i> Patients Medicine
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<?php
}


?>



