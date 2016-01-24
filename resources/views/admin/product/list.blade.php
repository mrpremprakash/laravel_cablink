@extends(((Request::ajax()) ? 'layout.plain' : 'layout.default'))

<?php if(Request::ajax()):?>
@section('content')
<div id="page-wrapper" style="min-height: 316px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product List
            <a href="admin/product/add"  class="pull-right">Add New</a></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_length" id="dataTables-example_length">
                                        <label>Show
                                            <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                            entries
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div id="dataTables-example_filter" class="dataTables_filter">
                                        <label>Search:<input
                                                type="search"
                                                ng-model="search"
                                                ng-change="change()" class="form-control input-sm" placeholder="Enter product name" >
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                    <thead>
                                        <tr role="row">
                                            <th >Image</th>
                                            <th >Name</th>
                                            <th >Description</th>
                                            <th >Price</th>
                                            <th >Status</th>
                                            <th >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="gradeA odd" role="row" ng-repeat="item in products">
                                        <td ><img ng-src="uploads/{{item.img}}" height="50"/></td>
                                        <td>{{item.name}}</td>
                                        <td>{{item.description}}</td>
                                        <td>{{item.price}}</td>
                                        <td>{{item.status | ucfirst}}</td>
                                        <td><i class="fa fa-pencil-square-o"></i></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 57 entries
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button previous disabled"><a href="#">Previous</a></li>
                                        <li class="paginate_button active"><a href="#">1</a></li>
                                        <li class="paginate_button "><a href="#">2</a></li>
                                        <li class="paginate_button "><a href="#">3</a></li>
                                        <li class="paginate_button "><a href="#">4</a></li>
                                        <li class="paginate_button "><a href="#">5</a></li>
                                        <li class="paginate_button "><a href="#">6</a></li>
                                        <li class="paginate_button next"><a href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
@stop
<?php endif;?>