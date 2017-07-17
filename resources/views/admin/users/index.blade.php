
@foreach($users as $user)
    <li>{!! $user['firstname'] !!} {!! $user['lastname'] !!}  {!! $user['location'] !!}</li>
@endforeach