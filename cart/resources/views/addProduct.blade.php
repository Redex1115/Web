@extends('layout')
@section('content')
<div class="row">
    <div class="co1-sm-3">

    </div>
    <div class="co1-sm-6">
        <br><br>
        <h3>Create New Product</h3>
        <form action="">
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" class="form-control" id="productName" name="productName">

            </div>
            <div class="form-group">
                <label for="productDescription">Product Description</label>
                <input type="text" class="form-control" id="productDescription" name="productDescription">

            </div>
            <div class="form-group">
                <label for="productPrice">Product Price</label>
                <input type="text" class="form-control" id="productPrice" name="productPrice" min="0">

            </div>
            <div class="form-group">
                <label for="productQuantity">Product Quantity</label>
                <input type="text" class="form-control" id="productQuantity" name="productQuantity" min="0">

            </div>
            <div class="form-group">
                <label for="catID">Category</label>
                <input type="text" class="form-control" id="CategoryID" name="categoryID">

            </div>
            <div class="form-group">
                <label for="productImage">Image</label>
                <input type="file" class="form-control" id="CategoryID" name="categoryID">

            </div>
            <button type="submit">Add New</button>
        </form>
        <br><br>
    </div>
    <div class="co1-sm-3">

    </div>
</div>
@endsection