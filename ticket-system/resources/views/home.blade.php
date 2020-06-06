@extends('layouts.app')
<style>
.links > a {
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
}
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="links">
                        <a href="{{ route('ticket.create') }}">Open a new Ticket</a>
                        <a href="{{ route('article.create') }}">Write an new Article</a>
                    </div>

                </div>
            </div>
            <div class="m-3">
                <h3>New Articles</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th><th>Name</th><th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($article as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td><td>{{ $item->description }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
