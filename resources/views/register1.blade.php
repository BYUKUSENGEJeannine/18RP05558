@extends('layouts.app')
@extends('layouts.menu')
@section('content')
<div class="container"  style='width:50%;top:40%; left:40%; position:absolute;'>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create User</h2>
            </div>
            
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="insertUser" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>username:</strong>
                    <input type="text" name="name" class="form-control" placeholder="name">
                </div>
            </div>
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>password:</strong>
                    <input type="password" name="password" class="form-control" placeholder="password">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group" >
                    <strong>category:</strong>
                    <select name="category" class="form-control" style="height:40px;">
                    <option>Mudugudu</option>
                    <option>Administrator</option>
                    
                    </select>
                   
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">insert</button>
            </div>
        </div>

    </form>
    </div>
@endsection