@extends('products.layout')

@section('content')
    <div class="row">
        <h2>Edit Product</h2>
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

    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-div">
        <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="name"><strong>Name:</strong></label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="description"><strong>Description:</strong></label>
                    <input type="text" name="description" class="form-control" value="{{ $product->description }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="net_price"><strong>Net Price:</strong></label>
                    <input type="text" name="net_price" class="form-control" value="{{ $product->net_price }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="selling_price"><strong>Selling Price:</strong></label>
                    <input type="text" name="selling_price" class="form-control" value="{{ $product->selling_price }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="total_quantity"><strong>Total Quantity:</strong></label>
                    <input type="text" name="total_quantity" class="form-control" value="{{ $product->total_quantity }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="sold_quantity"><strong>Sold Quantity:</strong></label>
                    <input type="text" name="sold_quantity" class="form-control" value="{{ $product->sold_quantity }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="wasted_quantity"><strong>Wasted Quantity:</strong></label>
                    <input type="text" name="wasted_quantity" class="form-control" value="{{ $product->wasted_quantity }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="transportation_cost"><strong>Transportation Cost:</strong></label>
                    <input type="text" name="transportation_cost" class="form-control" value="{{ $product->transportation_cost }}">
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

{{-- @extends('products.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Product
                </div>
                <div class="card-body">
                    <!-- Ensure the form uses the PUT method for updating -->
                    <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Product Name -->
                        <div class="form-group">
                            <label for="name"><strong>Name:</strong></label>
                            <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                        </div>

                        <!-- Product Description -->
                        <div class="form-group">
                            <label for="description"><strong>Description:</strong></label>
                            <textarea class="form-control" name="description" style="height:150px" placeholder="Description">{{ $product->description }}</textarea>
                        </div>

                        <!-- Net Price -->
                        <div class="form-group">
                            <label for="net_price"><strong>Net Price:</strong></label>
                            <input type="text" name="net_price" value="{{ $product->net_price }}" class="form-control" placeholder="Net Price">
                        </div>

                        <!-- Selling Price -->
                        <div class="form-group">
                            <label for="selling_price"><strong>Selling Price:</strong></label>
                            <input type="text" name="selling_price" value="{{ $product->selling_price }}" class="form-control" placeholder="Selling Price">
                        </div>

                        <!-- Transportation Cost -->
                        <div class="form-group">
                            <label for="transportation_cost"><strong>Transportation Cost:</strong></label>
                            <input type="text" name="transportation_cost" value="{{ $product->transportation_cost }}" class="form-control" placeholder="Transportation Cost">
                        </div>

                        <!-- Total Quantity -->
                        <div class="form-group">
                            <label for="total_quantity"><strong>Total Quantity:</strong></label>
                            <input type="text" name="total_quantity" value="{{ $product->total_quantity }}" class="form-control" placeholder="Total Quantity">
                        </div>

                        <!-- Sold Quantity -->
                        <div class="form-group">
                            <label for="sold_quantity"><strong>Sold Quantity:</strong></label>
                            <input type="text" name="sold_quantity" value="{{ $product->sold_quantity }}" class="form-control" placeholder="Sold Quantity">
                        </div>

                        <!-- Wasted Quantity -->
                        <div class="form-group">
                            <label for="wasted_quantity"><strong>Wasted Quantity:</strong></label>
                            <input type="text" name="wasted_quantity" value="{{ $product->wasted_quantity }}" class="form-control" placeholder="Wasted Quantity">
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
