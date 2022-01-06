@extends('layers.layer')


@section('content') 
    <div class="flex justify-center position-relative">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form action="{{ route('posts') }}" method="post" class="mb-4">
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only" >Body</label>

                    <textarea name="body" id="body" cols="30" rows="4"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg 
                    @error('body') border-red-500   @enderror " 
                    placeholder="Post Something!"></textarea>
                    @error('body')
                        <div class="text-red-500 mt-2 text-sm" >
                            *{{ $message }}
                        </div>
                    @enderror
                </div>
                <div  >
                    <button type="submit" 
                    class="bg-blue-500 text-white font-medium px-4  py-2 rounded">
                        Post
                    </button>
                </div>
            </form>

            @if ($posts->count())
            
                @foreach ($posts as $post)
                    <div class="mb-4 border-2 p-2 rounded " >
                        <div class="flex justify-between" >
                            <div>
                                <a href="" class="font-bold"> {{ $post->user->username }} </a> <span 
                                class="text-gray-600 text-sm" > {{ $post->created_at->diffForHumans() }}
                                </span>
                            </div>
                            @auth
                            @can('delete',$post)
                                <div>
                                    <form action="{{ route('posts.destroy',$post) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger  fas fa-trash-alt " >Delete</button>
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
                @endforeach
                {{ $posts->links('pagination::bootstrap-4') }}

            @else
                <p>
                    There are no posts
                </p>
            @endif
        </div>
    </div>
@endsection