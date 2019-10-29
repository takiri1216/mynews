<!DOCTYPE html>
<html>
    <head>
        <meta chaset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>MyNews Profile</title>
    </head>
    <body>
        @extends('layouts.profile')
        
        @section('title', 'My プロフィール')
        
        @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <h1>My　プロフィール</h1>
                        <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                            
                            @if (count($errors) >0)
                            <ul>
                                @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                            @endif
                            
                            <div class="form-group row">
                                <label class="col-md-2">氏名</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">性別</label>
                                <div class="col-md-10">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="gender" value="男">男
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="gender" value="女">女
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="gender" value="どちらとも言えない">どちらとも言えない
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">趣味</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">自己紹介欄</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="introduction" rows="10">{{ old('introduction') }}</textarea>
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </form>
                    </div>
                </div>
            </div>
        @endsection
    </body>
</html>