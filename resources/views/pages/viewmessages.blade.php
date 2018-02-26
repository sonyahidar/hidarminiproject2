@extends('layouts.default')
@section('content')

    <h1>View Messages</h1>

    <br><br>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Messages</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th><a href="/messagebody">Requesting a Demo ASAP</a></th>
            <td>
                <form action="#" method="post">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>
        </tr>
        </tbody>
    </table>

@endsection
