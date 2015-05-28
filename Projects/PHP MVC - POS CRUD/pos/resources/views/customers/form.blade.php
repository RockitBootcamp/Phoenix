@extends('app')

@section('content')

    <h3>Add / Edit Customer</h3>

    <!-- Validation Errors -->
    @if($errors->any())
        <ul class="error">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif

    <form action="process-form" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="customer_id" value="{{ $customer['id'] or '' }}">
        <div>
            First Name: <input type="text" name="first_name" value="{{ $customer['first_name'] or '' }}">
        </div>
        <div>
            Last Name: <input type="text" name="last_name" value="{{ $customer['last_name'] or '' }}">
        </div>
        <div>
            Email: <input type="text" name="email" value="{{ $customer['email'] or '' }}">
        </div>
        <div>
            Gender: <input type="text" name="gender" placeholder="M or F" value="{{ $customer['gender'] or '' }}">
        </div>

        <footer>
            <a href="/customers" class="button">Back</a>
            <button>Submit</button>
        </footer>
        
    </form>

@endsection