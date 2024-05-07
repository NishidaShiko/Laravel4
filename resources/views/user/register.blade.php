@extends('layout')

@section('contets')
        <h1>ユーザー登録</h1>
        @if ($errors->any())
            <div>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
            </div>
        @endif
        <form action="/login" method="post">
            @csrf
            名前: <input name="name" value="{{ old('name') }}"><br>
            email：<input name="email" value="{{ old('email') }}"><br>
            パスワード：<input  name="password" type="password"><br>
            <button>登録する</button><br>
        </form>
@endsection