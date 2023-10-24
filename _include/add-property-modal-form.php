<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
		  <div class="offcanvas-header">
		  <h5 class="modal-title" id="#gridSystemModal">Add Property</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
				<i class="fa-solid fa-xmark"></i>
			</button>
		  </div>
		  <div class="offcanvas-body">
			<div class="container-fluid">
				<form>
					<div class="row">
						<div class="col-xl-12 mb-3">
							<label class="form-label">Landlord/Owner<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option data-display="Select">Please select</option>
								<option value=""></option>
							</select>
						</div>	
						<div class="col-xl-12 mb-3">
							<label for="exampleFormControlInput2" class="form-label">Title<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
						</div>
                        <div class="col-xl-12 mb-3">
							<label for="exampleFormControlInput3" class="form-label">Description<span class="text-danger">*</span></label>
							<textarea class="form-control" id="exampleFormControlInput3" placeholder=""></textarea>
						</div>	
                        <div class="col-xl-12 mb-3">
							<label for="exampleFormControlInput3" class="form-label">Geo-Location Url</label>
							<input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
						</div>
                        <div class="col-xl-12 mb-3">
							<label for="exampleFormControlInput3" class="form-label">Address<span class="text-danger">*</span></label>
							<textarea class="form-control" id="exampleFormControlInput3" placeholder=""></textarea>
						</div>		
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput2" class="form-label">City<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
						</div>	
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput2" class="form-label">State<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
						</div>	
						<div class="col-xl-6 mb-3">
							<label class="form-label">Country<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option data-display="Select">Please select</option>
								<option value=""></option>
							</select>
						</div>	
						<div class="col-xl-6 mb-3">
							<label class="form-label">Type<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option data-display="Select">Please select</option>
								<option value="Rent">For Rent</option>
								<option value="Sale">For Sale</option>
							</select>
						</div>	
						<div class="col-xl-12 mb-3">
							<label for="exampleFormControlInput2" class="form-label">If Rent --> No. of Living Spaces (Apartments, Rooms, etc.)</label>
							<input type="number" class="form-control" id="exampleFormControlInput2" placeholder="">
						</div>	
					</div>
					<div>
						<button class="btn btn-primary me-1">Submit</button>
					</div>
				</form>
			  </div>
		  </div>
		</div>	