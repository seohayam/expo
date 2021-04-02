@extends('layouts.app')

@section('content')

@if (isset($item))

<h1>item　詳細</h1>
<h1>{{$item->id}}</h1>
<h1>{{$item->title}}</h1>
<h1>{{$item->user->name}}</h1>
    
@elseif(isset($store))
<h1>store 詳細</h1>
<h1>{{$store->id}}</h1>
<h1>{{$store->name}}</h1>
<h1>{{$store->storeOwner->name}}</h1>
    
@endif

@endsection