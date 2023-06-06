@extends('layout.app2')

@section('bdycontent')

    <div style="position: relative; margin-top:100px !important;" class="container">

        <div class="card-body mdbox">
            <div class="row">
                <div  class="col-md-2">
                    <img  class="img-fluid" src="{{ asset('storage/'.$files->poster) }}">
                </div>
                <div class="col-md">

                    <h4 class="card-title">{{$files->filename}}</h4>


                  <p class="card-text">{{$files->description}}</p>



<p class="card-text">
file categories:
   <a  href="/school?faculty={{$files->faculty}}"> <label class="text-info">{{$files->faculty}},</label></a>
    <label class="text-info" >{{$files->course}}</label>
</p>
<small><p>file size:</p></small>
                   <a target="_blank" href="{{asset('storage/'.$files->file)}}"> <button class="btn btn-outline-success"><i class="fa fa-eye"></i> Preview</button></a>
                   <a href="{{asset('storage/'.$files->file)}}" download="{{$files->filename}}"> <button class="btn btn-outline-success"><i class="fa fa-download"></i> Download</button></a>

                   @auth

                   <a href="/saveDraft/{{$files->id}}" > <button class="btn btn-outline-success"><i class="fa-solid fa-box"></i> save</button></a>
                       @if(auth()->user()->type != null && auth()->user()->id == $files->user_id)
                   <a href="/file/{{$files->id}}/edit"> <button class="btn btn-outline-success">Edit</button></a>
@endif
                   @endauth
                </div>
            </div>

        </div>

        <section style="margin-top: -70px">
            <div class="mdbox2">


            <h4>Other related file</h4>
            <div class="other">
                <div style=" justify-content:center; align-item:center" class="row">
@foreach ($orderfiles as $orderfile )

<div style="width:200px" class="col-md-2 mt-2">
    <a style="text-decoration: none; color:black" href="/view/{{$orderfile->id}}/description">
        <img style="height: 200px" class="img-fluid" src="{{ asset('storage/'.$orderfile->poster) }}" alt="" srcset="">
        <small>
            <p> <b>{{$orderfile->filename}}</b></p>
        </small>
    </a>
</div>
@endforeach






                </div>
            </div>
        </div>
        </section>





    </div>
@endsection
