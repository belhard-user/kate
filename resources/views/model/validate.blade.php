@extends('layouts.app')

@section('content')
    @if($errors->any())
        <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif

    {{ Form::open() }}
    {{ Form::text('name') }}
    {{ Form::text('age') }}
    <button>click</button>
    {{ Form::close() }}
@endsection