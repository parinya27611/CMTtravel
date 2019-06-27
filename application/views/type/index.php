<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="title">Table Type Travel</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo site_url('type/add'); ?>" class="btn btn-success btn-fill pull-right"><span class="fa fa-plus"></span> Add</a>
                    </div>
                </div>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped" >
                    <thead >
                        <th width="10%" style="text-align: center;">ID</th>
                        <th style="padding-left: 40px">Name</th>
                        <th width="20%">Actions</th>
                    </thead>
                    <tbody>
                         <?php foreach($type as $t){ ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $t['id']; ?></td>
                            <td style="padding-left: 40px"><?php echo $t['name']; ?></td>
                            <td>
                                <a href="<?php echo site_url('type/edit/'.$t['id']); ?>" class="btn btn-info btn-fill"><span class="fa fa-pencil"></span> Edit</a>

                                <a href="<?php echo site_url('type/remove/'.$t['id']); ?>" class="btn btn-danger btn-fill"><span class="fa fa-trash"></span> Delete</a>
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
