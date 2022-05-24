@extends('template.auth')

@section('form')
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" class="form-control" name="username" id="Username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" name="password" id="Password" autocomplete="current-password" placeholder="Password">
        </div>
{{--        <div class="form-check form-check-flat form-check-primary">--}}
{{--            <label class="form-check-label">--}}
{{--                <input type="checkbox" class="form-check-input">--}}
{{--                Remember me--}}
{{--            </label>--}}
{{--        </div>--}}
        <div class="mt-3">
            <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">
                Login
            </button>
{{--            <button type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">--}}
{{--                <i class="btn-icon-prepend" data-feather="twitter"></i>--}}
{{--                Login with twitter--}}
{{--            </button>--}}
        </div>
    </form>
    <a href="{{route('register')}}" class="d-block mt-3 text-muted">Not a user? Sign up</a>

@endsection
