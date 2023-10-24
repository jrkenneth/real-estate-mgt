<?php
	$page_title = "Rent Notifications";

	include("_include/header.php");
?>
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->	
			<div class="page-titles">
				<ol class="breadcrumb">
					<li><h5 class="bc-title">View Rent Notifications</h5></li>
				</ol>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 bst-seller">
						<div class="d-flex align-items-center justify-content-between mb-4">
							<h4 class="heading mb-0">All Rent Notifications</h4>
						</div>
						<div class="card h-auto">
							<div class="card-body p-0">
								<div class="table-responsive active-projects style-1 dt-filter exports">
									<div class="tbl-caption">
									</div>
									<table id="customer-tbl" class="table shorting">
										<thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Tenant</th>
                                                <th>Property</th>
                                                <th>Landlord</th>
                                                <th>Notification Type</th>
                                                <th>Recipient</th>
                                                <th>Payment Due Date</th>
                                            </tr>
                                        </thead>
										<tbody>
											<tr>
												<td>
													<span>29 July 2020 - 12:24pm</span>
												</td>
												<td>
													<span>[Tenant_Name]</span>
												</td>
												<td>
													<span>[Property_title]</span>
												</td>
												<td>
													<span>[Landlord_Name]</span>
												</td>
												<td>
													<span class="badge badge-primary light border-0">SMS</span>
													<span class="badge badge-warning light border-0">Email</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Tenant</span>
													<span class="badge badge-danger light border-0">Landlord</span>
												</td>
												<td>
													<span>29 July 2020</span>
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
	include("_include/footer.php");
?>