<?php
include "db_connect.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>PCS Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #172b4d; background-image: none;">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-text mx-3">Dashboard</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="geo.php">
                    <i class="fas fa-fw fa-map"></i>
                    <span>Geo</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="documents.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Documents</span></a>
            </li>
            <li class="nav-item">
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
                <!-- Topbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="container-fluid">
                        <h1 class="h3 mt-3 text-gray-800 ">Summary</h1>
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
                    <div class="d-sm-flex align-items-center justify-content-end mb-4">
                      
                        <button type="button" class="btn d-none d-sm-inline-block btn bg-success shadow-sm text-white"
                            data-toggle="modal" data-target="#exampleModalLong">
                            <i class="fas fa-tree fa-sm text-white-50" data-toggle="modal"
                                data-target="#exampleModalLong"></i>
                            Register New Project
                        </button>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Current Carbon Sequestration Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Current Carbon Sequestration Credits
                                            </div>
                                            <br />
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                1,000
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-coins fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Retired Carbon Sequestration Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Retired Carbon Sequestration Credits
                                            </div>
                                            <br />
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                749
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-leaf fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

<div class="row">
    <div class="col-3">
        <div class="card" style="background-color: #b4f2e2;">
        <div class="card-body" style="padding-bottom: 0.5rem;">
            <h3 style="color: black;">Amazon Project</h3>
            <div style="color: black; line-height: normal;">250 credits<br/>
            25th Nov 2021</div>
        </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="background-color: #f8b5c5;">
        <div class="card-body" style="padding-bottom: 0.5rem;">
            <h3 style="color: black;">Sinharaja </h3>
            <div style="color: black; line-height: normal;">100 credits<br/>
            3rd Dec 2022</div>
        </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="background-color: #ffe3a3;">
        <div class="card-body" style="padding-bottom: 0.5rem;">
            <h3 style="color: black;">Yaala Project</h3>
            <div style="color: black; line-height: normal;">500 credits<br/>
            1st Jan 2020</div>
        </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="background-color: #b7dbe7;">
        <div class="card-body" style="padding-bottom: 0.5rem;">
            <h3 style="color: black;">PCH La Naveta</h3>
            <div style="color: black; line-height: normal;">150 credits<br/>
            9th Mar 2022</div>
        </div>
        </div>
    </div>
</div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

            <!-- Button trigger modal -->

            <!-- Register Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document" style="width: 80%">
                    <div class="modal-content" style="padding: 20px">
                        <div class="modal-header" style="text-align: center">
                            <h2 class="modal-title" id="exampleModalLongTitle" style="color: black; font-weight: bold">
                                Registration Form
                            </h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <h4 style="color: black; font-weight: 500">
                                    Company Information
                                </h4>
                                <label class="mt-2" style="color: black">Name</label>
                                <input type="text" class="form-control" id="" />
                                <label class="mt-4" style="color: black">Address</label>
                                <input type="text" class="form-control" id="" />
                                <div class="row">
                                    <div class="col-4">
                                        <label class="mt-4" style="color: black">Country</label><br />
                                        <a style="width: 100%" class="btn btn-secondary dropdown-toggle" href="#"
                                            role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Country
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Sri Lanka</a>
                                            <a class="dropdown-item" href="#">USA</a>
                                            <a class="dropdown-item" href="#">Japan</a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label class="mt-4" style="color: black">State</label><br />
                                        <a style="width: 100%" class="btn btn-secondary dropdown-toggle" href="#"
                                            role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            State
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Colombo</a>
                                            <a class="dropdown-item" href="#">Jaffna</a>
                                            <a class="dropdown-item" href="#">Galle</a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label class="mt-4" style="color: black">Town</label><br />
                                        <a style="width: 100%" class="btn btn-secondary dropdown-toggle" href="#"
                                            role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Town
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Wellawatha</a>
                                            <a class="dropdown-item" href="#">Fort</a>
                                            <a class="dropdown-item" href="#">Wattala</a>
                                        </div>
                                    </div>
                                </div>

                                <br />
                                <hr />
                                <h4 style="color: black; font-weight: 500">
                                    Project Information
                                </h4>
                                <label class="mt-4" style="color: black">Type of project</label>
                                <input type="text" class="form-control" id="" />
                                <label class="mt-4" style="color: black">General description of the project</label>
                                <textarea class="form-control" rows="3"></textarea>
                                <label class="mt-4" style="color: black">Owner</label>
                                <input type="text" class="form-control" id="" />
                                <label class="mt-4" style="color: black">Address</label>
                                <input type="text" class="form-control" id="" />
                                <label class="mt-4" style="color: black">Types of Species planted/ Intend to
                                    plant</label>
                                <input type="text" class="form-control" id="" />
                                <label class="mt-4" style="color: black">Size of the project</label>
                                <input type="text" class="form-control" id="" />

                                <br />
                                <hr />
                                <h4 style="color: black; font-weight: 500">
                                    Contact Information
                                </h4>
                                <label class="mt-4" style="color: black">Name</label>
                                <input type="text" class="form-control" id="" />
                                <label class="mt-4" style="color: black">Email</label>
                                <input type="text" class="form-control" id="" />
                                <label class="mt-4" style="color: black">Contact number</label>
                                <input type="text" class="form-control" id="" />

                                <input class="mt-4" type="checkbox" />
                                <label class="mt-4 ml-2" style="color: black">I authorize and accept the processing of
                                    personal
                                    data.</label><br />
                                <input type="checkbox" />
                                <label class="ml-2" style="color: black">I accept the terms and conditions.</label>
                            </div>
                            <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn btn-primary">
                                Save changes
                            </button>
                            <button type="button" class="btn btn-success" data-dismiss="modal" data-toggle="modal"
                                data-target="#paymentModal">
                                Make payment >>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Modal -->
            <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModal"
                aria-hidden="true">
                <div class="modal-dialog" role="document" style="width: 80%">
                    <div class="modal-content" style="padding: 20px">
                        <div class="modal-header" style="text-align: center">
                            <h2 class="modal-title" id="exampleModalLongTitle" style="color: black; font-weight: bold">
                                Payment In
                            </h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <h5 style="color: black; font-weight: 500">
                                    How do you want to pay?
                                </h5>

                                <div class="card" style="width: 18rem">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8" style="padding: 10px 0 10px 10px">
                                                <input type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                                                <label> Credit/Debit Card </label>
                                            </div>

                                            <div class="col-md-4">
                                                <img src="img/visa.png" style="width: 50px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br />
                                <div class="card" style="width: 18rem">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8" style="padding: 10px 0 10px 10px">
                                                <input type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                                                <label>PayPal</label>
                                            </div>

                                            <div class="col-md-4">
                                                <img src="img/paypal.png" style="width: 50px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal"
                                data-target="#exampleModalLong">
                                Back
                            </button>
                            <button type="button" class="btn btn-primary">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
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
                <div class="modal-body">
                    Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">
                        Cancel
                    </button>
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