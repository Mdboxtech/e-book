@extends('layout.app2')

@section('bdycontent')
    <div style="position: relative; margin-top:100px !important;" class="container">
        <div   class="card shadow mb-4 p-2 table-responsive mdtable">

<table class="table table-sm">
    <h2 class="text-capitalize text-center">manage user</h2>
<thead >
    <tr >
        <th></th>
        <th>name</th>
        <th>username</th>
        <th>faculty</th>
        <th>type</th>
        <th>course</th>
        <th>number</th>
        <th>email</th>
        <th></th>
        <th></th>
    </tr>
</thead>
    <tbody>


        @foreach ($users as $user )

@if( $user->type == 'developer' || $user->type == 'developer')

@else
<tr>
    <td><a href="{{asset('storage/'.$user->profileimg)}}"></"><img class="img-fluid shadow"  style="border-radius: 20px" width="20px" src="{{asset('storage/'.$user->profileimg)}}"></a></td>
    <td>{{$user->name}}</td>
    <td>{{$user->username}}</td>
    <td>{{$user->faculty}}</td>
    <td>{{$user->type}}</td>
    <td>{{$user->course}}</td>
    <td>{{$user->number}}</td>
    <td>{{$user->email}}</td>
    <td style="text-align: right">
        <a href="/file/{{$user->id}}/edit"><button   class="btn btn-secondary btn-sm  p-1 m-0"><i class="fa fa-cancel"></i> block</button></a></td>

    <td  style="text-align: right">
        <form onsubmit="return confirm('are you sure you want to delete this file');" action="/user/destroy" method="post">

            @csrf
            <input type="hidden" name="id" value="{{$user->id}}">
            <button  class="btn btn-danger btn-sm p-1 m-0"><i class="fa fa-trash"></i> delete</button>
        </form>
    </td>
</tr>
@endif

@endforeach

    </tbody>
</table>

    {{$users->links()}}


        </div>
    </div>
@endsection
