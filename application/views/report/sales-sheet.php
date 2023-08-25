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
                                    <li class="breadcrumb-item active" aria-current="page">Payment Links</li>
                                    <li class="breadcrumb-item active" aria-current="page">All Payment Links</li>
                                </ol><!-- End breadcrumb -->
                                <div class="ms-auto">
                                    <div>
                                        <a href="<?=base_url()?>https://laravelui.spruko.com/sparic/lockscreen" class="btn bg-primary-transparent text-primary mx-2 btn-sm"
                                            data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                                            data-bs-original-title="lock">
                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                        <a href="<?=base_url()?>links/create" class="btn bg-danger-transparent text-danger btn-sm" data-bs-toggle="tooltip" title="" data-bs-placement="bottom" data-bs-original-title="Add New">
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
                                            <h3 class="card-title">Payment Link List</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered text-nowrap border-bottom"
                                                    id="responsive-datatable">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-15p border-bottom-0">#</th>
                                                            <th class="wd-15p border-bottom-0">Payment Date</th>
                                                            <th class="wd-15p border-bottom-0">Transction ID</th>
                                                            <th class="wd-20p border-bottom-0">Customer Name</th>
                                                            <th class="wd-20p border-bottom-0">Customer Email</th>
                                                            <th class="wd-20p border-bottom-0">Customer Number</th>
                                                            <th class="wd-20p border-bottom-0">Source</th>
                                                            <th class="wd-20p border-bottom-0">Region</th>
                                                            <th class="wd-20p border-bottom-0">Type</th>
                                                            <th class="wd-20p border-bottom-0">Total Amount</th>
                                                            <th class="wd-20p border-bottom-0">Paid Amount</th>
                                                            <th class="wd-20p border-bottom-0">Remaining</th>
                                                            <th class="wd-20p border-bottom-0">Agent Name</th>
                                                            <th class="wd-20p border-bottom-0">Merchant Name</th>
                                                            <th class="wd-20p border-bottom-0">Service Name</th>
                                                            <th class="wd-20p border-bottom-0">Brand Name</th>
                                                            <th class="wd-15p border-bottom-0">Status</th>
                                                            <th class="wd-25p border-bottom-0">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                            <?php 
                                                            $count=0;
                                                            foreach($links as $link){
                                                            $statusbtn ='';
                                                            if($link['LinkStatus']==0){
                                                                $statusbtn = '<button class="btn btn-danger">Pending</button>';
                                                            }
                                                            else{
                                                                $statusbtn = '<button class="btn btn-info">Paid</button>';

                                                            }
                                                            //$ServiceID = $service["ServiceID"];
                                                            ?>
                                                            <tr>
                                                                <td><?=++$count;?></td>
                                                                <td><?=$link["M_DName"]?></td>
                                                                <td><?=$link["BrandName"]?></td>
                                                                <td><?=$link["ServiceName"]?></td>
                                                                <td><?=$link["UserFirstName"].' '.$link["UserLastName"]?></td>
                                                                <td><?=$link["customerName"]?></td>
                                                                
                                                                <td><?=number_format($link["amount"],2).' '.$link["CurrencySign"]?></td>
                                                                <td><?=number_format($link["tax"],2).' %'?></td>
                                                                <td><?=number_format($link["remaining_amount"],2).' '.$link["CurrencySign"]?></td>
                                                                <td>
                                                                    <input style="display:none" type="text" value="<?=$link["paymentLink"]?>" id="myInput">
                                                                    <button onclick="myFunction()" class="btn btn-success">Copy The Link</button>
                                                                </td>
                                                                <td><?=$statusbtn?></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <!--<td><?=$service['ServiceName']?></td>
                                                                <td><?=date_format(date_create($service['Ser_created_at']),'d-M-Y h:i a')?></td>
                                                                <td><?=$statusbtn?></td>
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                                                            <i class="fe fe-edit"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="<?=base_url()?>services/edit/<?=$ServiceID?>">Edit Service</a>
                                                                            <a id="<?=$ServiceID?>" class="dropdown-item" onclick="deleteService(this.id)" href="javascript:void(0)">Delete Service</a>
                                                                        </div>
                                                                    </div>
                                                                </td>-->
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