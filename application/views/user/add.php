<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Add User</h4>
            </div>
            <?php echo form_open('user/add'); ?>
            <div class="content">
                <form>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="fname" placeholder="First Name" value="<?php echo $this->input->post('fname'); ?>">
                                <span class="text-danger"><?php echo form_error('fname');?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lname" placeholder="Last Name" value="<?php echo $this->input->post('lname'); ?>">
                                <span class="text-danger"><?php echo form_error('lname');?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Type User</label>
                                <select name="type" class="form-control">
                                        <option value="">select type</option>
                                        <option value="admin">admin</option>
                                        <option value="user">user</option>
                                        
                                    </select>
                                <span class="text-danger"><?php echo form_error('type');?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="text" class="form-control" name="email" placeholder="E-mail" value="<?php echo $this->input->post('email'); ?>">
                                <span class="text-danger"><?php echo form_error('email');?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $this->input->post('password'); ?>">
                                <span class="text-danger"><?php echo form_error('password');?></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-fill pull-right"><span class="fa fa-plus"></span> Save User</button>
                    <div class="clearfix"></div>
                </form>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>