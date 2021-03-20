@extends('layouts.app')

@section('content')

<h1>hey guys</h1>

@foreach ($items as $item)

<h1>{{$item->title}}</h1>
<h1>{{$item->user->name}}</h1>
    
@endforeach
    
@endsection