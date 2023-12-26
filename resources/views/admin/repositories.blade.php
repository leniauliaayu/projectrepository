@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Repositories</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($repositories as $repository)
                            <tr>
                                <td>{{ $repository->title }}</td>
                                <td>{{ $repository->description }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $repositories->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection