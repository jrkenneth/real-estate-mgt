<?php
	$page_title = "Users and Roles";

	$picture_label = "Select Profile Picture";
	$first_name = "";
	$last_name = "";
	$email_address = "";
	$contact_number = "";
	$location = "";	
	$ad_option = "";
	$ed_option = "";
	$ag_option = "";

	include("_include/header.php");
?>
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->	
			<div class="page-titles">
				<ol class="breadcrumb">
					<li><h5 class="bc-title">Users and Roles</h5></li>
				</ol>
                </div>
			<div class="container-fluid">
				<div class="row">
					<?php 
						include("_include/alerts.php"); 
						include("_include/update-forms.php"); 
					?>

					<div class="d-flex justify-content-between align-items-center mb-4">
						<h4 class="heading mb-0">Manage Users</h4>
						<div class="d-flex align-items-center">
							<a class="btn btn-primary btn-sm ms-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Add User</a>
							<!--<a class="btn btn-secondary btn-sm ms-2" data-bs-toggle="offcanvas" href="#offcanvasRoles" role="button" aria-controls="offcanvasRoles">Manage Roles</a>-->
						</div>
					</div>
					<div class="col-xl-12 active-p">
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-list" role="tabpanel">
							<div class="row">
								<div class="col-xl-3 col-lg-4 col-sm-6">
									<div class="card">
										<div class="card-body">
											<div class="card-use-box">
												<div class="crd-bx-img">
													<img src="images/profile/friends/f1.jpg" class="rounded-circle" alt="">
												</div>
												<div class="card__text">
													<h4 class="mb-0">Sophia Ava</h4>
													<p>demo11@gmail.com</p>
												</div>
												<ul class="post-pos">
													<li>
														<span class="card__info__stats">Phone Number: </span>
														<span>[Phone_number]</span>
													</li>
													<li>
														<span class="card__info__stats">ID: </span>
														<span>[Username]</span>
													</li>
													<li>
														<span class="card__info__stats">Role: </span>
														<span class="badge badge-secondary light border-0">Agent</span>
														<span class="badge badge-warning light border-0">Admin</span>
														<span class="badge badge-primary light border-0">Editor</span>
													</li>
													<li>
														<span class="card__info__stats">Status: </span>
														<span class="badge badge-warning light border-0">Pending</span>
														<span class="badge badge-success light border-0">Active</span>
														<span class="badge badge-danger light border-0">Suspended</span>
													</li>
													<li>
														<span class="card__info__stats">Last Login: </span>
														<span>15 Feb 2023 - 2:23pm</span>
													</li>
												</ul>
												<div>
													<a href="javascript:void(0)" title="Edit User" class="btn btn-secondary btn-sm ms-2"><i class="fa fa-pencil"></i></a>
													<a href="javascript:void(0)" title="Suspend User" class="btn btn-warning btn-sm ms-2"><i class="fas fa-times"></i></a>
													<a href="javascript:void(0)" title="Delete User" class="btn btn-danger btn-sm ms-2"><i class="fa fa-trash"></i></a>
												</div>	
											</div>
										</div>
									</div>
								</div>
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
	include("_include/add-user-modal-form.php");
	//include("_include/manage-roles-modal-form.php");
	include("_include/footer.php");
?>