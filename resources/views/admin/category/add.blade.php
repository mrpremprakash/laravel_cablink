@extends(((Request::ajax()) ? 'layout.plain' : 'layout.default'))
<?php if(Request::ajax()):?>
@section('content')
<div id="page-wrapper" style="min-height: 316px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Add New Category
                <a href="admin/categories" class="pull-right">Back</a></h1>
        </div>
    </div>
    <form name="categoryForm" ng-submit="submitForm(categoryForm.$valid)" novalidate>
        <div class="row">
            <div class="col">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Primary Panel
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 text-right">
                                        <label>Parent Category:</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <select class="form-control" ng-model="categoryForm.parent_id">
                                            <option value="0" selected> Select Parent Category </option>
                                            <option ng-repeat="item in categories" value="{{item.category_id}}">
                                                {{item.name | str_pad:item.level}}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-2 text-right">
                                        <label>Category Name:</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <input class="form-control" ng-required="true" ng-model="categoryForm.name">
                                        <p ng-show="categoryForm.name.$invalid && !categoryForm.name.$pristine" class="help-block">Category name is required.</p>
                                    </div>
                                </div>


                            </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary" ng-disabled="categoryForm.$invalid">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@stop
<?php endif;?>