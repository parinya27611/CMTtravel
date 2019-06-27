<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Add Type Travel</h4>
            </div>
            <?php echo form_open('type/add/'); ?>
            <div class="content">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name"  placeholder="Name" value="<?php echo $this->input->post('name'); ?>">
                                <span class="text-danger"><?php echo form_error('name');?></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-fill pull-right"><span class="fa fa-plus"></span> Save Type</button>
                    <div class="clearfix"></div>
                </form>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>