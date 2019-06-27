<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="title">Table Contact</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo site_url('contact/add'); ?>" class="btn btn-success btn-fill pull-right"><span class="fa fa-plus"></span> Add</a>
                    </div>
                </div>
            </div>
            <div class="content table-responsive table-full-width ">
                <table class="table table-hover table-striped ">
                    <thead >
                        <th width="5%" style="text-align: center;">ID</th>
                        <th width="35%" style="padding-left: 40px">Email</th>
                        <th width="25%">Text</th>
						<th width="15%">Time</th>
                        <th width="20%">Actions</th>
                    </thead>
                    <tbody>
                         <?php foreach($contact as $t){ ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $t['id']; ?></td>
                            <td style="padding-left: 40px"><?php echo $t['email']; ?></td>
                            <td><textarea style="border:0;" cols="30" rows="2" readonly><?php echo $t['text']; ?></textarea></td>
							<td><?php echo $t['time']; ?></td>
                            <td>
                                <a href="<?php echo site_url('contact/edit/'.$t['id']); ?>" class="btn btn-info btn-fill"><span class="fa fa-pencil"></span> Edit</a>

                                <a href="<?php echo site_url('contact/remove/'.$t['id']); ?>" class="btn btn-danger btn-fill"><span class="fa fa-trash"></span> Delete</a>
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
