@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <br><br>
        <h3>My Order</h3>
        <table class="table table-bordered">
                <thead>
                    <tr>                 
                        <td>Order ID</td>                  
                        <td>Date Time</td>
                        <td>Amount</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->amount}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <a href="{{route('pdfReport')}}" class="btn btn-info btn-xs">Download Report</a>
            </div>
    </div>
    <div class="col-sm-1"></div>
</div>