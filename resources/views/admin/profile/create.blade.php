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
                    </div>
                </div>
            </div>
        @endsection
    </body>
</html>