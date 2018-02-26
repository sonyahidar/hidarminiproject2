@extends('layouts.default')
@section('content')
    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title">
            <h1>Log In</h1>
            <p class="lead">Log in here using this form.</p>

        </div>
        <div class="card-body">

            <form action="#" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="username" name="username" class="form-control" id="username">
                    </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
