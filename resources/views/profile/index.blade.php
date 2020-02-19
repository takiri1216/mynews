@extends('layouts.front')
@section('profile', 'プロフィール')

@section('content')
<div class="container">
    <div class="row">
        <div class="mx-auto">
            <h1>プロフィール画面</h1>
        </div>
    </div>
        <div class="form-group row">
         <label class="col text-right" for="name">名前</label>
            <div class="col">
                <p>{{ \Str::limit($headline->name, 20) }}</p>
            </div>
        </div>
        <div class="form-group row">
        <label class="col text-right" for="gender">性別</label>
            <div class="col">
                <p>{{ \Str::limit($headline->gender, 20) }}</p>
            </div>
        </div>
        <div class="form-group row">
        <label class="col text-right" for="hobby">趣味</label>
            <div class="col">
                <p>{{ \Str::limit($headline->hobby, 20) }}</p>
            </div>
        </div>
        <div class="form-group row">
            <label class="col text-right">自己紹介欄</label>
            <div class="col">
                <p>{{ \Str::limit($headline->introduction, 100) }}</p>            
            </div>
        </div>
</div>
@endsection