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
                                    <li class="breadcrumb-item active" aria-current="page">Brands</li>
                                    <li class="breadcrumb-item active" aria-current="page">Create New Brands</li>
                                </ol><!-- End breadcrumb -->
                                <div class="ms-auto">
                                    <div>
                                        <a href="<?=base_url()?>brands/list" class="btn bg-secondary-transparent text-secondary btn-sm"
                                            data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                                            data-bs-original-title="List Brands">
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
                                            <h3 class="card-title">New Brands Form</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <form method="post" action="<?=base_url()?>brands/edit_process" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <input class="form-control" value="<?=$SearchBrands[0]["BrandName"]?>" name="BrandName" placeholder="Enter Brands Name" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" value="<?=$SearchBrands[0]["BrandURL"]?>" name="BrandURL" placeholder="Brand Link" type="text">
                                                        <input class="form-control" value="<?=$SearchBrands[0]["BrandID"]?>" name="BrandID" placeholder="Brand Link" type="hidden">
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" value="<?=$SearchBrands[0]["BrandEmail"]?>" name="BrandEmail" placeholder="Enter Brand Email" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <input required name="BrandLogo" value="<?=$SearchBrands[0]["BrandLogo"]?>" type="file" class="dropify" data-height="200" >
                                                    </div>
                                                    <!-- <div class="col-sm-12 col-md-4 mb-4 mb-lg-0">
                                                    <input type="file" class="dropify" data-height="200" >
                                                </div> -->
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
