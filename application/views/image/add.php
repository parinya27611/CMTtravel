<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Add Image</h4>
            </div>
            <?php echo form_open_multipart('image/add'); ?>
          	<div class="content">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
								<label>Travel</label>
								<div class="form-group">
									<select name="travel_id" class="form-control" required>
										<option value="">select travel</option>
										<?php 
										foreach($all_travel as $travel)
										{
											$selected = ($travel['id'] == $this->input->post('travel_id')) ? ' selected="selected"' : "";

											echo '<option value="'.$travel['id'].'" '.$selected.'>'.$travel['name'].'</option>';
										} 
										?>
									</select>
									<span class="text-danger"><?php echo form_error('travel_id');?></span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Image</label>
								<div class="form-group">
									<input type="file" multiple="multiple" class="form-control" required name="files[]"  placeholder="Image" class="form-control" id="img" />
									<span class="text-danger"><?php echo form_error('img');?></span>
								</div>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-success btn-fill pull-right"><span class="fa fa-plus"></span> Save Image</button>
                    <div class="clearfix"></div>
             	</form>
			</div>
       		<?php echo form_close(); ?>
        </div>
  	</div>
</div>
