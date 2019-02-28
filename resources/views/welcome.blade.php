@extends('layout.masters')

@section('content')

<div class="content">

<div class="heading">Personalize your Schoters homepage</div>
<div class="subheading">Pick 5 top scholarship categories that you are interested to help us deliver the most relevant infomrmation with your preferences</div>

<form>
<ul>
    <input id="result" type="hidden" name="result">
@foreach ($data as $row)
    <a class="prefer-btn" value="{{$row->name}}">{{$row->name}}</a>
@endforeach
</ul>
    <button class="done-btn" href={{url('done')}} method="POST">Done</a>
</form>

</div>

@stop