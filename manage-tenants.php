<?php
	$page_title = "View Tenants";

	include("_include/header.php");
?>
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->	
			<div class="page-titles">
				<ol class="breadcrumb">
					<li><h5 class="bc-title">View All Tenants</h5></li>
				</ol>
			</div>
			<div class="container-fluid">
				<div class="row">
					<?php 
						include("_include/alerts.php"); 
						include("_include/update-forms.php"); 
					?>

					<div class="col-xl-12 bst-seller">
						<div class="d-flex align-items-center justify-content-between mb-4">
							<h4 class="heading mb-0">All Tenants</h4>
							<div class="d-flex align-items-center">
								<a class="btn btn-primary btn-sm ms-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Add Tenant</a>
							</div>
						</div>
						<div class="card h-auto">
							<div class="card-body p-0">
								<div class="table-responsive active-projects style-1 dt-filter exports">
									<div class="tbl-caption">
									</div>
									<table id="customer-tbl" class="table shorting">
										<thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Contact Number</th>
                                                <th>Property</th>
                                                <th>Flat No.</th>
                                                <th>Rent Amount</th>
                                                <th>Pmt. Frequency</th>
                                                <th>Last Pmt. Date</th>
                                                <th>Next Pmt. Date</th>
                                                <th>Residency Status</th> 
                                                <th>Rent Notifications</th>
                                                <th></th>
                                            </tr>
                                        </thead>
										<tbody>
											<tr>
												<td><span>001</span></td>
												<td>
													<div class="products">
														<div>
															<h6><a href="app-profile-2.html">Ricky Seme</a></h6>
															<span>rs@gmail.com</span>	
														</div>	
													</div>
												</td>
												<td>
													<span>[Phone_number]</span>
												</td>
												<td>
													<span>[Property_title]</span>
												</td>
												<td>
													<span>[Flat_number]</span>
												</td>
												<td>
													<span>[Rent_Amount]</span>
												</td>
												<td>
													<span class="badge badge-warning light border-0">[Daily/Weekly/Monthly/Quarterly/Semi-Annually/Annually]</span>
												</td>
												<td>
													<span>29 July 2020</span>
												</td>
												<td>
													<span>29 July 2020</span>
												</td>
												<td>
													<span class="badge badge-primary light border-0">[Occupied = 1 | Relocated = 0 if not listed, 2 if listed]</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Enabled</span>
													<span class="badge badge-danger light border-0">Disabled</span>
													<div style="width: 100%; height: 10px;"></div>
													<a href="" style="color: #327da8;  font-weight: bold;">[Enable/Disable] Notifications</a>
												</td>
												<td>
													<a href="" class="btn btn-secondary">Edit</a>
													<a href="" class="btn btn-danger">Delete</a>
												</td>
											</tr>
										</tbody>
										
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
        </div>
		
        <!--**********************************
            Content body end
        ***********************************-->
		
<?php
	include("_include/add-tenant-modal-form.php");
	include("_include/footer.php");
?>