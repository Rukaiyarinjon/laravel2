@extends('master')
@section('content')

<h1 class="text-center my-4">Relationship -> One to One</h1>
    <div class="container">
        <div class="card shadow-lg mb-4">
            <div class="card-header bg-primary text-white">
                <h4>Mechanic Types Overview</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Sub Type</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($types as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->details }}</td>
                                <td>{{ $data->subtype->name }}</td>
                                <td>{{ $data->subtype->note }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
