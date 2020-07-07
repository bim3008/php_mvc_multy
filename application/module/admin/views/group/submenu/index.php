<div class="row">
            
        <div class="col-sm-12">
        <form action="#" id="groupform" name="groupform" method="post">  
        <?php
            $messge = Session::get('messge') ;
            Session::delete('messge');
            if(!empty($messge))
            { 
                echo '<div class="alert alert-success ">
                        <span class="fas fa-check"></span> '.$messge.'
                        </div>
                ';
            }
        ?>     
            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                    <tr>
                        <th width="1%"><input type="checkbox" name="checkall-toggle" id="checkall"></th>
                        <th rowspan="1" colspan="1">ID</th>
                        <th rowspan="1" colspan="1">Name</th>
                        <th rowspan="1" colspan="1"> Group ACP</th>
                        <th rowspan="1" colspan="1">Status</th>
                        <th rowspan="1" colspan="1" class="center">Ordering</th>
                        <th rowspan="1" colspan="2">Create</th>
                        <th rowspan="1" colspan="1">Modified</th>
                        <th rowspan="1" colspan="2">Action</th>
                    </tr>
                </thead>