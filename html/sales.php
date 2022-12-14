<?php
session_start();
if (!($_SESSION['status'] == 'logedin')){
    header('Location: auth-login-basic.php');
}
?>
<!DOCTYPE html>
<!-- beautify ignore:start -->
<html>
<head>
    <meta charset="utf-8" />
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />
    
    <!-- Model CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/model.css">
    
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="index.php" class="app-brand-link">

                    <img src="../assets/img/logo1.png" style="width: 100%; max-width: 250px;"/>
                </a>
                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item active">
                    <a href="index.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>




                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Farmer Setup</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxs-user-detail"></i>
                        <div data-i18n="Account Settings">Farmer Agent</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="agent.php?Type=Farmer" class="menu-link">
                                <div data-i18n="Account">All Agent</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="agentadd.php" class="menu-link">
                                <div data-i18n="Account">Add Agent</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="agentreport.php" class="menu-link">
                                <div data-i18n="Account">View Report</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div data-i18n="Authentications">Farmer</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="farmer.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">All Farmers</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="farmeradd.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Add</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="advance.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Advance Setup</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="farmerreport.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">View Report</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-plus"></i>
                        <div data-i18n="Misc">More</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="tools.html" class="menu-link">
                                <div data-i18n="Error">Tools</div>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- Components -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Client Setup</span></li>
                <!-- Cards -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxs-user-detail"></i>
                        <div data-i18n="Account Settings">Client Agent</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="agent.php?Type=Client" class="menu-link">
                                <div data-i18n="Account">All Agent</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="agentadd.php" class="menu-link">
                                <div data-i18n="Account">Add Agent</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="agentreport.php" class="menu-link">
                                <div data-i18n="Account">View Report</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div data-i18n="Authentications">Client</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="client.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">All Client</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="clientadd.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Add</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="setup.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Other Setup</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="clientreport.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">View Report</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Forms & Tables -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Fat Calculate</span></li>
                <!-- Forms -->

                <!-- Tables -->
                <li class="menu-item">
                    <a href="fatfarmer.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-calculator"></i>
                        <div data-i18n="Tables">Farmer</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="fatagent.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-calculator"></i>
                        <div data-i18n="Tables">Agent</div>
                    </a>
                </li>
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Rate Setup</span></li>
                <!-- Forms -->

                <!-- Tables -->
                <li class="menu-item">
                    <a href="salesrate.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-money"></i>
                        <div data-i18n="Tables">Sales Rate</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="buyrate.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-money"></i>
                        <div data-i18n="Tables">Buy Rate</div>
                    </a>
                </li>
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Bill Entry</span></li>
                <!-- Forms -->

                <!-- Tables -->
                <li class="menu-item">
                    <a href="sales.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-bar-chart"></i>
                        <div data-i18n="Tables">Sales</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="expenses.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-bar-chart"></i>
                        <div data-i18n="Tables">Expenses</div>
                    </a>
                </li>
                <!-- Misc -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
                <li class="menu-item">
                    <a
                            href="support.php"
                            target="_blank"
                            class="menu-link"
                    >
                        <i class="menu-icon tf-icons bx bx-support"></i>
                        <div data-i18n="Support">Support</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="mailto:pritamdczar@gmail.com" class="menu-link" >
                        <i class="menu-icon tf-icons bx bx-phone"></i>
                        <div data-i18n="Support">Direct Contact</div>
                    </a>
                </li>
            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav
                    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar"
            >
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                            <i class="bx bx-search fs-4 lh-0"></i>
                            <input
                                    type="text"
                                    class="form-control border-0 shadow-none"
                                    placeholder="Search..."
                                    aria-label="Search..."
                            />
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- Place this tag where you want the button to render. -->
                        <?php
                        $a= $_SESSION['User'];
                        require_once 'Connection.php';
                        $sql = "SELECT * from admin where Email='$a'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($data = mysqli_fetch_array($result)) {
                                ?>

                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="../assets/img/<?php echo $data['Photo']; ?>" alt class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">


                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                            <img src="../assets/img/<?php echo $data['Photo']; ?>" alt class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="fw-semibold d-block"><?php echo $data['Name']; ?></span>
                                                        <small class="text-muted">Admin</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="bx bx-user me-2"></i>
                                                <span class="align-middle">My Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="bx bx-cog me-2"></i>
                                                <span class="align-middle">Settings</span>
                                            </a>
                                        </li>

                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="auth-login-basic.php">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <?php
                            }
                        }

                        ?>
                        <!--/ User -->
                    </ul>
                </div>
            </nav>
            <!-- / Navbar -->
            <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4">Expenses</h4>
<div>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float:center"><b>+ Add</b></button>

<div id="id01" class="modal">
    
    <form class="modal-content animate" action="expenses.php" method="post">
        <div class="container">
            <label for="uname"><b>Bill No.</b></label>
            <input type="number" class="form-control" name="uname" >
            <label for="uname"><b>Date</b></label>
            <input type="date" class="form-control" name="Date" /><br>
            <label for="uname"><b>Customer Name</b></label>
            <input type="text" class="form-control" name="uname" >
            <label for="uname"><b>Product Name</b></label>
            <input type="text" class="form-control" name="uname" >
            <label for="uname"><b>Price</b></label>
            <input type="number" class="form-control" name="uname" >
            
            <button type="submit">Save</button>     
        </div>
    </form>
    
    
    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) 
        {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</div>
</div>
                        <div class="row">
                            <div class="card">
                                <h5 class="card-header"><?php echo "$_GET[Type]"; ?> Expense Report</h5>
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-hover" >
                                        <thead>
                                        <tr>
                                            <th>Bill no.</th>
                                            <th>Date</th>
                                            <th>cusotmer name</th>
                                            <th>product name</th>
                                            <th>price</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                        <?php
                                        require_once 'Connection.php';
                                        $a=1;
                                        $i=$_GET['Type'];
                                        $sql = "SELECT * FROM agent where Type='$i'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                        while ($data = mysqli_fetch_array($result)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $a; ?></td>

                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $data['Name'];?></strong></td>
                                            <td><?php echo $data['Address'];?></td>
                                            <td><span class="badge bg-label-primary me-1"><?php echo $data['Contact'];?></span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="agentedit.php?id=<?php echo $data['Id'];?>">
                                                            <i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="dropdown-item" href="agentdelete.php?id=<?php echo $data['Id'];?>">
                                                            <i class="bx bx-trash me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                            <?php
                                            $a++;
                                        }

                                        }

                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        </div>
                    </div>
                    <!-- / Content -->




                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>
<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="../assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="../assets/js/main.js"></script>

<!-- Page JS -->
<script src="../assets/js/dashboards-analytics.js"></script>
<script src="../assets/js/pages-account-settings-account.js"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
