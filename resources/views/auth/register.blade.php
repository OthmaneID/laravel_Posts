@extends('layers.layer')


@section('content')
    <div class="flex justify-center">
        <div class="w-5/12 bg-white p-6 rounded-lg">
                
            <form action="{{ route('register') }}" method="POST" >
                @csrf

                <div class="text-2xl  text-center mb-3 font-medium" >Register</div>
                <div class="mb-4" >
                    <label for="name" class="sr-only" >Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror " 
                    value="{{ old('name') }}" >

                    @error('name')
                        <div class="alert text-red-500 text-sm" >
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                 <div class="mb-4" >
                    <label for="username" class="sr-only" >UserName</label>
                    <input type="text" name="username" id="username" 
                    placeholder="UserName"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" 
                    value="{{ old('username') }}" >

                     @error('username')
                        <div class="alert text-red-500 text-sm" >
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                 <div class="mb-4" >
                    <label for="email" class="sr-only" >Email</label>
                    <input type="email" name="email" id="email" placeholder="Email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror " 
                    value="{{ old('email') }}" >

                     @error('email')
                        <div class="alert text-red-500 text-sm" >
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                 <div class="mb-4" >
                    <label for="password" class="sr-only" >Password</label>
                    <input type="password" name="password" id="password" placeholder="Chose Password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror " value="" >
                </div>

                 <div class="mb-4" >
                    <label for="password_confirmation" class="sr-only" >Password Again</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat Your Password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror " value="" >

                     @error('password')
                        <div class="alert text-red-500 text-sm" >
                            {{ $message }}
                        </div>
                    @enderror
                </div>

        
                    <button type="submit" class="bg-blue-500 text-white w-full py-3 px-4 font-medium">
                        Register
                    </button>
                
            </form>
        </div>
    </div>
@endsection