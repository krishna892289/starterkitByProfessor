@extends('layout')
@section('hero')
    <div class="container mt-3">
        <form class="row g-3" action="{{ route('login_submit') }}" method="POST">
            @csrf
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
            </div>

            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </div>
        </form>
    </div>
@endsection
