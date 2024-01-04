@extends('layouts.default')

@section('title', 'User title')

@push('styles')
<link rel="stylesheet" 
href="{{asset('css/user.css')}}">
@section('sidebar')

<div>

    <nav>
        sidebar do usuario

    </nav>

</div>

@endsection

@section('content')
<h1> User </h1>

{{$user->name}} <br>
{{$user->email}} <br>
@endsection

@push('scripts')
<script src="{{ asset ('js/app.js')}}"></script>
    
@endpush

@prepend('scripts')

<script>

    var user = 'Guima';

</script>
<script src="{{ asset ('js/app.js')}}"></script>
    
@endprepend