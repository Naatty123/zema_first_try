@extends('head.head')

@section('index')
<div>
    <div class="w-full flex justify-between items-center px-28">
        <div class="flex justify-start items-center">
            <div>
            <img src="imgs/main_icon/icon.png" alt="">
            </div>
            <div class="text-6xl  w-1/3">
                <p id="zname">Zema</p>
                <hr class="w-full border-1 border-gray-400">
            </div>
        </div>
        <div class="">
            <input class="border-2 border-gray-300 p-2 rounded-lg outline-none" type="search">
            <input class="border-2 border-gray-100 bg-white shadow-md cursor-pointer hover:shadow-xl p-2 rounded-lg" type="submit" value="Search">
        </div>
    </div>
    <div class="mt-5">
        <div class="flex justify-between items-center">

            @for($i = 0; $i < 5; $i++  )
            <div class="">
                <img class="w-64" src="imgs/main_icon/icon.png" alt="Main Icon">
                <center><p>{{ $iconbt[$i] }}</p></center>
            </div>
            @endfor
        </div>
    </div>
    <div class="h-10">

    </div>
</div>
@endsection