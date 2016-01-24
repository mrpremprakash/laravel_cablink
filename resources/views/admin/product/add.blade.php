@extends(((Request::ajax()) ? 'layout.plain' : 'layout.default'))

<?php if(Request::ajax()):?>
@section('content')
<div id="page-wrapper" style="min-height: 316px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add New Product<a href="admin/products" class="pull-right">Back</a></h1>
        </div>
    </div>
    <form name="productForm" ng-submit="submitForm(productForm.$valid)"
          novalidate action="" class="dropzone" dropzone="" id="dropzone">
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
                                    <label>Category:</label>
                                </div>
                                <div class="col-lg-10">
                                    <select class="form-control" ng-model="productForm.category_id">
                                        <option value="0" selected> Select Parent Category </option>
                                        <option ng-repeat="item in categories" value="{{item.category_id}}">
                                            {{item.name}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-2 text-right">
                                    <label>Product Name:</label>
                                </div>
                                <div class="col-lg-10">
                                    <input class="form-control" ng-required="true" ng-model="productForm.name">
                                    <p ng-show="productForm.name.$invalid && !productForm.name.$pristine" class="help-block">Product name is required.</p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-2 text-right">
                                    <label>Price:</label>
                                </div>
                                <div class="col-lg-10">
                                    <input class="form-control" ng-required="true" ng-model="productForm.price">
                                    <p ng-show="productForm.name.$invalid && !productForm.name.$pristine" class="help-block">Price is required.</p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-2 text-right">
                                    <label>Description:</label>
                                </div>
                                <div class="col-lg-10">
                                    <textarea class="form-control" ng-required="true" ng-model="productForm.desc"></textarea>
                                    <p ng-show="productForm.name.$invalid && !productForm.name.$pristine" class="help-block">Price is required.</p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-2 text-right">
                                    <label>Image:</label>
                                </div>
                                <div class="col-lg-10">
                                    <div class="dz-default dz-message">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-2 text-right">
                                    <label>Status:</label>
                                </div>
                                <div class="col-lg-10">
                                    <div class="form-group">

                                        <label class="radio-inline">
                                            <input type="radio" ng-model="productForm.status" name="status" id="optionsRadiosInline1" value="active" checked="">Active
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" ng-model="productForm.status" name="status" id="optionsRadiosInline2" value="pending">Pending
                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary" ng-disabled="productForm.$invalid">Submit</button>
                        <button class="btn btn-success" ng-click="uploadFile()">Upload File</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
</div>
@stop
<?php endif;?>