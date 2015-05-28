@extends('layout')

@section('main')
    <h1>All Users</h1>
    <table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($users as $u)
    <tr>
    <!-- fill in the table rows here -->
    </tr>
    @endforeach
    </table>
    <div>
        <a href="/users/create">New User</a>
    </div>
@endsection