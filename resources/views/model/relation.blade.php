@extends('layouts.app')

@section('content')
    <ul>
        @foreach($users as $user)
            <li>
                {{ $user->name }}
                @if(! $user->phones->isEmpty())
                    <ol>
                        @foreach($user->phones as $phone)
                            <li>{{ $phone->phone_number }}</li>
                        @endforeach
                    </ol>
                @else
                    <p>Нету телефона вообще</p>
                @endif
            </li>
        @endforeach
    </ul>
@endsection