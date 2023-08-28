<!-- MAIN-CONTENT -->
                <div class="main-content app-content">
                    <div class="side-app">
                        <!-- CONTAINER -->
                        <div class="main-container container-fluid">
                                
                            <!-- PAGE-HEADER -->
                            <div class="page-header d-sm-flex d-block">
                                <ol class="breadcrumb mb-sm-0 mb-3">
                                    <!-- breadcrumb -->
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Brands</li>
                                    <li class="breadcrumb-item active" aria-current="page">All Brands</li>
                                </ol><!-- End breadcrumb -->
                                <div class="ms-auto">
                                    <div>
                                        <a href="https://laravelui.spruko.com/sparic/lockscreen" class="btn bg-primary-transparent text-primary mx-2 btn-sm"
                                            data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                                            data-bs-original-title="lock">
                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                        <a href="<?=base_url()?>brands/create" class="btn bg-danger-transparent text-danger btn-sm" data-bs-toggle="tooltip" title="" data-bs-placement="bottom" data-bs-original-title="Add New">
                                            <span>
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE-HEADER -->

                            <!-- ROW -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Brands List</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered text-nowrap border-bottom"
                                                    id="responsive-datatable">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-15p border-bottom-0">#</th>
                                                            <th class="wd-15p border-bottom-0">Brand Name</th>
                                                            <th class="wd-15p border-bottom-0">Brand Logo</th>
                                                            <th class="wd-20p border-bottom-0">Brand URL</th>
                                                            <th class="wd-20p border-bottom-0">Brand Email</th>
                                                            <th class="wd-20p border-bottom-0">Created At</th>
                                                            <th class="wd-15p border-bottom-0">Status</th>
                                                            <th class="wd-25p border-bottom-0">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                            <?php 
                                                            $count=0;
                                                            foreach($brands as $brand){
                                                            $statusbtn ='';
                                                            if($brand['BStatus']==0){
                                                                $statusbtn = '<button class="btn btn-dager">In-Active</button>';
                                                            }
                                                            else{
                                                                $statusbtn = '<button class="btn btn-info">Active</button>';

                                                            }
                                                            ?>
                                                            <tr>
                                                                <td><?=++$count?></td>
                                                                <td><?=$brand['BrandName']?></td>
                                                                <td>
                                                                    <img height="100px" width="150px" src="<?=base_url().'brand-logo/'.$brand['BrandLogo']?>">
                                                                </td>
                                                                <td><?=$brand['BrandURL']?></td>
                                                                <td><?=$brand['BrandEmail']?></td>
                                                                <td><?=date_format(date_create($brand['Created']),'d-M-Y h:i a')?></td>
                                                                <td><?=$statusbtn?></td>
                                                                <td><?=$statusbtn?></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                        
                                                    </tbody>
                                                </table>
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