<?php
    if(!empty($this->listItems)){
        foreach($this->listItems as $key => $value){
            $xhtml = '
                <tr>
                    <td>'.$value['fullname'].'</td>
                    <td>'.$value['phone'].'</td>
                    <td>'.$value['email'].'</td>
                </tr> 	
            ';
        }
    }

?>
<div class="col-md-">
    <div class="card-body">
		<table class="table table-striped">
			<thead>
                <tr>
                    <th style="width: 15%">Name</th>
                    <th style="width: 15%">Phone</th>
                    <th style="width: 15%">Email</th>
                </tr>
			</thead>
			<tbody>       
              <?php  echo $xhtml ;?>
            </tbody>
	    </table>
    </div>

	<div class="row">
	</div>
</div>