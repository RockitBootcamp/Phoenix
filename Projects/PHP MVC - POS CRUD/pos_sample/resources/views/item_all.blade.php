@extends('layout')

@section('main')
<h1>All Items</h1>

<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Remove</th>
    </tr>

    @foreach($items as $item)
    <tr>
        <td><a href="item/{{ $item->id }}">{{ $item->name }}</a></td>
        <td>{{ $item->price }}</td>
        <td><a href="item/{{ $item->id }}/edit">Edit</a></td>
        <td><a href="item/{{ $item->id }}/delete">Delete</a></td>
    </tr>
    @endforeach

</table>

<a href="{{ URL::to('item/new') }}">New Item</a>
@endsection