@extends('layout.app')

@section('content')
    <h1 style="text-align: center;">Demo Todo List</h1>
    
    <a class="btn btn-primary" href="{{ route('dashboard') }}">Go to Dashboard</a>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('create') }}" Method="POST">
            @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="description" placeholder="Description" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
    </div>

</div>

@endsection