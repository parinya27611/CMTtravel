<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Edit Contact</h4>
            </div>
			<?php echo form_open('contact/edit/'.$contact['id']); ?>
			<div class="content">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            	<label>E-mail</label>
                            	<div class="form-group">
                            		<input type="text" class="form-control" placeholder="E-mail" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $contact['email']); ?>" />
									<span class="text-danger"><?php echo form_error('email');?></span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            	<label>Text</label>
                            	<div class="form-group">
									<textarea class="form-control" placeholder="Text" name="text"><?php echo ($this->input->post('text') ? $this->input->post('text') : $contact['text']); ?></textarea>
									<span class="text-danger"><?php echo form_error('text');?></span>
								</div>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-info btn-fill pull-right"><span class="fa fa-pencil"></span> Update Contact</button>
                    <div class="clearfix"></div>
                </form>
       		</div>
			<?php echo form_close(); ?>
	  </div>
  	</div>
</div>