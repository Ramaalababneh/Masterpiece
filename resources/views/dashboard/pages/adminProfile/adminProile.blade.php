@extends('dashboard.layouts.master')
@section('content')
        <div class="body-wrapper">
            <!----------------------------------------------- Header ----------------------------------------------->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                            <i class="ti ti-bell-ringing"></i>
                            <div class="notification bg-danger rounded-circle"></div>
                        </a>
                    </li>
                </ul>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="../assets/images/profile/MyProfailPicture.jpeg" alt="" width="35" height="35" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="message-body">
                                    <a href="profail.html" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-user fs-6"></i>
                                        <p class="mb-0 fs-3">My Profile</p>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-settings"></i>
                                        <p class="mb-0 fs-3">Setting</p>
                                    </a>                    
                                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                </nav>
            </header>
            
            <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <!-- Main Wrapper -->
                    <div class="main-wrapper">
                        <!-- Page Wrapper -->
                        <div class="page-wrapper">
                            <div class="content container-fluid">
                                
                                <!-- Page Header -->
                                <div class="page-header">
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="page-title">Profile</h2>
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                                <li class="breadcrumb-item active">Profile</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Page Header -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="profile-header">
                                            <div class="row align-items-center">
                                                <div class="col-auto profile-image">
                                                    <a href="#">
                                                        <img class="rounded-circle" alt="User Image" src="../assets/images/profile/MyProfailPicture.jpeg" style="height: 100px; width: 100px;">
                                                    </a>
                                                </div>
                                                <div class="col ml-md-n2 profile-user-info">
                                                    <h4 class="user-name mb-0">Marah Abusaleh</h4>
                                                    <h6 class="text-muted">marah.abusaleh12@gmail.com</h6>
                                                    <div class="user-Location"><span><i class="ti ti-map-pins"></i></span> Irbid, Jordan</div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="profile-menu">
                                            <ul class="nav nav-tabs nav-tabs-solid">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#pass_tab">Password</a>
                                                </li>
                                            </ul>
                                        </div>	

                                        <div class="tab-content profile-tab-cont">
                                            <!-- Personal Details Tab -->
                                            <div class="tab-pane fade show active" id="per_details_tab">
                                                <!-- Personal Details -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title d-flex justify-content-between">
                                                                    <span>Personal Details</span> 
                                                                    <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><span><i class="ti ti-edit"></i></span></i>Edit</a>
                                                                </h5>
                                                                <div class="row">
                                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                                                                    <p class="col-sm-10">Marah Abusaleh</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Date of Birth</p>
                                                                    <p class="col-sm-10">13 Dec 200</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email</p>
                                                                    <p class="col-sm-10">marahabusaleh12@gmial.com</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
                                                                    <p class="col-sm-10">+962 7 9987 6142</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col-sm-2 text-muted text-sm-right mb-0">Address</p>
                                                                    <p class="col-sm-10 mb-0">Jordan, Irbid, Abd Alhamed Sharaf Street</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Edit Details Modal -->
                                                        <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog" style="height: 64%;">
                                                            <div class="modal-dialog modal-dialog-centered" role="document" >
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Personal Details</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 20px; height: 20px; padding-bottom: 20px;">
                                                                            <span><i class="ti ti-x"></i></span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form>
                                                                            <div class="row form-row">
                                                                                <div class="col-12 col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label>First Name</label>
                                                                                        <input type="text" class="form-control" value="Marah">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label>Last Name</label>
                                                                                        <input type="text"  class="form-control" value="Abusaleh">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <label>Date of Birth</label>
                                                                                        <div class="cal-icon">
                                                                                            <input type="date" class="form-control" value="13/12/2000">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label>Email</label>
                                                                                        <input type="email" class="form-control" value="marah.abusaleh12@gmail.com">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label>Mobile</label>
                                                                                        <input type="text" value="+962 7 9987 6142" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                    <label>Address</label>
                                                                                        <input type="text" class="form-control" value="Irbid, Jordan">
                                                                                    </div>
                                                                                </div>                                                                            
                                                                            </div>
                                                                            <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /Edit Details Modal -->
                                                    </div>
                                                </div>
                                                <!-- /Personal Details -->
                                            </div>
                                            <!-- /Personal Details Tab -->
                                            
                                            <!-- Change Password Tab -->
                                            <div id="pass_tab" class="tab-pane fade">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Change Password</h5>
                                                        <div class="row">
                                                            <div class="col-md-10 col-lg-6">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <label>Old Password</label>
                                                                        <input type="password" class="form-control">
                                                                    </div><br>
                                                                    <div class="form-group">
                                                                        <label>New Password</label>
                                                                        <input type="password" class="form-control">
                                                                    </div><br>
                                                                    <div class="form-group">
                                                                        <label>Confirm Password</label>
                                                                        <input type="password" class="form-control">
                                                                    </div><br>
                                                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Change Password Tab -->
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>			
                        </div>
                        <!-- /Page Wrapper -->
                    </div>
                    <!-- /Main Wrapper -->
                </div>
            </div>

            <!--///////////////////////////////////////// END Of Header /////////////////////////////////////////-->
        </div>
    </div>
    <!-- jQuery -->
        <script src="../assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
</body>