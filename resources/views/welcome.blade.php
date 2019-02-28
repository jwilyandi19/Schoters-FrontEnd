@extends('layout.masters')

@section('content')
<ul>
@foreach ($data as $row)
    <button type="button" class="prefer-btn" id="">{{$row->name}}</button>
@endforeach
<script>
    window.onload = function (ev) {
        var count = 0;
        $(".prefer-btn").each(function(i, el){
            $(el).click(function(e){
                if($(el).hasClass("active-btn")){
                    $(el).removeClass("active-btn");
                    count--;
                }else if (count <5){
                    $(el).addClass("active-btn");
                    count++;
                }
            });
        });
    };
    </script>
</ul>
@stop