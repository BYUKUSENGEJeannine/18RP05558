@extends('layouts.app')
@extends('layouts.menu')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>People Information </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="#" title="Create a project"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg" cellspacing="0" cellpadding="0" style="width:1280px; font-size:15px;margin-left:25%;position:absolute;">
        <tr  class="btn-warning">
            <th>No</th>
            <th>Name</th>
            <th>Category</th>
            <th>Email</th>
            <th>Password</th>
            <th>Date Created</th>
            <th >Action</th>
            
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ ++$i }}</td>
         
                <td>{{ $user->name }}</td>
                <td>{{ $user->category }}</td>
                <td>{{$user->email }}</td>
                <td>{{ $user->password}}</td>
                <td>{{ date_format($user->created_at, 'jS M Y') }}</td>
                <td>
            



@csrf

</td>

</tr>

@endforeach

</table>



{!! $users->links() !!}



@endsection