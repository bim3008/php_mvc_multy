<?php
        // ALl
        $linkAll  = URL::createLink('admin', 'group', 'index');
        $btnAll   = HTMLHelper::cmsButton($linkAll, 'btn btn-info', 'all', 'All' . '(' . $total . ')');

        // ACTIVE
        $linkActive  = URL::createLink('admin', 'group', 'index', array('params' => 'active'));
        $btnActive   = HTMLHelper::cmsButton($linkActive, 'btn btn-success ', 'ac', 'Active');

        // INACTIVE
        $linkInactive  = URL::createLink('admin', 'group', 'index', array('params' => 'inactive'));
        $btnInactive   = HTMLHelper::cmsButton($linkInactive, 'btn btn-danger ', 'inac', 'Inactive');

        $stringBtn = $btnAll . $btnInactive . $btnActive;

?>
<div class="card-body">
    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <form action="">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="dataTables_length" id="example1_length">
                        <?php echo $stringBtn; ?>
                    </div>
                </div>
        </form>