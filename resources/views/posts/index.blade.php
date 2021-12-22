@extends('layouts.app')

@section('content')
<div class="container">
    @if($posts->count() == 0)
        <div class="text-center font-weight-light emptyText">
            <h4>You should follow someone to see their Cherries here!</h1>
        </div> 
        <div class="text-center"><a href="/profile/{{ rand( 1, App\Models\User::count())}}"><img src="/svg/FinstagramLogo.svg" style="height: 70px; " class="pr-3 filter-red"></a></div>
    @endif

    <div class="row pt-4">
        @foreach($posts as $post)
            <div class="col-4 pb-4">
                <a href="/profile/{{ $post->user->id }}">
                    <div class="img-hover-zoom shadow-lg">
                        <img src="/storage/{{ $post->image }}" class="w-100 rounded border-danger border-right border-bottom" id="cherry">
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
