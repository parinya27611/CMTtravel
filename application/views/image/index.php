<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="title">Table Image</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo site_url('image/add'); ?>" class="btn btn-success btn-fill pull-right"><span class="fa fa-plus"></span> Add</a>
                    </div>
                </div>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped" >
                    <thead >
                        <th width="10%" style="text-align: center;">ID</th>
                        <th width="10%" style="text-align: center;">Travel Id</th>
                        <th style="padding-left: 40px">Image</th>
                        <th width="20%">Actions</th>
                    </thead>
                    <tbody>
                         <?php foreach($image as $i){ ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $i['id']; ?></td>
                            <td style="text-align: center;"><?php echo $i['travel_id']; ?></td>
                            <td style="padding-left: 40px">
                                <img  border="0" src="../resources/img/travel/<?php echo $i['img']; ?>" width="60" height="60">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <?php echo $i['img']; ?>
                            </td>
                            <td>
                                <a href="<?php echo site_url('image/edit/'.$i['id']); ?>" class="btn btn-info btn-fill"><span class="fa fa-pencil"></span> Edit</a>

                                <a href="<?php echo site_url('image/remove/'.$i['id']); ?>" class="btn btn-danger btn-fill"><span class="fa fa-trash"></span> Delete</a>
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
