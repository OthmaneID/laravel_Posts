@extends('layers.layer')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 ">
            <div class="p-6" >
                <h1 class="text-2xl font-medium mb-1" >
                    {{ $user->name }}
                </h1>
                <p>
                    <strong>Posted: {{ $posts->count() }}</strong> 
                    {{ Str::plural('post', $posts->count()) }}  
                    and Received  {{ $user->receivedLikes->count() }} {{ Str::plural('like',$user->likes->count()) }}
                </p>
            </div>
            <div class="bg-white p-6 rounded-lg" >
                @if ($posts->count())
            
                @foreach ($posts as $post)
                    <x-post :post="$post"  />
                @endforeach
                {{ $posts->links('pagination::bootstrap-4') }}

                @else
                    <p>
                        {{ $user->name }} does not have any posts
                    </p>
                @endif
            </div>
        </div>
    </div>
@endsection