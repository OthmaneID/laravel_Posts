@extends('layers.layer')

@section('content')
       <div class="flex justify-center">
        <div class="w-10/12 bg-white p-6 rounded-lg">
            <x-post :post="$post"  />
        </div>
    </div>
@endsection