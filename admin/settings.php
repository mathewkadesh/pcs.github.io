<?php
include "db_connect.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PCS Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"
            style="background-color: #172b4d; background-image: none;">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Dashboard</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="geo.php">
                    <i class="fas fa-fw fa-map"></i>
                    <span>Geo</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="documents.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Documents</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="settings.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Settings</span></a>
            </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <nav class="navbar navbar-expand-lg navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="container-fluid">
                        <h1 class="h3 mt-3 text-gray-800 ">Profile</h1>
                        <div class="d-flex">
                            <!-- Nav Item - User Information -->
                            
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["loggedInUser"] ?></span>
                                    <img class="img-profile rounded-circle" src="img/man.png" style="width: 50px;">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                           
                        </div>
                    </div>
                </nav>
<!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="align-items-center mb-4">
                        
                        <div class="row">
                            <div class="col-6" style="padding: 0px 20px;">
                                <div class="card" style="border-radius: 20px;">
                                    <img src="img/man.png" class="card-img-top"
                                        style="width: 15rem; padding: 15px; display: block; margin-left: auto; margin-right: auto;">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold"
                                            style="color: black;margin-bottom: 25px;">My profile</h5>

                                        <div class="row ">
                                            <div class="col-4">
                                                <label class="col-form-label">Name</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div><br>

                                        <div class="row ">
                                            <div class="col-4">
                                                <label class="col-form-label">Email</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="email" class="form-control">
                                            </div>
                                        </div><br>
                                        
                                        <div class="row ">
                                            <div class="col-4">
                                                <label class="col-form-label">Contact number</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="number" class="form-control">
                                            </div>
                                        </div><br>

                                        <div class="row ">
                                            <div class="col-4">
                                                <label class="col-form-label">Password</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="password" class="form-control">
                                            </div>
                                            <div class="col-auto">
                                                <span class="form-text">
                                                    Must be 8-20 characters long.
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-6 " style="padding: 0px 20px;">
                                <div class="row">
                                    <div class="card" style="border-radius: 20px; width: 100%;">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold"
                                                style="color: black;margin-bottom: 25px;">Company profile</h5>

                                            <div class="row ">
                                                <div class="col-4">
                                                    <label class="col-form-label">Company name</label>
                                                </div>
                                                <div class="col-8">
                                                    <input type="text"  class="form-control">
                                                </div>
                                            </div><br>

                                            <div class="row ">
                                                <div class="col-4">
                                                    <label class="col-form-label">Account type</label>
                                                </div>
                                                <div class="col-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div><br>

                                            <div class="row ">
                                                <div class="col-4">
                                                    <label class="col-form-label">Address</label>
                                                </div>
                                                <div class="col-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div><br />


                                <div class="row">
                                    <div class="card" style="border-radius: 20px; width: 100%;">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold"
                                                style="color: black;margin-bottom: 25px;">Account details</h5>

                                            <div class="row ">
                                                <div class="col-4">
                                                    <label class="col-form-label">Bank</label>
                                                </div>
                                                <div class="col-8">
                                                    <input type="text"  class="form-control">
                                                </div>
                                            </div><br>

                                            <div class="row ">
                                                <div class="col-4">
                                                    <label class="col-form-label">Account number</label>
                                                </div>
                                                <div class="col-8">
                                                    <input type="number"  class="form-control">
                                                </div>
                                            </div><br>

                                          

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success" style="float: right; display: block; margin-left: auto; margin-right: auto; margin-top: 15px;">Save changes</button>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; MK 2022</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>