@extends('app')

@section('content')

    <h3>Customers</h3>

    <!-- Validation Errors -->
    @if($errors->any())
        <ul class="error">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif

    @if ($customers)
        <table border="1">
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->first_name }} {{ $customer->last_name }}</td>
                    <td><a href="/customer/{{ $customer->id }}/add-invoice">Add Invoice</a></td>
                    <td><a href="/customer/form?customer_id={{ $customer->id }}">Edit</a></td>
                    <td><a href="/customer/remove/{{ $customer->id }}">Remove</a></td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No customers</p>
    @endif

    <footer>
        <a href="/customer/form" class="button">Add Customer</a>
    </footer>

@endsection