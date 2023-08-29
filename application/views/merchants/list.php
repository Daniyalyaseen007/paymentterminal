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
                                    <li class="breadcrumb-item active" aria-current="page">Merchants</li>
                                    <li class="breadcrumb-item active" aria-current="page">All Merchants</li>
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
                                        <a href="<?=base_url()?>merchants/create" class="btn bg-danger-transparent text-danger btn-sm" data-bs-toggle="tooltip" title="" data-bs-placement="bottom" data-bs-original-title="Add New">
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
                                            <h3 class="card-title">Merchants List</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered text-nowrap border-bottom"
                                                    id="responsive-datatable">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-15p border-bottom-0">#</th>
                                                            <th class="wd-15p border-bottom-0">Merchant name (Team)</th>
                                                            <th class="wd-15p border-bottom-0">Merchant name (Admin)</th>
                                                            <th class="wd-20p border-bottom-0">Payment Link</th>
                                                            <th class="wd-20p border-bottom-0">Created At</th>
                                                            <th class="wd-15p border-bottom-0">Status</th>
                                                            <th class="wd-25p border-bottom-0">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                            <?php 
                                                            $count=0;
                                                            foreach($merchants as $merchant){
                                                            $statusbtn ='';
                                                            if($merchant['Status']==0){
                                                                $statusbtn = '<button class="btn btn-dager">In-Active</button>';
                                                            }
                                                            else{
                                                                $statusbtn = '<button class="btn btn-info">Active</button>';

                                                            }
                                                            $MerchantID = $merchant['MerchantID'];
                                                            ?>
                                                            <tr>
                                                                <td><?=$merchant['MerchantID']?></td>
                                                                <td><?=$merchant['M_DName']?></td>
                                                                <td><?=$merchant['M_RName']?></td>
                                                                <td><?=$merchant['paymentlink']?></td>
                                                                <td><?=date_format(date_create($merchant['created_at']),'d-M-Y h:i a')?></td>
                                                                <td><?=$statusbtn?></td>
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                                                            <i class="fe fe-edit"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a id="<?=$MerchantID?>" class="dropdown-item" href="javascript:void(0)" onclick="detailMerchant(this.id)">Details of Merchant</a>
                                                                            <a class="dropdown-item" href="<?=base_url()?>merchants/edit/<?=$MerchantID?>">Edit Merchant</a>
                                                                            <a id="<?=$MerchantID?>" class="dropdown-item" onclick="deleteMerchant(this.id)" href="javascript:void(0)">Delete Merchant</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
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