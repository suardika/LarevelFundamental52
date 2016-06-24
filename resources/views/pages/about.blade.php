@extends('app')

@section('content')

    <h1>About</h1>

    <h3>People I Like:</h3>

    @if(count($people))
        <ul>
            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
    @endif

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu nulla quam. Suspendisse potenti. Suspendisse a dolor feugiat, pulvinar risus egestas, porta erat. Proin bibendum aliquet fermentum. Suspendisse accumsan rhoncus ex, sit amet faucibus sapien. Fusce diam tortor, feugiat pretium nisi vitae, laoreet interdum nisi. Morbi ultricies nisi metus, nec blandit sapien dignissim sed. Integer vel leo eget purus eleifend euismod. Phasellus tempus sagittis lacus, aliquam sodales ipsum pellentesque at. Aliquam congue lorem at ultrices consectetur. Cras blandit, erat eu tincidunt pellentesque, ex est dignissim tortor, nec laoreet ligula massa eu lectus. Praesent auctor odio nec odio iaculis tempor.</p>
@stop

