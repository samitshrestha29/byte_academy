@extends('layouts.app')

@section('content')
<div style="color: red">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
</div>

<div style="color: rgb(0, 255, 94)">
    @if (Session::has('success'))
            {{ Session::get('success') }}
    @endif
</div>


<form action="{{ route('contact.submit') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name</label>
        @error('name')
            <div style="color:red">{{ $message }}</div>
        @enderror
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="email">Email</label>
        @error('email')
            <div style="color:red">{{ $message }}</div>
        @enderror
        <input type="text" name="email" id="email">
    </div>

    <div>
        <label for="message">Message</label>
        @error('message')
            <div style="color:red">{{ $message }}</div>
        @enderror
        <textarea name="message" id="message"></textarea>
    </div>

    <button type="submit">Submit</button>
</form>
@dd(Session::all())
@endsection
