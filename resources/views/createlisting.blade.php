@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">createListing</div>

                <div class="panel-body">

                    <h3>createlisting</h3>

                    {{ Form::open(['url' => route('listings.store'), 'method' => 'POST' ]) }}
<div class="form-group">
{{ Form::label('name', 'Name') }} <em>*</em>
{{ Form::text('name','entername', ['class' => 'form-control','required' => 'required']) }}
</div>

<div class="form-group">
{{ Form::label('Website', 'website') }} <em>*</em>
{{ Form::text('website','enter website name', ['class' => 'form-control', 'required' => 'required']) }}
</div>


<div class="form-group">
{{ Form::label('email', 'Email') }} <em>*</em>
{{ Form::email('email','enter email', ['class' => 'form-control',  'required' => 'required']) }}
</div>


<div class="form-group">
{{ Form::label('phone', 'Phone') }} <em>*</em>
{{ Form::text('phone','phone no', ['class' => 'form-control',  'required' => 'required']) }}
</div>

<div class="form-group">
{{ Form::label('address', 'Address') }} <em>*</em>
{{ Form::text('address','enter Address', ['class' => 'form-control',  'required' => 'required']) }}
</div>

<div class="form-group">
{{ Form::label('bio', 'Bio') }} <em>*</em>
{{ Form::text('bio','Enter Bio data', ['class' => 'form-control',  'required' => 'required']) }}
</div>

<div class="form-group">
	{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
</div>

            				{{ Form::close() }}






               </div>
            </div>
        </div>
    </div>
</div>
@endsection
