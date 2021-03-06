        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Example 2.0</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Layout</a></li>
                        <li class="active">Top Navigation</li>
                    </ol>
                </section>
                
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">Inventory</h3>
									<div class="pull-right">
										<a class="btn btn-primary" data-toggle="modal" data-target="#createItem"><i class="fa fa-plus"></i> New Item</a>
										<a class="btn btn-default" data-toggle="modal" data-target="#categories"><i class="fa fa-plus"></i> Categories</a>
									</div>
									<div class="modal fade" id="createItem" role="dialog">
										<div class="modal-dialog modal-sm">
											<!-- Modal content-->
											<div class="modal-content">
												<form action="<?php echo base_url();?>dashboard/createItem" method="post">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Inventory Item</h4>
													</div>
													<div class="modal-body">
														<label>Item Code</label>
														<div class="input-group">
															<span class="input-group-addon">#</span>
															<input type="text" class="form-control" placeholder="Item Code" name="code">
														</div><br>
														<label>Description</label><br>
														<input type="text" class="form-control" placeholder="Description" name="description">
														<br>
														<div class="form-group">
															<label>Category</label>
															<select class="form-control" name="category">
																<?php
																	foreach($item_categories->result() as $cat) {
																		echo '<option value="'.$cat->id.'">'.$cat->name.'</option>';
																	}
																?>
															 </select>
														</div>
														<label>Amount</label><br>
														<div class="input-group">
															<span class="input-group-addon">PHP</span>
															<input type="text" class="form-control" placeholder="Price" name="amount">
														</div>
													</div>
													<div class="modal-footer">
														<input type="submit" class="btn btn-block btn-primary" value="Create new item">
														<!-- <button type="button" class="btn btn-block btn-default" data-dismiss="modal">Close</button>
														-->
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="modal fade" id="categories" role="dialog">
										<div class="modal-dialog">
											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4>Categories</h4>
													<p>Categories or groups help you organize the items in your inventory.</p>
												</div>
												<div class="modal-body">
													<style>
														input.categories-cell {
															background-color: transparent;
															border-width: 0px 0px 0px 0px;
															padding:0px;
															height:20px;
														}
														input.categories-cell:focus {
															border-width: 0px 0px 1px 0px;
														}
													</style>
													<table class="table table-striped">
														<tr>
															<th style="width: 150px">Category Name</th>
															<th style="width: 50px">Listing</th>
															<th "width: 350px">Description</th>
															<th>Action</th>
														</tr>
														<?php foreach($item_categories->result() as $category) {
															echo '
															<form method="post">
															<input type="hidden" name="id" value="'.$category->id.'">
															<tr>
															<td><input type="text" class="form-control categories-cell" placeholder="Category Name" value="'.$category->name.'" name="name"></td>
															<td>'.$category->listing.'</td>
															<td><input type="text" class="form-control categories-cell" placeholder="Description" value="'.$category->description.'" name="description"></td>
															<td style="padding: 0px;"><input type="submit" class="btn btn-primary btn-xs margin" value="Save" formaction="'.base_url().'dashboard/editCategory" style="margin: 8px 0px 0px 0px">
																	<input type="submit" class="btn btn-default btn-xs margin" value="Delete" formaction="'.base_url().'dashboard/deleteCategory" style="margin: 8px 0px 0px 0px"></td>
															</tr>
															</form>
															';
														}
														?>
														<form action="<?php echo base_url(); ?>dashboard/createCategory" method="post">
														<tr>
															<td><input type="text" class="form-control categories-cell" placeholder="Category Name" name="name"></td>
															<td></td>
															<td><input type="text" class="form-control categories-cell" placeholder="Description" name="description"></td>
															<td style="padding: 0px;"><input type="submit" class="btn btn-primary btn-xs margin" value="Add" style="margin: 8px 0px 0px 0px"></td>
														</tr>
														</form>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div><!-- /.box-header -->
								<div class="box-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>Item Code</th>
												<th>Description</th>
												<th>Category</th>
												<th>Amount (PHP)</th>
												<th>Quantity</th>
											</tr>
										</thead>
										<tbody>
											<?php
												foreach($items->result() as $item) {
													echo '<tr><td><a href="#" data-toggle="modal" data-target="#viewItem'.$item->code.'">'.$item->code.'</a></td>';
													echo '<td>'.$item->description.'</td>';
													echo '<td>'.$item->name.'</td>';
													echo '<td>'.number_format($item->amount, 2, '.', ',').'</td>';
													echo '<td>'.$item->quantity.'</td>'; ?>
												</tr>
												<div class="modal fade" id="viewItem<?php echo $item->code;?>" role="dialog">
													<div class="modal-dialog modal-sm">
														<!-- Modal content-->
														<div class="modal-content">
															<form method="post">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	<h4 class="modal-title">Inventory Item</h4>
																</div>
																<div class="modal-body">
																	<input type="hidden" name="id" value="<?php echo $item->id; ?>">
																	<label>Item Code</label>
																	<div class="input-group">
																		<span class="input-group-addon">#</span>
																		<input type="text" class="form-control" placeholder="Item Code" name="code" value="<?php echo $item->code; ?>">
																	</div><br>
																	<label>Description</label><br>
																	<input type="text" class="form-control" placeholder="Description" name="description" value="<?php echo $item->description; ?>">
																	<br>
																	<div class="form-group">
																		 <label>Category</label>
																		 <select class="form-control" name="category">
																			<?php
																				foreach($item_categories->result() as $cat) {
																					if($cat->id == $item->category)
																						echo '<option value="'.$cat->id.'" selected>'.$cat->name.'</option>';
																					else
																						echo '<option value="'.$cat->id.'">'.$cat->name.'</option>';
																				}
																			?>
																		 </select>
																	</div>
																	<label>Amount</label><br>
																	<div class="input-group">
																		<span class="input-group-addon">PHP</span>
																		<input type="text" class="form-control" placeholder="Price" name="amount" value="<?php echo number_format($item->amount, 2, '.', ','); ?>">
																	</div><br>
																	<label>Quantity</label><br>
																	<input type="text" class="form-control" name="quantity" value="<?php echo $item->quantity; ?>" disabled>
																</div>
																<div class="modal-footer">
																	<input type="submit" class="btn btn-block btn-primary" value="Save changes" formaction="<?php echo base_url();?>dashboard/editItem">
																	<input type="submit" class="btn btn-block btn-default" value="Delete item" formaction="<?php echo base_url();?>dashboard/deleteItem">
																</div>
															</form>
														</div>
													</div>
												</div>
											<?php    }
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
                </section><!-- /.content -->
            </div><!-- /.container -->
				
		</div><!-- /.content-wrapper -->