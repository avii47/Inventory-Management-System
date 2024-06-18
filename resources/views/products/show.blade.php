@extends('products.layout')

@section('content')
    <div>
        <div class="row">
            <h2>Product Details</h2>
        </div><hr><br>
    
        <div class="form-div">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="name"><strong>Name:</strong></label>
                        <input type="text" name="name" class="form-control" value="{{ $product->name }}" readonly>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="description"><strong>Description:</strong></label>
                        <input type="text" name="description" class="form-control" value="{{ $product->description }}" readonly>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="net_price"><strong>Net Price:</strong></label>
                        <input type="text" name="net_price" class="form-control" value="{{ $product->net_price }}" readonly>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="selling_price"><strong>Selling Price:</strong></label>
                        <input type="text" name="selling_price" class="form-control" value="{{ $product->selling_price }}" readonly>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="total_quantity"><strong>Total Quantity:</strong></label>
                        <input type="text" name="total_quantity" class="form-control" value="{{ $product->total_quantity }}" readonly>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="sold_quantity"><strong>Sold Quantity:</strong></label>
                        <input type="text" name="sold_quantity" class="form-control" value="{{ $product->sold_quantity }}" readonly>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="wasted_quantity"><strong>Wasted Quantity:</strong></label>
                        <input type="text" name="wasted_quantity" class="form-control" value="{{ $product->wasted_quantity }}" readonly>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="remaining_quantity"><strong>Remaining Quantity:</strong></label>
                        <input type="text" name="remaining_quantity" class="form-control" value="{{ $product->remaining_quantity }}" readonly>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="total_revenue"><strong>Total Revenue:</strong></label>
                        <input type="text" name="total_revenue" class="form-control" value="{{ $product->total_revenue }}" readonly>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="transportation_cost"><strong>Transportation Cost:</strong></label>
                        <input type="text" name="transportation_cost" class="form-control" value="{{ $product->transportation_cost }}" readonly>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="profit_margin"><strong>Profit Margin:</strong></label>
                        <input type="text" name="profit_margin" class="form-control" value="{{ $product->profit_margin }}" readonly>
                    </div>
                </div>
            </div>
    
            <form class="act-btns text-center" action="{{ route('products.destroy',$product->id) }}" method="POST">
                <a class="btn btn-primary cus-btn" href="{{ route('products.index') }}"> Back</a>
                <a class="btn btn-success cus-btn" href="{{ route('products.edit',$product->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger cus-btn">Delete</button>
            </form>
        </div>
    </div>
    


@endsection