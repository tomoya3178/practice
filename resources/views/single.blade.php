<html>
    
<body>

<form method="post" action="/draw">
    {{ csrf_field() }}

    @foreach ($hand as $number)
        <p>{{$number}}</p>
        <input type="hidden" name="hand[]" value="{{$number}}">
    @endforeach

    <input type="submit" value="draw">
</form>

@foreach ($hand as $number)
    <form method="post" action="/discard/{{$number}}">
        {{ csrf_field() }}
        <input type="submit" value="discard_{{$number}}">
        <input type="hidden" name="hand[]" value="{{$number}}">
    </form>
@endforeach

@foreach ($discardeds as $discarded)
    <p>{{$discarded}}</p>
@endforeach

</body>

</html>