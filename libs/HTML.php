<?php
    class HTML{
        public static function Filter($filter)
        {
            $xhtml = '
            <div class="col-sm-12 col-md-4">  
                <div class="dataTables_length" id="example1_length">'.$filter.'</div>
            </div> ' ;
            return $xhtml ;
        }
        public static function cmsCRUD($cmsCRUD)
        {
            $xhtml = '
            <div style=" text-align : right" class="col-sm-12 col-md-4">
                    <div class="dataTables_length" id="example1_length">
                            '.$cmsCRUD.'
                    </div>  
            </div> ' ;
            return $xhtml ;
        }
        public static function menuGroup()
        {
            $xhtml = '
            <div class="card-body">
            <form action="'.URL::createLink('admin','group','multydelete').'" method="POST" id="formListGroup">
			<table class="table table-striped">
				<thead>
					<tr>
						<th style="width: 5%">
							<span class="custom-checkbox"><input type="checkbox" id="selectAll"></span>
						</th>
						<th style="width: 5%">Id</th>
						<th style="width: 15%">Name</th>
						<th style="width: 15%">Group ACP</th>
						<th style="width: 15%">Status</th>
						<th style="width: 15">Ordering</th>
						<th style="width: 15%">Created</th>
						<th style="width: 10%">Modified</th>
						<th style="width: 20%">Action</th>
					</tr>
				</thead>
				<tbody>
            ' ;

            return $xhtml ;
        }
        public static function menuUser()
        {
            
            $xhtml = '
             <div class="card-body">
            <form action="'.URL::createLink('admin','user','multydelete').'" method="POST" id="formListUser">
			<table class=" table table-striped">
	            <thead>
                    <tr>
                        <th style="width: 3%">
                            <span class="custom-checkbox"><input type="checkbox" id="selectAll"></span>
                        </th>
                        <th style="width: 9.5%;text-align: center;">ID</th>
                        <th class="sorting" rowspan="1" colspan="1" style="width: 9.5%;text-align: center;">UserName</th>
                        <th class="sorting" rowspan="1" colspan="1" style="width: 10%;text-align: center;">Email</th>
                        <th class="sorting" rowspan="1" colspan="1" style="width: 14.5%;text-align: center;">Full Name</th>
                        
                        <th class="sorting" rowspan="1" colspan="1" style="width: 5%;text-align: center;">Status</th>
                        <th class="sorting" rowspan="1" colspan="1" style="width: 3%;text-align: center;">Ordering</th>
                        <th class="sorting" rowspan="1" colspan="1" style="width: 20%;text-align: center;">Group</th>
                        <th class="sorting" rowspan="2" colspan="2" style="width: 10%;text-align: center;">Action</th>
		            </tr>
                </thead>
                
                ' ;

            return $xhtml ;
        }
        public static function menuCategory()
        {
            $xhtml = '
            <div class="card-body">
            <form action="'.URL::createLink('admin','category','multydelete').'" method="POST" id="formListGroup">
			<table class="table table-striped">
				<thead>
					<tr>
						<th style="width: 5%">
							<span class="custom-checkbox"><input type="checkbox" id="selectAll"></span>
						</th>
						<th style="width: 5%;text-align:center ">Id</th>
						<th style="width: 25%;text-align:center ">Name</th>
						<th style="width: 15% ;text-align:center " >Picture</th>
						<th style="width: 5;text-align:center ">Status</th>
						<th style="width: 10;text-align:center ">Ordering</th>
						<th style="width: 12%;text-align:center ">Created</th>
						<th style="width: 12%;text-align:center ">Modified</th>
						<th style="width: 20%;text-align:center ">Action</th>
					</tr>
				</thead>
				<tbody>
            ' ;

            return $xhtml ;
        }

        public static function menuBook()
        {
            $xhtml = '
            <div class="card-body">
            <form action="'.URL::createLink('admin','category','multydelete').'" method="POST" id="formListGroup">
			<table class="table table-striped">
				<thead>
					<tr>
						<th style="width: 1%">
							<span class="custom-checkbox"><input type="checkbox" id="selectAll"></span>
						</th>
						<th style="width: 1%;text-align:center  ">Id</th>
						<th style="width: 14%;text-align:center ">Name</th>
                        <th style="width: 14%;text-align:center ">Description</th>
                        <th style="width: 14% ;text-align:center">Picture</th>
                        <th style="width: 14% ;text-align:center">Category</th>
						<th style="width: 16%;text-align:center ">Price</th>
						<th style="width: 1%;text-align:center ">Special</th>
						<th style="width: 1%;text-align:center   ">Status</th>
						<th style="width: 1%;text-align:center  ">Ordering</th>
						<th style="width: 11%;text-align:center ">Action</th>
					</tr>
				</thead>
				<tbody>
            ' ;

            return $xhtml ;
        }

        public static function inputDescription($value){

            $xhtml = '
                        <textarea class="form-control" name="form[description]" placeholder="Enter ..." value="'.$value.'">'.$value.'</textarea>  
            ' ;
            return $xhtml ;
        }

}

?>


