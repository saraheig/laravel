@extends('layout')
@section('content')
    <h2>Create an alert</h2>

    <form method="POST" name="formulaire" action="{{ route('features.store') }}">
        {{ csrf_field() }} <br/>
        <div class="form-group">
            <label for="name">Title:</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter a title"/>
            <span class="bg-success">{{ $errors->first('name') }}</span>
        </div><br/>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" value="{{ old('description') }}" placeholder="Enter a description"/>
            <span class="bg-success">{{ $errors->first('description') }}</span>
        </div><br/>
        <h3>Coordinates</h3><br/>
        <div class="form-group">
            <label for="latitude">Latitude:</label>
            <input type="text" name="latitude" value="{{ old('latitude') }}" placeholder="xx.xxxxx"/>
            <span class="bg-success">{{ $errors->first('latitude') }}</span>
        </div><br/>
        <div class="form-group">
            <label for="longitude">Longitude:</label>
            <input type="text" name="longitude" value="{{ old('longitude') }}" placeholder="x.xxxxx"/>
            <span class="bg-success">{{ $errors->first('longitude') }}</span>
        </div><br/>
        <input type="submit" class="btn btn-success" value="Save">
    </form>
@endsection