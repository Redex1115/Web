@extends('layout')
@section('content')
<div class="row">
    <div class="co1-sm-3">

    </div>
    <div class="co1-sm-6">
        <br><br>
        <h3>Create New Category</h3>
        <form action="">
            <div class="form-group">
                <label for="categoryName">Category Name</label>
                <input type="text" class="form-control" id="categoryName" name="categoryName">

            </div>
            <button type="submit">Add New</button>
        </form>
        <br><br>
    </div>
    <div class="co1-sm-3">

    </div>
</div>
@endsection