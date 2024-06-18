@extends('products.layout')

@section('content')
<div class="row">
    <h2>Add New Product</h2> 
</div><hr><br>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="form-div">
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="name"><strong>Name:</strong></label>
                <input type="text" name="name" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="description"><strong>Description:</strong></label>
                <input type="text" name="description" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="net_price"><strong>Net Price:</strong></label>
                <input type="text" name="net_price" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="selling_price"><strong>Selling Price:</strong></label>
                <input type="text" name="selling_price" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="transportation_cost"><strong>Transportation Cost:</strong></label>
                <input type="text" name="transportation_cost" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="total_quantity"><strong>Total Quantity:</strong></label>
                <input type="text" name="total_quantity" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="wasted_quantity"><strong>Wasted Quantity:</strong></label>
                <input type="text" name="wasted_quantity" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center act-btns">
            <a class="btn btn-primary cus-btn" href="{{ route('products.index') }}"> Back</a>
            <button type="submit" class="btn btn-success cus-btn">Submit</button>
        </div>
    </div>
</div>

</form>
@endsection