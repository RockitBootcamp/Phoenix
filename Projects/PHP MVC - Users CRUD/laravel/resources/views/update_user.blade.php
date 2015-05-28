@extends('layout')

@section('main')
<h1>Edit User</h1>
<form action="/users/{{ $user->id }}/update" method="POST">
    <!-- create form input fields here -->
</form>
@endsection