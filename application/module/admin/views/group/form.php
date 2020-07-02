<div class="col-sm-6">
    <h1>Group Add</h1>
</div>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">General</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Group Name</label>
                        <input type="text" id="inputName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Group_ACP</label>
                        <select class="form-control custom-select">
                            <option selected="" disabled="">Select one</option>
                            <option>Admin</option>
                            <option>Founder</option>
                            <option>Manager</option>
                            <option>Member</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Status</label>
                        <select class="form-control custom-select">
                            <option selected="" disabled="">Select one</option>
                            <option>Active</option>
                            <option>Inactice</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputClientCompany">Ordering</label>
                        <input type="text" id="inputClientCompany" class="form-control">
                    </div>
                </div>
                <!-- /.card-body -->
            </div>  
    </div>  
</section>
<?php
        // ALl
        $linkAll  = URL::createLink('admin', 'group', 'index');
        $btnAll   = HTMLHelper::cmsButton($linkAll, 'btn btn-info', 'cancel', 'Cancel');

        // ACTIVE
        $linkActive  = URL::createLink('admin', 'group', 'index', array('params' => 'active'));
        $btnActive   = HTMLHelper::cmsButton($linkActive, 'btn btn-success ', 'ac', 'Save & Close');

        // INACTIVE
        $linkInactive  = URL::createLink('admin', 'group', 'index', array('params' => 'inactive'));
        $btnInactive   = HTMLHelper::cmsButton($linkInactive, 'btn btn-danger ', 'inac', 'Save & New');

        $stringBtn = $btnAll . $btnInactive . $btnActive;

?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <ol class="breadcrumb float-sm-right">
                    <?php echo $xhtml = '<p>'.$stringBtn.'</p> ' ; ?>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>