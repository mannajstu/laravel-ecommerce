@extends('admin.master')

@section('content')
<hr/>
<h3 class="text-center text-success">{{ Session::get('message') }}</h3>
<hr/>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Home Slider Image</th>
            <th>Status</th>
            <th>Action</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($sliderImages as $sliderImage)
        <tr> 
            <th><img src="{{ asset($sliderImage->sliderImage) }}"  height="200px" width="100%"></th>
    
           
            
            <td>{{ $sliderImage->publicationStatus == 1 ? 'Published' : 'Unpublished' }}</td> 
            <td>
                <a href="{{ url('/slider/view/'.$sliderImage->id) }}" class="btn btn-info" title="Product View">
                    <span class="glyphicon glyphicon-info-sign"></span>
                </a>
                <a href="{{ url('/slider/edit/'.$sliderImage->id) }}" class="btn btn-success" title="Product Edit">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a href="{{ url('/slider/delete/'.$sliderImage->id) }}" title="Product Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td> 
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
