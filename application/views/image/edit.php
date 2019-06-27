<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Edit Image</h4>
            </div>
			<?php echo form_open_multipart('image/edit/'.$image['id']); ?>
			<div class="content">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
								<label>Travel</label>
								<div class="form-group">
									<select name="travel_id" class="form-control">
										<option value="">select travel</option>
										<?php 
										foreach($all_travel as $travel)
										{
											$selected = ($travel['id'] == $image['travel_id']) ? ' selected="selected"' : "";

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
								<label>New Image Name</label>
								<div class="form-group">
									<input type="hidden" readonly value="<?php echo ($this->input->post('img') ? $this->input->post('img') : $image['img']); ?>" class="form-control" id="img" />
									<span class="text-danger"><?php echo form_error('img');?></span>

									<input type="file" class="form-control" required name="photo"  placeholder="Image" class="form-control" id="img" />
									<span class="text-danger"><?php echo form_error('img');?></span>
								</div>
							</div>
						</div>
					</div>
					
					<button type="submit" class="btn btn-info btn-fill pull-right"><span class="fa fa-pencil"></span> Update Image</button>
                    <div class="clearfix"></div>
             	</form>
            </div>
		<?php echo form_close(); ?>
		</div>
    </div>
</div>
