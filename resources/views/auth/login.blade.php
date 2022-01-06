@extends('layers.layer')

@section('content')
    <div class="flex justify-center">
        <div class="w-5/12 bg-white p-6 rounded-lg">
                
            <form action="{{ route('login') }}" method="POST" >
                @csrf

                <div class="text-2xl  text-center mb-3 font-medium" >Login</div>
                @if (session('status'))
                    <div class="alert alert-danger text-center">
                        <ul>
                            <li>{{ session('status') }}</li>
                        </ul>
                    </div>
                @endif
               
                

                 <div class="mb-4" >
                    <label for="email" class="sr-only" >Email</label>
                    <input type="email" name="email" id="email" placeholder="Email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror " 
                    value="" >

                     @error('email')
                        <div class="alert text-red-500 text-sm" >
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                 <div class="mb-4" >
                    <label for="password" class="sr-only" >Password</label>
                    <input type="password" name="password" id="password" placeholder="Password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror " value="" >
                
                     @error('password')
                        <div class="alert text-red-500 text-sm" >
                            {{ $message }}
                        </div>
                    @enderror
                </div>

        
                    <button type="submit" class="bg-blue-500 text-white w-full py-3 px-4 font-medium">
                        Login
                    </button>
                
            </form>
        </div>
    </div>
@endsection