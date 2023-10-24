
<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
		  <div class="offcanvas-header">
		  <h5 class="modal-title" id="#gridSystemModal">Add User</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
				<i class="fa-solid fa-xmark"></i>
			</button>
		  </div>
		  <div class="offcanvas-body">
			<div class="container-fluid"> 
				<form method="POST" enctype="multipart/form-data">
					<div class="row">
                        <div class="col-xl-12 mb-3">
                            <label><?php echo $picture_label; ?></label>
                            <div class="dz-default dlab-message upload-img mb-3">
                                <div class="fallback">
                                    <input name="profile_picture" type="file" accept="image/*" >
                                </div>
                            </div>	
                        </div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput2" class="form-label">First Name<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?php echo $first_name; ?>" name="first_name" id="exampleFormControlInput2" placeholder="" required>
						</div>	
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput2" class="form-label">Last Name<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?php echo $last_name; ?>" name="last_name" id="exampleFormControlInput2" placeholder="" required>
						</div>	
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput3" class="form-label">Email Address<span class="text-danger">*</span></label>
							<input type="email" class="form-control" value="<?php echo $email_address; ?>" name="email_address" id="exampleFormControlInput3" placeholder="" required>
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput3" class="form-label">Contact Number<span class="text-danger">*</span></label>
							<input type="number" class="form-control" value="<?php echo $contact_number; ?>" name="contact_number" id="exampleFormControlInput3" placeholder="" required>
						</div>
                        <div class="col-xl-12 mb-3">
							<label for="exampleFormControlInput3" class="form-label">Location</label>
							<textarea class="form-control" name="location" id="exampleFormControlInput3" placeholder=""><?php echo $location; ?></textarea>
						</div>
						<div class="col-xl-12 mb-3">
							<label class="form-label">Role<span class="text-danger">*</span></label>
							<select name="role" class="default-select style-1 form-control" required>
								<option value='' data-display='Select'>Please select</option>
								<option value="1" <?php echo $ad_option; ?>>Admin</option>
								<option value="2" <?php echo $ed_option; ?>>Editor</option>
								<option value="3" <?php echo $ag_option; ?>>Agent</option>
							</select>
						</div>	
					</div>
					<div>
						<button type="submit" name="submit_new_user" class="btn btn-primary me-1">Submit</button>
					</div>
				</form>
			  </div>
		  </div>
		</div>	