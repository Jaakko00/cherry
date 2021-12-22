@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100" style="max-height: 200px;"></img>
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">

                    <h2><span class="mr-3 badge badge-pill badge-danger">#{{ $user->id }}</span></h2>
                    <div class="h3">{{ $user->username }}</div>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>
                
                <div class="d-flex justify-content-end ">
                @can('update', $user->profile)
                <a href="/p/create">
                    <button class="btn btn-outline-danger mr-2">Add New Growth</button>
                </a>
                    
                <a href="/profile/{{ $user->id }}/edit">
                    <button class="btn btn-outline-secondary">Edit Your Tree</button>
                </a>
                
                    
                @endcan
                </div>
                
            </div>
            
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $postCount}}</strong> cherries</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $followingCount}}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <hr>
    <div class="row pt-4">
    
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <div class="img-hover-zoom">
                        <img src="/storage/{{ $post->image }}" class="w-100 rounded-circle border-danger border-right border-bottom" id="cherry">
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    
</div>
@endsection
