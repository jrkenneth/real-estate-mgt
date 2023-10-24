<?php
	$page_title = "Manage Properties";

	include("_include/header.php");
?>
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->	
			<div class="page-titles">
				<ol class="breadcrumb">
					<li><h5 class="bc-title">Manage Properties</h5></li>
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
							<h4 class="heading mb-0">All Properties</h4>
							<div class="d-flex align-items-center">
								<a class="btn btn-primary btn-sm ms-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Add Property</a>
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
                                                <th>Landlord/Owner</th>
                                                <th>Title</th>
                                                <th>Property Type</th>
                                                <th>Location</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
										<tbody>
											<tr>
												<td><span>001</span></td>
												<td>
													<span>[Landlord]</span>
												</td>
												<td>
													<span>[Property_title]</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Rent</span>
													<div style="width: 100%; height: 10px;"></div>
													<a href="" style="color: #327da8; font-weight: bold;">Manage Tenants <span class="badge badge-primary light border-0">0</span></a>
												</td>
												<td>
													<span>[Full_Location]</span>
												</td>
												<td>
													<a href="" style="color: #327da8;  font-weight: bold;">Manage Listings <span class="badge badge-primary light border-0">0</span></a>
												</td>
												<td>
													<a href="" class="btn btn-secondary">Edit</a>
													<a href="" class="btn btn-danger">Delete</a>
												</td>
											</tr>
											<tr>
												<td><span>002</span></td>
												<td>
													<span>[Owner]</span>
												</td>
												<td>
													<span>[Property_title]</span>
												</td>
												<td>
													<span class="badge badge-warning light border-0">Sale</span>
												</td>
												<td>
													<span>[Full_Location]</span>
												</td>
												<td>
													<a href="" style="color: #327da8;  font-weight: bold;">[Create/Manage] Listing</a>
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
	include("_include/add-property-modal-form.php");
	include("_include/footer.php");
?>