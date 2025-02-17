 @extends('master')
@section('content') 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>
    <div class="container">
        <div class="card shadow-lg mb-4">
            <div class="card-header bg-primary text-white">
                <h4>Details</h4>
            </div>
            <table class="table table-striped table-bordered table-hover">
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $emplo)
                            <tr>
                                <td>{{ $emplo->id }}</td>
                                <td>{{ $emplo->em_name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>

                    
</body>
</html>
@endsection 