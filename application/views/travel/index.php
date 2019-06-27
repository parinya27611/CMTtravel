<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="title">Table Travel</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo site_url('travel/add'); ?>" class="btn btn-success btn-fill pull-right"><span class="fa fa-plus"></span> Add</a>
                    </div>
                </div>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped" >
                    <thead >
                        <th width="2%" style="text-align: center;">ID</th>
                        <th width="6%">Type Id</th>
                        <th width="14%">Name</th>
                        <th width="15%">About</th>
                        <th width="15%">Address</th>
                        <th width="10%">Time</th>
                        <th width="10%">Tel</th>
                        <th width="18%">Actions</th>
                    </thead>
                    <tbody>
                        <?php foreach($travel as $t){ ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $t['id']; ?></td>
                            <td style="text-align: center;"><?php echo $t['type_id']; ?></td>
                            <td><?php echo $t['name']; ?></td>
                            <td><textarea style="border:0;" cols="20" rows="2" readonly><?php echo $t['about']; ?></textarea></td>
                            <td><textarea style="border:0;" cols="20" rows="2" readonly><?php echo $t['address']; ?></textarea></td>
                            <td><?php echo $t['time']; ?></td>
                            <td><?php echo $t['tel']; ?></td>
                            <td>
                                <a href="<?php echo site_url('travel/edit/'.$t['id']); ?>" class="btn btn-info btn-fill"><span class="fa fa-pencil"></span> Edit</a>

                                <a href="<?php echo site_url('travel/remove/'.$t['id']); ?>" class="btn btn-danger btn-fill"><span class="fa fa-trash"></span> Delete</a>
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
