@extends('layout')
@section('content')
    <a href="{{ route('features.create') }}" class="btn btn-success">Create a new alert</a><br/><br/>
    
    <h2>List of the alerts</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <td>Title</td>
                <td>Description</td>
                <td>Latitude</td>
                <td>Longitude</td>
            </tr>            
        </thead>
        <tbody>
            @foreach($features as $feature)
            <tr>
                <td>{{ $feature->name }}</td>
                <td>{{ $feature->description }}</td>
                <td>{{ $feature->coordLat }}</td>
                <td>{{ $feature->coordLng }}</td>
            </tr>     
            @endforeach
        </tbody>
    </table>
    
@endsection