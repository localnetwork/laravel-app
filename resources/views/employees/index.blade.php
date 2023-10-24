@extends('layouts.app') <!-- Assuming you have a layout, adjust as needed -->

@section('content')
    <h1>Employee List</h1>
    <ul>
        @foreach ($employees as $employee)
            <li>
                    {{ $employee->name }}
            </li>
        @endforeach
    </ul>
@endsection