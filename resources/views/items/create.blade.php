@extends('layouts.app')

@section('content')
<h1>追加画面</h1>

@if(count($errors)>0)

    @error('titile')
        <p>{{$message}}</p>
    @enderror

    @error('value')
        <p>{{$message}}</p>
    @enderror

    @error('item_url')
        <p>{{$message}}</p>
    @enderror

    @error('image')
        <p>{{$message}}</p>
    @enderror

    @error('descripion')
        <p>{{$message}}</p>
    @enderror

@endif

<form method="POST" action="{{route('items.store')}}" enctype="multipart/form-data">
    @csrf
    <input name="titile" type="text" placeholder="title" value="{{ old('title') }}">
    <input name="value" type="number" placeholder="value" value="{{ old('value') }}">
    <input name="item_url" type="text" placeholder="url" value="{{ old('item_url') }}">
    <input name="image"  type="file" id="">
    <textarea name="descripion" id="" cols="30" rows="10" placeholder="description" value="{{old('description')}}"></textarea>
    <input type="submit" name="" id="" value="投稿">
</form>
    



@endsection