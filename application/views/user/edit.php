<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Edit User</h4>
            </div>
            <?php echo form_open('user/edit/'.$user['id']); ?>
            <div class="content">
                <form>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="fname" placeholder="First Name" value="<?php echo ($this->input->post('fname') ? $this->input->post('fname') : $user['fname']); ?>">
                                <span class="text-danger"><?php echo form_error('fname');?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lname" placeholder="Last Name" value="<?php echo ($this->input->post('lname') ? $this->input->post('lname') : $user['lname']); ?>">
                                <span class="text-danger"><?php echo form_error('lname');?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Type User</label>
                                <input type="text" class="form-control" name="type" placeholder="Type User" value="<?php echo ($this->input->post('type') ? $this->input->post('type') : $user['type']); ?>">
                                <span class="text-danger"><?php echo form_error('type');?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="text" class="form-control" name="email" placeholder="E-mail" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>">
                                <span class="text-danger"><?php echo form_error('email');?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $user['password']); ?>">
                                <span class="text-danger"><?php echo form_error('password');?></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-fill pull-right"><span class="fa fa-pencil"></span> Update User</button>
                    <div class="clearfix"></div>
                </form>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>