@extends('layout.app')

@section('content')
<div>
    <h1 style="text-align: center;">Demo Todo List</h1>
    <a class="btn btn-primary" href="{{ url('/') }}">Go to Home</a>
        <div class="col-md-8">
            <table class="table table-bordered table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($demo as $demos)
                    <tr>
                        <td>{{$demos->id}}</td>
                        <td>{{$demos->name}}</td>
                        <td>{{$demos->description}}</td>
                        <td><a class="btn btn-secondary" href="{{ url('/edit', $demos->id) }}">Edit</a></td>
                        <td><form action="{{url('/destroy', $demos->id)}}" method="Get">
                        
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form></td>
                        <!-- <td><a href="{{url('/destroy', $demos->id)}}" class="btn btn-danger">Delete</a></td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection