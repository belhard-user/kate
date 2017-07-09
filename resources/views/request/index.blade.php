@extends('layouts.app')

@section('content')
    <div class="container">

        {{ Form::open(['files' => true]) }}
            {{ Form::text('name',  null, ['placeholder' => 'Имя']) }}<br>
            {{ Form::text('age',  null, ['placeholder' => 'Возраст']) }}<br>
            {{ Form::text('email',  null, ['placeholder' => 'email']) }}<br>
            {{ Form::checkbox('active', 1) }}<br>
            {{ Form::textarea('description') }}<br>
            {{ Form::file('avatar') }}
            <button>жмяк</button>
        {{ Form::close() }}

        {{--<form action="" method="post">
            {{ csrf_field() }}
            --}}{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}{{--
            <input type="text" name="name" placeholder="name"><br>
            <input type="text" name="age" placeholder="age"><br>
            <input type="text" name="email" placeholder="email"><br>
            <input type="checkbox" name="active" value="1"><br>
            <textarea name="description" id="" cols="30" rows="10"></textarea><br>
            <button>жмяк</button>
        </form>--}}

        @foreach($records as $record)
            <section>
                <h3>{{ $record->name }}</h3>
                <img width="200" src="{{ $record->avatar }}" alt="">
            </section>
        @endforeach
    </div>
@endsection