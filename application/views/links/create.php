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
                                    <li class="breadcrumb-item active" aria-current="page">Payment Link</li>
                                    <li class="breadcrumb-item active" aria-current="page">Create Payment Link</li>
                                </ol><!-- End breadcrumb -->
                                <div class="ms-auto">
                                    <div>
                                        <a href="<?=base_url()?>services/list" class="btn bg-secondary-transparent text-secondary btn-sm"
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
                                <div class="col-lg-3 col-md-"></div>
                                <div class="col-lg-6 col-md-">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <h3 class="card-title">Create Payment Link</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <form id="paymentform" method="post" action="<?=base_url()?>links/process">
                                                    <div class="row">
                                                        <div class="col-md-5 mb-3">
                                                            <select name="merchant" required class="form-control">
                                                                <option value="">Select Merchant</option>
                                                                <?php 
                                                                foreach($allmerchants as $merchants){
                                                                ?>
                                                                <option value="<?=$merchants['MerchantID']?>"><?=$merchants['M_DName']?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <select name="brand" required class="form-control">
                                                                <option value="">Select Brand</option>
                                                                <?php 
                                                                foreach($allbrands as $brands){
                                                                ?>
                                                                <option value="<?=$brands['BrandID']?>"><?=$brands['BrandName']?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <select name="services" required class="form-control">
                                                                <option value="">Select Service</option>
                                                                <?php 
                                                                foreach($allservices as $services){
                                                                ?>
                                                                <option value="<?=$services['ServiceID']?>"><?=$services['ServiceName']?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <select name="agent" required class="form-control">
                                                                <option value="">Select Agent</option>
                                                                <?php 
                                                                foreach($allusers as $users){
                                                                ?>
                                                                <option value="<?=$users['UserID']?>"><?=$users['UserFirstName'].' '.$users['UserLastName']?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input name="customerName" required class="form-control" placeholder="Enter Customer Name" type="text">
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <select name="currency" required class="form-control">
                                                                <option value="">Select Currency</option>
                                                                <?php 
                                                                foreach($allcurrency as $currency){
                                                                ?>
                                                                <option value="<?=$currency['CurrencyID']?>"><?=$currency['CurrencySymbol']?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <input name="amount" required class="form-control" placeholder="Enter your Amount" type="number">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <input name="remaining_amount" class="form-control" placeholder="Enter Remaining Amount" type="number">
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <input name="tax" class="form-control" placeholder="Enter Tax in %" type="number" min="1" max="100">
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <button style="width:100%;" type="submit" class="btn ripple btn-primary">Submit</button>  
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-12">
                                                <div id="res">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->
                        </div>
                    </div>
                                    </div>
                <!-- END MAIN-CONTENT -->
