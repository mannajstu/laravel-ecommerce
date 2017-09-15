@extends('admin.master')

@section('content')
<hr/>
<table class="table table-bordered table-hover">
    <tr>
        <th>Slider Id</th>
        <th>{{ $sliderImage->id }}</th>
    </tr>
    
    
    <tr>
        <th>Slider Image</th>
        <th><img src="{{ asset($sliderImage->sliderImage) }}" height="200" width="100%" ></th>
    </tr>
    <tr>
        <th>Publication Status</th>
        <th>{{ $sliderImage->publicationStatus == 1 ? 'Published' : 'Unpublished' }}</th>
    </tr>
</table>
@endsection
