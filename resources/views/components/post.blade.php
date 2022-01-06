@props(['post'=>$post])

<div class="mb-4 border-2 p-2 rounded " >
    <div class="flex justify-between" >
        <div>
            <a href="{{ route('users.posts',$post->user) }}" class="font-bold"> {{ $post->user->username }} </a> <span 
            class="text-gray-600 text-sm" > {{ $post->created_at->diffForHumans() }}
            </span>
        </div>
        @auth
            @can('delete',$post)
                <div>
                    <form action="{{ route('posts.destroy',$post) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger fas fa-trash-alt " >Delete</button>
                    </form>
                </div>
            @endcan
        @endauth
    </div>
    <p class="mb-4">
        {{ $post->body }}
    </p>
                    
                    
                        
    <div class="flex items-center">
        @auth
            @if (!$post->likedBy(auth()->user()))
                <form action="{{ route('posts.likes',$post) }}" method="post" class="mr-2" >
                    @csrf
                    <button type="submit" class="far fa-heart text-xl">
                    </button>
                </form>
            @else
                <form action="{{ route('posts.likes',$post) }}" method="post" class="mr-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 fas fa-heart text-xl">    
                    </button>
                </form>
            @endif
        @endauth
        <span>
            {{ $post->likes->count() }} {{ Str::plural('like',$post->likes->count()) }}
        </span>
    </div>

</div>