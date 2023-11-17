<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>All users list</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        {{-- before simplepagination hide the talewind class without remvoing tallwind class  --}}
        <style>
            nav .w-5{
                display: none;  
            }
            </style>
{{-- @extends('master') --}}
</head>
<body>
    
    <div class="container">
        <div class="row ">
            <div class="col-7 mt-5">
        <h1>all users list</h1>  
        <table class="table table-bordered table-striped">
            <a href="/newuser" class="btn btn-warning btn-sm">Add New</a>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>City</th>
            <th>View</th>
            <th>Delete</th>
            <th>Update</th>
@foreach ($data as $id => $user )
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->age}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->city}}</td>
                <td><a href="{{route('view.user',$user->id)}}" class="btn btn-primary btn-sm">veiw</a></td>
                <td><a href="{{route('delete.user',$user->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                <td><a href="{{route('update.page',$user->id)}}" class="btn btn-success btn-sm">Update</a></td>
            </tr>
            @endforeach
        </table>
        <div class="mt-5">
            {{ $data->links() }}
        </div>
        
        {{-- <div class="mt-5">
       Total user: {{$data->total()}}
       
    </div>
       Current user: {{$data->currentPage()}}
        </div> --}}
    </div>
</div>
    
</body>
</html>





