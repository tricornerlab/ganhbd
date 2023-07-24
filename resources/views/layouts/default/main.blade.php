@extends('welcome')
@section('content')

    {{--MAIN SECTION CONTENT THAT WE INSERT INTO WELCOME.BLADE.PHP--}}

    <div class="w-[20%]  mr-5   text-[#2f506c] pb-3  ">
        <section class="bg-gray-50 mb-3 h-[200px] pt-3">
            <a class="font3 text-[#2f506c] text-lg p-3 pl-0 pt-[12px] border-t-2 border-[#6091ba] ">
                &nbsp &nbsp About School &nbsp</a>
            <img src="/app/ganhbd/public/img/img1.jpeg" class="w-[150px] h-[120px] pl-[10%] pt-[10px]"/>
        </section>
        <section class="mt-5 bg-gray-50 pt-3 h-[400px]">
            <a class="font3 text-[#2f506c] text-lg p-3 pl-0  pt-[12px] border-t-2 border-[#6091ba] ">
                &nbsp &nbsp Day timetable &nbsp
            </a>
            <table class="w-[180px] h-[300px] pl-6 mt-2 m-4" >
                <tbody class="font4 pl-6 uppercase text-gray-600">

                <tr class="font4   py-2  ">
                    <td class = "w-[30%] px-2">1 LESSON</td>
                    <td class = "w-[30%] font4">11.05 - 11.50</td>
                    <td class = "w-[30%] font4">16.55 - 17.40</td>
                </tr>
                <tr class="font4 border-t  py-2 ">
                    <td class = "w-[30%] px-2">2 LESSON</td>
                    <td class = "w-[30%] font4">11.05 - 11.50</td>
                    <td class = "w-[30%] font4">16.55 - 17.40</td>
                </tr>
                <tr class="font4 border-t  py-3 ">
                    <td class = "w-[30%] px-2">3 LESSON</td>
                    <td class = "w-[30%] font4">11.05 - 11.50</td>
                    <td class = "w-[30%] font4">16.55 - 17.40</td>
                </tr>
                <tr class="font4 border-t border-b py-2 ">
                    <td class = "w-[30%] px-2">4 LESSON</td>
                    <td class = "w-[30%] font4">11.05 - 11.50</td>
                    <td class = "w-[30%] font4">16.55 - 17.40</td>
                </tr>
                <tr class="font4 border-t  py-2 ">
                    <td class = "w-[30%] px-2">5 LESSON</td>
                    <td class = "w-[30%] font4">11.05 - 11.50</td>
                    <td class = "w-[30%] font4">16.55 - 17.40</td>
                </tr>
                </tbody>
            </table>
            <a class="font3 ml-4 mb-4 text-blue-400 inline-flex items-center">See full timetable
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right text-blue-400" viewBox="0 0 16 16">
                    <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                </svg>
            </a>
        </section>
        {{--WEATHER WIDGET--}}
        <section class="bg-gray-50 my-3  mt-4 h-[200px] pt-3">
            <a class="font3 text-[#2f506c] text-lg p-3 pl-0 pt-[12px] border-t-2 border-[#6091ba] ">
                &nbsp &nbsp Weather &nbsp</a>
            <div class="p-4 w-[200px]">
                <a href="https://yandex.it/weather/geneva?lat=446.203548&amp;lon=6.140003" target="_blank">
                    <img src="https://info.weather.yandex.net/163/2_white.ru.png?domain=it" border="0" alt="Weather">
                    <img width="1" height="1" src="https://clck.yandex.ru/click/dtype=stred/pid=7/cid=1227/*https://img.yandex.ru/i/pix.gif" alt="" border="0">
                </a>
            </div>
        </section>
    </div>


    {{--    second column      NEWS          --}}


<div class="w-[60%] mr-5  bg-gray-50 text-[#2f506c] p-3 pt-0  pb-0 pt-[12px] pl-0">
    <a href="{{url('novitas')}}" class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[15px] px-3">
        Last news
    </a>

    @foreach($news as $new)
        <section class="" >
            {{--   news1     --}}
            <div class="border-b">
                <div class="flex inline-flex">
                    <img src="/app/public/img/" class="w-[30px] h-[30px] pl-3 mt-2">
                    <div class="font3 text-[#7fa7cb] pl-4">{{$new['title']}}</div>
                </div>
                <p class="font4 pl-12">{{substr($new['content'], 0, 240)}} ...</p>

                <div class="flex inline-flex font4 text-gray-600 py-4 w-full justify-between ">
                    <div class="flex inline-flex font4 text-gray-600  w-[70%] items-center">
                        <i class="fa fa-calendar fa-sm  p-3 pr-2 pl-12 text-[text-gray-500]"></i>
                        <p class=" ">{{ substr($new['created_at'], 0, 10)}}</p>
                        <i class="fas fa-comments fa-sm  p-3 pr-1 pl-4 text-[text-gray-500]"></i>
                        <p class="pr-4">{{$new['likes']}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="ml-1 bi bi-eye-fill " viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>
                        <p class="pl-1 ">{{$new['views']}}</p>
                    </div>
                    <a class=" w-[100px] text-blue-400 inline-flex items-center" href="{{url('novitas')}}">
                        <div class=" ">Read more..</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right text-blue-400" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                        </svg>
                    </a>
                </div>
            </div>

        </section>

    @endforeach

    <a href="{{url('novitas')}}" class="text-blue-400 p-1 pl-4 font3 pt-6 h-[60px] inline-flex items-center">

        Read all...
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right text-blue-400" viewBox="0 0 16 16">
            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
        </svg>

    </a>
</div>

@endsection
