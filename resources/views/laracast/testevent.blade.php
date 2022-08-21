
@can('test-event')
<form action="/testevent" method="POST">
    @csrf
    <button type="submit" name="testevent" value="1">Test Event</button>
</form>

@endcan

xx