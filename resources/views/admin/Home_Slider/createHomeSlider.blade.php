@extends('admin.master')

@section('content')
<hr/>
<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
        <hr/>
        <div class="well">
            {!! Form::open( [ 'url'=>'slider/save', 'method' =>'POST', 'class' =>'form-horizontal', 'enctype'=>'multipart/form-data' ] ) !!}

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Slider Image</label>
                <div class="col-sm-10">
                    <input type="file" name="sliderImage" accept="image/*">
                    <span class="text-danger">{{ $errors->has('sliderImage') ? $errors->first('sliderImage') : '' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Publication Status</label>
                <div class="col-sm-10">
                    <select class="form-control" name="publicationStatus">
                        <option>Select Publication Status</option>
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option> 
                    </select>

                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="btn" class="btn btn-success btn-block">Save Home Slider</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
