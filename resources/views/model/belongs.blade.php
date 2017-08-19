@extends('layouts.app')

@section('content')
    <ol>
        @foreach($phones as $phone)
            <li>
                {{ $phone->phone_number }}
                @if($phone->user)
                    <h4>{{ $phone->user->name }}</h4>
                @endif
            </li>
        @endforeach
    </ol>
@endsection