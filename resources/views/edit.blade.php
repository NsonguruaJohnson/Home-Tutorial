@extends('layout.app')

@section('content')
    <h1 style="text-align: center;">Edit Todo List</h1>
    
    <a class="btn btn-primary" href="{{ route('dashboard') }}">Go to Dashboard</a>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ url('/update', $demo->id) }}" Method="POST">
            @csrf
                <div class="form-group">
                    <input type="text" class="form-control" value="{{$demo->name}}" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{$demo->description}}" name="description" placeholder="Description" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        
    </div>

</div>

@endsection