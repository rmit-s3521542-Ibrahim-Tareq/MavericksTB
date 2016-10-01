@extends('admin.components.global')

@section('content')
<div class="container">
    <h1>Mavericks Administration</h1>
    <p>
        Welcome to Mavericks Administration.
    </p>
    <p>
        This area is actively montiored. Unauthorised access is strictly prohibited.
    </p>
    <h3>Select an action:</h3>
    <ol>
        <li><a href="{{url('/')}}">Return Home</a></li>
        <li><a href="{{url('/admin/movies')}}">Manage Movies</a></li>
        <li><a href="{{url('/admin/hot')}}">Manage Hot Movies</a></li>
        <li><a href="{{url('/admin/carousel')}}">Manage Carousel</a></li>
    </ol>
</div>
@endsection