@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Image</td>
                        <td>Product Name</td>
                        <td>Desciption</td>
                        <td>Price</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td><img src="{{ asset('images/') }}/{{$product->image}}" width="100" class="img-fluid" alt=""></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>RM {{$product->price}}</td>
                        <td><a href="{{ route('product.detail',['id'=>$product->id])}}" class="btn btn-info btn-xs">Detail</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection