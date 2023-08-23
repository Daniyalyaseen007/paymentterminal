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
                                    <li class="breadcrumb-item active" aria-current="page">Merchants</li>
                                    <li class="breadcrumb-item active" aria-current="page">Create New Merchant</li>
                                </ol><!-- End breadcrumb -->
                                <div class="ms-auto">
                                    <div>
                                        <a href="<?=base_url()?>merchants/list" class="btn bg-secondary-transparent text-secondary btn-sm"
                                            data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                                            data-bs-original-title="List Merchant">
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
                                            <h3 class="card-title">New Merchant Form</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <form method="post" action="<?=base_url()?>merchants/process">
                                                    <div class="form-group">
                                                        <input class="form-control" required name="M_DName" placeholder="Enter Merchant Name For Sales Team Like 1.0 or 2.0"
                                                            type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" required name="M_RName" placeholder="Enter Real Merchant Name Stripe or Paypal" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" required name="paymentlink" placeholder="Enter Payment Link like https://checkout.xetrocube.co.uk/token/" type="text">
                                                        <input type="hidden" id="boxnumber" name="boxnumber" value="0" class="form-control"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <div id="field"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <button type="button" onclick="addfield()" class="input-group-text btn btn-primary text-white"
                                                                id="showBtn">
                                                                <i class="ion-plus" id="eyeOpen"></i>
                                                            </button>
                                                        </div>

                                                    </div>
                                                    <button class="btn ripple btn-primary">Submit</button>
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
