
<!-- BEGIN: Subheader -->
<div class="m-subheader ">
	<div class="d-flex align-items-center">
		<div class="mr-auto">			
			<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
				<li class="m-nav__item m-nav__item--home">
					<a href="dashboard.php" class="m-nav__link m-nav__link--icon">
						<i class="m-nav__link-icon la la-home"></i>
					</a>
				</li>
				<li class="m-nav__separator">-</li>
				<li class="m-nav__item">
					<a href="" class="m-nav__link">
						<span class="m-nav__link-text"><?php echo title($type); ?> Management</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- END: Subheader -->
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<h3 class="m-portlet__head-text">
						<?php echo title($type); ?>
					</h3>
				</div>
			</div>
			<div class="m-portlet__head-tools">
				<ul class="m-portlet__nav">
					<li class="m-portlet__nav-item">
						<a href="editpage_controller.php?type=<?php echo $type;?>" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air">
							<span>
								<i class="la la-plus"></i>
								<span>Create New Record</span>
							</span>
						</a>
					</li>
					<li class="m-portlet__nav-item"></li>
				</ul>
			</div>
		</div>
		<div class="m-portlet__body">
			<!--begin: Datatable -->			
			<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
				<thead>
					<tr>
						<?php 
							foreach ($tablekeys as $value) {
								echo "<th>" . colname($value) . "</th>";		
							}
						?>
						<th>Action</th>						
					</tr>
				</thead>
				<tbody>
					<?php foreach ($tabledata as $row) {?>
					<tr>
						<?php 
							foreach ($tablekeys as $key) {
								if ($key == "Name")
									echo "<td><a href='editpage_controller.php?type={$type}&id={$row->id}&action=edit'>{$row->$key}</a></td>";
								else 
									echo "<td>" . $row->$key . "</td>";
							}		
						?>						
						<td>
							<a href='<?php echo "editpage_controller.php?type={$type}&id={$row->id}&action=edit" ;?>' 
								class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
	                          <i class="la la-edit"></i>
	                        </a>
	                        <a href='<?php echo "funController.php?type={$type}&id={$row->id}&action=delete" ;?>'
								class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill delete" title="Delete">
	                          <i class="fa fa-trash"></i>
	                        </a>
                    	</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</div>

	<!-- END EXAMPLE TABLE PORTLET-->
</div>
