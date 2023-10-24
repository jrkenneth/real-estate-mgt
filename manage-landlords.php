<?php
	$page_title = "Manage Landlords";

	include("_include/header.php");
?>
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->	
			<div class="page-titles">
				<ol class="breadcrumb">
					<li><h5 class="bc-title">Manage Landlords</h5></li>
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
							<h4 class="heading mb-0">All Landlords</h4>
							<div class="d-flex align-items-center">
								<a class="btn btn-primary btn-sm ms-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Add Landlord</a>
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
                                                <th>Email Address</th>
                                                <th>Contact Number</th>
                                                <th>No. of Properties</th>
                                                <th></th>
                                            </tr>
                                        </thead>
										<tbody>
											<tr>
												<td><span>001</span></td>
												<td>
													<span>Ricky Seme</span>
												</td>
												<td>
													<span>rs@gmail.com</span>
												</td>
												<td>
													<span>+1 123 456 7890</span>
												</td>	
												<td>
													<span class="badge badge-danger light border-0">0</span>
												</td>
												<td>
													<a href="" class="btn btn-secondary">Edit</a>
													<a href="" class="btn btn-danger">Delete</a>
												</td>
											</tr>
											<tr>
												<td><span>001</span></td>
												<td>
													<span>Micky Seme</span>
												</td>
												<td>
													<span>ms@gmail.com</span>
												</td>
												<td>
													<span>+1 123 456 7890</span>
												</td>	
												<td>
													<span class="badge badge-primary light border-0">3</span>
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
	include("_include/add-landlord-modal-form.php");
	include("_include/footer.php");
?>