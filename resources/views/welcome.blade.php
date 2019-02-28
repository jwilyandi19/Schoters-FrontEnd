@extends('layout.masters')

@section('content')

<div class="content">

<div class="heading">Personalize your Schoters homepage</div>
<div class="subheading">Pick 5 top scholarship categories that you are interested to help us deliver the most relevant information with your preferences</div>

<form method="POST" action="/posting">
<ul>
    <input id="result" type="hidden" name="result">
@foreach ($data as $row)
    <a class="prefer-btn" value="{{$row->name}}">{{$row->name}}</a>
@endforeach
</ul>
    <button class="done-btn" type="submit" >Done</a>
</form>

</div>

@stop