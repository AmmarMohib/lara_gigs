<!-- <h1>This is Listing Screen</h1> -->
<h1>{{$heading}}</h1>
@php
$test = 1;
@endphp

@if(count($listings) == 0)

<p>no listings found</p>

@endif
{{$test}}
@foreach($listings as $listing)
    <h2>{{$listing['title']}}</h2>
    <p>{{$listing['description']}}</p>
@endforeach

@else
<p>No listings found</p>
@endunless