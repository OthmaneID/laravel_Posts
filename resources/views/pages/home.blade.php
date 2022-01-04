@extends('layers.layer')


@section('content') 
    <div class="d-flex align-items-center justify-content-center">
        
        <div class="left-sidebar bg-dark text-light ">
            <ul class="text-center text-xl" >
                <li>left Sidebar</li>
            </ul>
           
        </div>

        <div class="post w-2/4 bg-white rounded-lg text-center " >
            <h2 class="text-xl py-3" >post</h2>  
        </div>

        <div class="right-sidebar text-light bg-dark">
            <ul class="text-center text-xl" >
                <li>Right SideBar</li>
            </ul>
        </div>
       
    </div>
@endsection