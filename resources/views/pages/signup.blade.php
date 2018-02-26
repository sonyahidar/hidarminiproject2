@extends('layouts.default')
@section('content')
    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title">
            <h1>Sign Up</h1>
            <p class="lead">Sign up here using this form.</p>

        </div>
        <div class="card-body">

            <form action="/contact" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" name="name" class="form-control" id="name">
                    </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                    </small>
                </div>
                <div class="form-group">
                    <label for="password">Enter a Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>

                <div class="form-group">
                    <label for="password2">Confirm password</label>
                    <input type="password" name="password2" class="form-control" id="password2">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
