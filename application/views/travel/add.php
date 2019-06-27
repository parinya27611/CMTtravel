<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Add Travel</h4>
            </div>
            <?php echo form_open('travel/add'); ?>
            <div class="content">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Type</label>
                                <div class="form-group">
									<select name="type_id" class="form-control">
										<option value="">select type</option>
										<?php 
										foreach($all_type as $type)
										{
											$selected = ($type['id'] == $this->input->post('type_id')) ? ' selected="selected"' : "";

											echo '<option value="'.$type['id'].'" '.$selected.'>'.$type['name'].'</option>';
										} 
										?>
									</select>
									<span class="text-danger"><?php echo form_error('type_id');?></span>
								</div>
                                <span class="text-danger"><?php echo form_error('name');?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control"  name="name" placeholder="Name" value="<?php echo $this->input->post('name'); ?>">
                                <span class="text-danger"><?php echo form_error('name');?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>About</label>
                                <textarea name="about" class="form-control" name="about" placeholder="About" id="about"><?php echo $this->input->post('about'); ?></textarea>
                                <span class="text-danger"><?php echo form_error('about');?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Address</label>
                            	<textarea name="address" class="form-control" name="address" placeholder="Address" id="address"><?php echo $this->input->post('address'); ?></textarea>
                                <span class="text-danger"><?php echo form_error('address');?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Time</label>
                                <input type="text" class="form-control"  name="time" placeholder="Time" value="<?php echo $this->input->post('time'); ?>">
                                <span class="text-danger"><?php echo form_error('time');?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tel</label>
                                <input type="text" class="form-control"  name="tel" placeholder="Tel" value="<?php echo $this->input->post('tel'); ?>">
                                <span class="text-danger"><?php echo form_error('tel');?></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-fill pull-right"><span class="fa fa-plus"></span> Save Travel</button>
                    <div class="clearfix"></div>
                </form>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>