
<?php 
include_once("../../header.php"); 
include_once("../../account.php"); 
if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../../login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user_info']);
	header("location: ../../login.php");
}
include 'action.php';
$invoice = new Invoice();
if(!empty($_POST['companyName']) && $_POST['companyName']) {	
	$invoice->saveInvoice($_POST);
	header("Location:index.php");	
}
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        
        <?php include_once("../../sidebar.php"); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['user_info']['first_name']?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" name="logout" href="../index.php?logout='1'">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Create an Invoice</h1>
                    <form action="" id="invoice-form" method="post" class="invoice-form" role="form" novalidate="">
<div class="load-animate animated fadeInUp">
<input id="currency" type="hidden" value="$">
<div class="row">
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<h3>From,</h3>
<?php echo $_SESSION['user_info']['first_name'].' '.$_SESSION['user_info']['last_name']; ?><br>
<?php echo 'delh, India' ?><br>
<?php echo $_SESSION['user_info']['mobile']; ?><br>
<?php echo $_SESSION['user_info']['email']; ?><br>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
<h3>To,</h3>
<div class="form-group">
<input type="text" class="form-control" name="companyName" id="companyName" placeholder="Company Name" autocomplete="off">
</div>
<div class="form-group">
<textarea class="form-control" rows="3" name="address" id="address" placeholder="Your Address"></textarea>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<table class="table table-bordered table-hover" id="invoiceItem">
<tr>
<th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
<th width="15%">Item No</th>
<th width="38%">Item Name</th>
<th width="15%">Quantity</th>
<th width="15%">Price</th>
<th width="15%">Total</th>
</tr>
<tr>
<td><input class="itemRow" type="checkbox"></td>
<td><input type="text" name="productCode[]" id="productCode_1" class="form-control" autocomplete="off"></td>
<td><input type="text" name="productName[]" id="productName_1" class="form-control" autocomplete="off"></td>
<td><input type="number" name="quantity[]" id="quantity_1" class="form-control quantity" autocomplete="off"></td>
<td><input type="number" name="price[]" id="price_1" class="form-control price" autocomplete="off"></td>
<td><input type="number" name="total[]" id="total_1" class="form-control total" autocomplete="off"></td>
</tr>
</table>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<button class="btn btn-danger delete" id="removeRows" type="button">- Delete</button>
<button class="btn btn-success" id="addRows" type="button">+ Add More</button>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
<h3>Notes: </h3>
<div class="form-group">
<textarea class="form-control txt" rows="5" name="notes" id="notes" placeholder="Your Notes"></textarea>
</div>
<br>
<div class="form-group">
<input type="hidden" value="<?php echo $_SESSION['user_info']['id']; ?>" class="form-control" name="userId">
<input data-loading-text="Saving Invoice..." type="submit" name="invoice_btn" value="Save Invoice" class="btn btn-success submit_btn invoice-save-btm">
</div>
</div>
<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
<span class="form-inline">
<div class="form-group">
<label>Subtotal:($)  </label>
<div class="input-group">
<input value="" type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal">
</div>
</div>
<div class="form-group">
<label>Tax Rate:(%)  </label>
<div class="input-group">
<input value="" type="number" class="form-control" name="taxRate" id="taxRate" placeholder="Tax Rate">
</div>
</div>
<div class="form-group">
<label>Tax Amount:($)  </label>
<div class="input-group">
<input value="" type="number" class="form-control" name="taxAmount" id="taxAmount" placeholder="Tax Amount">
</div>
</div>
<div class="form-group">
<label>Total:($)  </label>
<div class="input-group">
<input value="" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total">
</div>
</div>
<div class="form-group">
<label>Amount Paid:($)  </label>
<div class="input-group">
<input value="" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Amount Paid">
</div>
</div>
<div class="form-group">
<label>Amount Due:($)  </label>
<div class="input-group">
<input value="" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Amount Due">
</div>
</div>
</span>
</div>
</div>
<div class="clearfix"></div>
</div>
</form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
    <?php
include_once("../../footer.php"); 
?>