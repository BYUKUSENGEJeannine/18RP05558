@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>People Information </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('citizens.create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg" cellspacing="0" cellpadding="0" style="width:1300px; font-size:15px">
        <tr  class="btn-warning">
            <th>No</th>
            <th>ID Number</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Gender</th>
            <th>Status</th>
            <th>Village</th>
            <th>Cell</th>
            <th>Sector</th>
            <th>District</th>
            <th>Date Created</th>
            <th >Action</th>
            
        </tr>
        @foreach ($citizens as $citizen)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $citizen->idno}}</td>
                <td>{{ $citizen->fname }}</td>
                <td>{{ $citizen->lname }}</td>
                <td>{{ $citizen->gender }}</td>
                <td>{{ $citizen->status}}</td>
                <td>{{ $citizen->village}}</td>
                <td>{{ $citizen->cell}}</td>
                <td>{{ $citizen->sector}}</td>
                <td>{{ $citizen->district}}</td>
                <td>{{ date_format($citizen->created_at, 'jS M Y') }}</td>
                <td>
                <form action="{{ route('citizens.destroy',$citizen->id) }}" method="POST">

   

<a class="btn btn-info" href="{{ route('citizens.show',$citizen->id) }}">Show</a>



<a class="btn btn-primary"  href="{{ route('citizens.edit',$citizen->id) }}">Edit</a>



@csrf

@method('DELETE')



<button type="submit" class="btn btn-danger">Delete</button>

</form>

</td>

</tr>

@endforeach

</table>



{!! $citizens->links() !!}



@endsection