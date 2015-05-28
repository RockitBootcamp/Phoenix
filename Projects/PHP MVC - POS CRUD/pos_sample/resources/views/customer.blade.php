@extends('layout')

@section('main')
<h1>Customer: {{ $customer->id }}</h1>

<div><span>Name:</span><span>{{ $customer->fullName() }}</span></div>
<div><span>Email:</span><span>{{ $customer->email }}</span></div>
<div><span>Phone:</span><span>{{ $customer->phone }}</span></div>
<div><span>Gender:</span><span>{{ $customer->gender }}</span></div>
<div><span>Customer Since:</span><span>{{ $customer->customer_since }}</span></div>
<div><a href="{{ URL::to('customer') }}/{{ $customer->id }}/edit">Edit</a></div>

@endsection

