@extends( 'layouts.profile' )
        
@section( 'title', 'プロフィール画面' )
        
@section( 'content' )
<div class = "container">
    <div class="row">
        <div class = "col-md-8 mx-auto">
            <h1>プロフィール</h1>
        </div>
        <table>
            @foreach($posts as $profile)
            <tr>
                <td>{{ \Str::limit($profile->name, 20) }}</td>
                <td>{{ \Str::limit($profile->gender, 20) }}</td>
                <td>{{ \Str::limit($profile->hobby, 20) }}</td>
                <td>{{ \Str::limit($profile->introduction, 100) }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div> 

@endsection