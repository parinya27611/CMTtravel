<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Edit Type Travel</h4>
            </div>
            <?php echo form_open('type/edit/'.$type['id']); ?>
            <div class="content">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name"  placeholder="Name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $type['name']); ?>">
                                <span class="text-danger"><?php echo form_error('name');?></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-fill pull-right"><span class="fa fa-pencil"></span> Update Type</button>
                    <div class="clearfix"></div>
                </form>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>