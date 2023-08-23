<!-- MAIN-CONTENT -->
                <div class="main-content app-content">
                    <div class="side-app">
                        <!-- CONTAINER -->
                        <div class="main-container container-fluid">
                                
                            <!-- PAGE HEADER -->
                            <div class="page-header d-sm-flex d-block">
                                <ol class="breadcrumb mb-sm-0 mb-3">
                                    <!-- breadcrumb -->
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                                    <li class="breadcrumb-item active" aria-current="page">Add New User</li>
                                </ol><!-- End breadcrumb -->
                                <div class="ms-auto">
                                    <div>
                                        <a href="<?=base_url()?>users/list" class="btn bg-secondary-transparent text-secondary btn-sm"
                                            data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                                            data-bs-original-title="List Users">
                                            <span>
                                                <i class="fa fa-align-justify"></i>
                                            </span>
                                        </a>
                                        <a href="<?=base_url()?>lockscreen" class="btn bg-primary-transparent text-primary mx-2 btn-sm"
                                            data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                                            data-bs-original-title="lock">
                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE HEADER -->

                            <!-- ROW -->
                            <div class="row row-deck">
                                <div class="col-lg-6 col-md-">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <h3 class="card-title">New User Form</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <form id="" method="post" action="<?=base_url()?>users/process">
                                                    <div class="row">
                                                        <div class="col-md-5 mb-3">
                                                            <input name="UserFirstName" onkeyup="generate_userName()" class="form-control" id="UserFirstName" placeholder="First Name" type="text">
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input name="UserLastName" onkeyup="generate_userName()" class="form-control" id="UserLastName" placeholder="Last Name" type="text">
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input onkeyup="verifyUserName()" name="UserName" id="UserName" class="form-control" placeholder="User Name" type="text">
                                                            <div class="invalid-feedback">User Name Already Exists.</div>
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input name="UserPass" class="form-control" placeholder="Password" type="password">
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input name="UserEmail" class="form-control" placeholder="Email" type="email">
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input name="UserNumber" class="form-control" placeholder="Phone Numver" type="text">
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input name="UserRole" class="form-control" placeholder="Role" type="text">
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input name="UserType" class="form-control" placeholder="Type" type="text">
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input name="UserLead" class="form-control" placeholder="Team Lead" type="text">
                                                        </div>
                                                    </div>
                                                    <button style="width:100%;" class="btn ripple btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->
                        </div>
                    </div>
                                    </div>
                <!-- END MAIN-CONTENT -->
