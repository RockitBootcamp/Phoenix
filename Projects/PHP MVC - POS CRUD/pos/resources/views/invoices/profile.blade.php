@extends('app')

@section('content')

    <h3>Invoice: {{ $invoice->id }}</h3>

    <!-- Validation Errors -->
    @if($errors->any())
        <ul class="error">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif

    @if ($items)
        <table border="1">
            <thead>
                <tr>
                    <th>Qty</th>
                    <th>Item</th>
                    <th>Cost</th>
                    <th>Sub Total</th>
                    <th>Remove</th>
                </tr>
            </thead>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->name }}</td>
                    <td>${{ $item->price }}</td>
                    <td>${{ $item->total }}</td>
                    <td><a href="#">Remove</a></td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No items</p>
    @endif

    <fieldset>
        <legend>Add Item to Invoice</legend>

        <form action="">
            <input type="text" name="quantity" placeholder="Quantity">
            <select name="item_id">
             @foreach ($all_items as $item)
                 <option value="{{ $item->id }}">{{ $item->name }}</option>
             @endforeach   
            </select>
            <button>Add Item</button>
        </form>
        
    </fieldset>

@endsection