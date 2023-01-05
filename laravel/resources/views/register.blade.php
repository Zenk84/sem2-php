@extends('templates.auth')

{{-- @section('css')
<link href="/asserts/css/login.css" rel="stylesheet">
@endsection --}}

@section('content-main')
    <form action="{{ route('auth.register.create') }}" method="post">
        @csrf
        <p>Please login to your account</p>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="form-outline mb-4">
            <label class="form-label" for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" class="form-control"
                placeholder="Full name" value="{{ old('fullName') }}" />
            @error('fullName')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control"
                placeholder="Email address" />
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" />
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="password_confirmation" class="form-control" />
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Submit</button>
        </div>

    </form>
@endsection
