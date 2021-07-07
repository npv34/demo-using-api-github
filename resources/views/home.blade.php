@extends('master')
@section('content')
    <form class="form-inline" method="get" action="{{ route('search.user') }}">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <input name="name" type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Search</button>
    </form>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Image</th>
            <th scope="col">Link</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $key => $user)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $user->login }}</td>
            <td><img width="150" src="{{ $user->avatar_url }}" alt=""></td>
            <td><a href="{{ $user->html_url }}">Link git</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
