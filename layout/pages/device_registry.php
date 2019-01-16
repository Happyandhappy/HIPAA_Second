<?php	
	$contacts = array();
	$facilities = array();

	$data = NULL;

	$res = $api->_AllObjects('contact');
	if ($res->status == "success") $contacts = $res->data;
	$res = $api->_AllObjects('facility');
	if ($res->status == "success") $facilities = $res->data;

	if ($id !=""){
		$data = $api->_ObjectById($type, $id)->data;		
	}
?>

<!-- END: Subheader -->
<div class="m-content">
	<div class="m-portlet">
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
					</span>
					<h3 class="m-portlet__head-text">
						<?php 
							if ($id == "") echo "Create " . title($type); 
							else echo "Edit " . title($type); 
						?>
					</h3>
				</div>
			</div>
		</div>

		<!--begin::Form-->
		<form class="m-form" method="post" id="form" action="funController.php">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input type="hidden" name="action" value="<?php echo $action; ?>">
			<input type="hidden" name="type" value="<?php echo $type; ?>">
			<input type="hidden" name="Organization" value="<?php echo $_SESSION['ORGID']; ?>">
			
			<div class="m-portlet__body">
				<div class="m-form__section m-form__section--first">
					<div class="form-group m-form__group row">
						<label class="col-lg-3 col-form-label">Name</label>
						<div class="col-lg-6">
							<input type='text' class='form-control m-input' name='Name' placeholder='Enter Device Registry Name' value='<?php if ($data) echo($data->$id->Name) ?>' required>
						</div>
					</div>
					<div class="m-form__group form-group row">
						<label class="col-lg-3 col-form-label">Active<span style="color: red;"> *</span></label>
						<div class="col-lg-6">
							<div class="m-checkbox-inline">
								<label class="m-checkbox">
									<input type="checkbox" name="Active" <?php if ($data) if ($data->$id->Active == "true") echo "checked";?>>
									<span></span>
								</label>
							</div>
						</div>
					</div>

					<!-- User assigned -->
					<div class="form-group m-form__group row">
						<label class="col-lg-3 col-form-label" >User assigned</label>
						<div class="col-lg-6">
							<select class="form-control m-input" name="User_assigned">
								<option value=""> - None -</option>
								<?php 
									foreach ($contacts as $key => $value) {
										if ($data && $data->$id->User_assigned == $key)
												echo "<option value='{$key}' selected>{$value->Full_Name}</option>";
										else
										echo "<option value='{$key}'>{$value->Full_Name}</option>";
									}
								?>
							</select>
						</div>
					</div>
					<!-- Assigned Facility -->
					<div class="form-group m-form__group row">
						<label class="col-lg-3 col-form-label" >Assigned Facility</label>
						<div class="col-lg-6">
							<select class="form-control m-input" name="Assigned_Facility">
								<option value=""> - None -</option>
								<?php
									foreach ($facilities as $key => $value) {
										if ($data && $data->$id->Assigned_Facility == $key) echo "<option value='{$key}' selected>{$value->Name}</option>";
										else echo "<option value='{$key}'>{$value->Name}</option>";
									}
								?>
							</select>
						</div>	
					</div>

					<div class="form-group m-form__group row">
						<label class="col-lg-3 col-form-label">IP Address</label>
						<div class="col-lg-6">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-chain"></i>
									</span>
								</div>
								<input type="text" class="form-control m-input" name="IP_Address" placeholder="IP Address" value='<?php if ($data) echo($data->$id->IP_Address) ?>'>
							</div>
						</div>
					</div>

					<div class="form-group m-form__group row">
						<label class="col-lg-3 col-form-label">Polling Time</label>
						<div class="col-lg-6">
							<div class="input-group">
								<input type="text" class="form-control m-input" name="Polling_Time" placeholder="Polling Time" value='<?php if ($data) echo($data->$id->Polling_Time) ?>' >
							</div>
						</div>
					</div>

					<div class="form-group m-form__group row">
						<label class="col-lg-3 col-form-label">Last Polling Time</label>
						<div class="col-lg-6">
							<div class="input-group date">
								<input type="text" class="form-control m-input" readonly="" data-date-format="yyyy-mm-ddThh:ii:ssZ" placeholder="Select date &amp; time" id="m_datetimepicker_2_validate" value='<?php if ($data) echo($data->$id->Last_Polling_Time) ?>' name="Last_Polling_Time">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="la la-calendar-check-o glyphicon-th"></i>
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group m-form__group row">
						<label class="col-lg-3 col-form-label">Notes</label>
						<div class="col-lg-6">
							<div class="input-group">
								<textarea class="form-control m-input" name="Notes" placeholder="Up to 255 characters of simple notes"><?php if ($data) echo($data->$id->Notes) ?></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="m-portlet__foot m-portlet__foot--fit">
				<div class="m-form__actions m-form__actions">
					<div class="row">
						<div class="col-lg-3"></div>
						<div class="col-lg-6">
							<button type="submit" class="btn btn-primary">Save</button>
							<a href="itemspage_controller.php?type=<?php echo $type; ?>" class="btn btn-secondary">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!--end::Form-->
	</div>
</div>
