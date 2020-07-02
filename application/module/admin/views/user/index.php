<div class="card-body">
    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">

            <div class="col-sm-12 col-md-4">
                <div class="dataTables_length" id="example1_length">
                    <a href="#" class="btn btn-info" role="button">All (4)</a>
                    <a href="#" class="btn btn-success" role="button">Active (3)</a>
                    <a href="#" class="btn btn-danger" role="button">Inactive (1)</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div id="example1_filter" class="dataTables_filter">
                    <form action="#">
                        <div style="display: flex ;" class="form-group">
                            <button type="submit" class="btn btn-default">Search</button>
                            <input style="margin-left: 10px;" type="search-box" class="form-control" id="search-box">
                        </div>
                    </form>
                </div>
            </div>

            <div style=" text-align : right" class="col-sm-12 col-md-4">
                <div class="dataTables_length" id="example1_length">
                    <a href="#" class="btn btn-success" role="button">Add</a>
                    <a href="#" class="btn btn-danger" role="button">Edit</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                        <tr>
                            <th rowspan="1" colspan="1">ID</th>
                            <th rowspan="1" colspan="1">Name</th>
                            <th rowspan="1" colspan="1"> Group ACP</th>
                            <th rowspan="1" colspan="1">Status</th>
                            <th rowspan="1" colspan="1">Ordering</th>
                            <th rowspan="1" colspan="2">Create</th>
                            <th rowspan="1" colspan="1">Modified</th>
                            <th rowspan="1" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr role="row" class="odd">
                            <td class="sorting_1">1</td>
                            <td>Member 12</td>
                            <td><a href="\github/mvc-multy\index.php?module=admin&amp;controller=group&amp;action=changeStatusGroupACP&amp;id=4&amp;group_acp=" class="btn btn-sm btn-danger" role="button">Inactive</a></td>
                            <td><a href="\github/mvc-multy\index.php?module=admin&amp;controller=group&amp;action=changeStatus&amp;id=4&amp;status=inactive" class="btn btn-sm btn-danger" role="button">Inactive</a></td>
                            <td>2</td>
                            <td colspan="2">2013-11-12 <br> admin</td>
                            <td colspan="2">2020-06-24 <br> admin</td>
                            <td colspan="2"><a href="" class="btn btn-warning btn-sm">
                                    <span class="fa fa-edit"></span> Edit
                                </a> <a href="" class="btn btn-danger btn-sm">
                                    <span class="fa fa-trash"></span> Delete
                                </a></td>
                        </tr>
                    </tbody>
                   
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                        <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>