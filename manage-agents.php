<?php
	$page_title = "Manage Agents";

	include("_include/header.php");
?>
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->	
			<div class="page-titles">
				<ol class="breadcrumb">
					<li><h5 class="bc-title">Manage Agents</h5></li>
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
							<h4 class="heading mb-0">All Agents</h4>
							<div class="d-flex align-items-center">
								<a class="btn btn-primary btn-sm ms-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Add Agent</a>
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
                                                <th>Location</th>
                                                <th>Status</th>
                                                <th>Last Login</th>
                                                <th>Dashboard Access</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
										<tbody>
											<tr>
												<td><span>001</span></td>
												<td>
													<div class="products">
														<img src="images/contacts/pic1.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="app-profile-2.html">Ricky Seme</a></h6>
															<span>rs@gmail.com</span>	
														</div>	
													</div>
												</td>
												<td>
													<span>+1 123 456 7890</span>
												</td>	
												<td>
													<span>USA</span>
												</td>
												<td>
													<span class="badge badge-warning light border-0">Pending</span>
													<span class="badge badge-success light border-0">Active</span>
													<span class="badge badge-danger light border-0">Suspended</span>
												</td>
												<td>
													29 July 2020 - 02:26 PM
												</td>
												<td>
													<a class="btn btn-success">Approve <span class="btn-icon-end"><i class="fa fa-check"></i></span></a>
													<a class="btn btn-warning">Suspend <span class="btn-icon-end"><i class="fas fa-times"></i></span></a>
												</td>
												<td>
													<a href="manage-agents.php?target=update-agent" class="btn btn-secondary">Edit</a>
												</td>
												<td>
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
	include("_include/add-agent-modal-form.php");
	include("_include/footer.php");
?>