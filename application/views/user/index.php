<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="title">Table User</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-fill pull-right"><span class="fa fa-plus"></span> Add</a>
                    </div>
                </div>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped" >
                    <thead >
                        <th width="5%" style="text-align: center;">ID</th>
                        <th width="20%">Email</th>
                        <th width="15%">First Name</th>
                        <th width="15%">Last Name</th>
                        <th width="10%">Password</th>
                        <th width="10%">Type</th>
                        <th width="20%">Actions</th>
                    </thead>
                    <tbody>
                        <?php foreach($user as $t){ ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $t['id']; ?></td>
                            <td><?php echo $t['email']; ?></td>
                            <td><?php echo $t['fname']; ?></td>
                            <td><?php echo $t['lname']; ?></td>
                            <td><textarea style="border:0;" cols="15" rows="2" readonly><?php echo $t['password']; ?></textarea></td>
                            <td><?php echo $t['type']; ?></td>
                            <td>
                                <a href="<?php echo site_url('user/edit/'.$t['id']); ?>" class="btn btn-info btn-fill"><span class="fa fa-pencil"></span> Edit</a>

                                <a href="<?php echo site_url('user/remove/'.$t['id']); ?>" class="btn btn-danger btn-fill"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>  
            </div>
        </div>
    </div>
</div>
