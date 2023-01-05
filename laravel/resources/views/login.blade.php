@extends('templates.auth')

{{-- @section('css')
<link href="/asserts/css/login.css" rel="stylesheet">
@endsection --}}

@section('content-main')
    <form action="{{ route('auth.create') }}" method="post">
        @csrf
        <p>Please login to your account</p>

        <div class="form-outline mb-4">
            <label id="error" class="form-label hide">Error: </label>
            <input type="email" id="form2Example11" name="email" class="form-control"
                placeholder="Phone number or email address" />
            <label class="form-label" for="form2Example11">Username</label>
        </div>

        <div class="form-outline mb-4">
            <input type="password" id="form2Example22" name="password" class="form-control" />
            <label class="form-label" for="form2Example22">Password</label>
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                in</button>
            <a class="text-muted" href="#">Forgot password?</a>
        </div>

        <div class="d-flex align-items-center justify-content-center pb-4">
            <p class="mb-0 me-2">Don't have an account?</p>
            <button type="button" class="btn btn-outline-danger">Create new</button>
        </div>

    </form>
@endsection
