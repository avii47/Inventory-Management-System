@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Dashboard</h2>
            </div><hr>
            <div class="btn-create-product">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div><br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th class="PTH">Product Name</th>
            <th class="PTH">Product Description</th>
            <th class="PTH">Current Stock Quantity</th>
            <th class="PTH">Profit/Loss Status</th>
        </tr>
        @foreach ($products as $product)
        <tr id="product-{{ $product->id }}" class="clickable-row" data-href="{{ route('products.show', $product->id) }}">
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->remaining_quantity }}</td>
            <td>{{ $product->ProfitLossStatus }}</td>    
        </tr>
        @endforeach
    </table>

    {{ $products->links() }}


    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            const rows = document.querySelectorAll('.clickable-row');
            rows.forEach(row => {
                row.addEventListener('click', function() {
                    window.location.href = this.dataset.href;
                });
            });
        });
    </script> 

@endsection
