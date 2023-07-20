<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://kit.fontawesome.com/0ce84235fb.js" crossorigin="anonymous"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=OpenSans:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=HelveticaNeue:wght@300;400;600;700&display=swap" rel="stylesheet">



        <style>
            body {
                /*font-family: 'Nunito', sans-serif;*/
            }
            .font1 {font-family: 'Helvetica Neue', Arial, sans-serif; font-size: 10px; font-weight: 300;  }
            .font2{font-family: 'Open Sans', sans-serif; font-size: 11px; font-weight: 300; line-height: 20px;}
            .font3{font-family: 'Open Sans', sans-serif; font-size: 13px; font-weight: 400; line-height: 29px;}
            .font4{font-family:system-ui,-apple-system; font-size: 11px; font-weight: 300; line-height: 20px;}
            .font5{font-family:system-ui,-apple-system; font-size: 12px; font-weight: 400; line-height: 20px;}



            li{list-style-type: none}
            .sopra0{position: relative; left: 30px; bottom: 120px;}
            .parent{position: static; display: inline-block}
        </style>
    </head>

    <body class="antialiased  d-inline-block">

{{--    AD MENU--}}
    <nav class=" bg-blue-800 text-blue-400 h-[32px] font2 items-center flex ">
        <ul class="flex inline-flex items-center ">
            @foreach($topmenu as $adname => $link)
            <a href="{{route($link)}}"><li class="list-none  p-2">{{$adname}}   &nbsp; | </li>
            @endforeach

{{--AUTH--}}
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 pr-4 pt-2 sm:block ">

                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-xs text-white  ">

                            Dashboard</a>
                    @else
                        <div class="flex inline-flex">
                            <a href="{{ route('login') }}" class="text-xs text-white flex inline-flex "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                </svg>
                                <div class=" ml-1">Log in</div>
                            </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-xs  text-white ">Register</a>
                        @endif
                        </div>

                    @endauth
                </div>
            @endif
        </ul>
    </nav>



{{--SOCIAL MENU--}}

        <nav class="flex inline-flex justify-between bg-blue-700 h-[43px] w-[100%] text-white  pl-2 font2 uppercase items-center">
            <div class="flex inline-flex items-center">
                @foreach($socials as  $icon)
                    <a href="{{$icon['hlink']}}"><li class="ml-2  mx-1 p-1.5  rounded-2xl bg-blue-800">{!!$icon['link']!!}</li></a>
                @endforeach


            </div>
            <div >
                <form class=" inline-flex ml-48">
                    <input type="search" class="  h-[26px] w-26 ml-2  text-grey-100 flex" content="search..."  >
                    <input type="submit" value="search" class="bg-green-600 h-[26px] rounded text-xs  ml-[3px] w-16">
                </form>
                <select class="inline-flex h-4 bg-transparent">
                    <option>Fr</option>
                    <option>Eng</option>
                </select>
            </div>
        </nav>




{{--LOGO SECTION--}}
    <nav class="relative flex items-top justify-center bg-gray-50   items-center sm:pt-0 ">

            <section class="flex justify-between h-[113px]  w-full  text-[#6c9abf]  items-center">
                <div class="flex inline-flex w-[50%]  ">
                    <a href="{{ url('/app/ganhbd/public/') }}" class="">
                        @foreach($contact as $habad) @endforeach
                        <img href="{{ $habad['photo']}}" class="h-16 w-24 pt-2 pl-8 pl-7" />
                        </a>


                        <a href="/" class="inline-flex"><div class="pt-[10%] pl-2 text-lg  ">School {{$habad['name']}}</div></a>

                </div>


                <div class=" pr-4 font2  flex flex-col">

                    <div class="inline-flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg><p class="ml-2"> {{$habad['tel']}}</p>
                    </div>
                    <div class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                        <p class="ml-2"> {{$habad['email']}}</p>
                    </p>
                </div>

            </section>
    </nav>

{{--  MID MENU              --}}
    <nav>
                <ul class="flex inline-flex bg-blue-400 h-10 w-[100%]  text-white  pl-7 font3 uppercase items-center">
                    <div class="items-center "><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg></div>
                    @foreach($midmenu as $miditem => $midlink)
                        <a href="{{$midlink}}"><li class="px-3">{{$miditem}}</li></a>
                    @endforeach
                </ul>
    </nav>
{{--    BANNER--}}

                <section class="max-w-6xl  px-8   bg-white  position-static mt-2">
                    <img src="/app/ganhbd/public/img/slide-5.jpeg" class="w-[100%] h-auto pt-5 parent position-sticky">
                    <div class="position-relative sopra0 font3 text-md">
                        <p class=" h-[40px] w-[200px] bg-[#6091ba] text-white px-3 py-1.5  uppercase mb-1">Come to OPEN DAYS</p>
                        <p class="bg-black h-[28px] px-3 text-white  opacity-75  w-[400px]">
                            Discover our online resources on Moodle</p>
                    </div>


{{--MAIN SECTION        --}}

{{--    first column    ABOUT            --}}
    <main class="flex inline-flex w-full   ">
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
                        <a class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[11px] px-3">Last news</a>

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
                                    <a class=" w-[100px] text-blue-400 inline-flex items-center">
                                        <div class=" ">Read more..</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right text-blue-400" viewBox="0 0 16 16">
                                                  <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                                                </svg>


                                    </a>
                                </div>
                            </div>

                        </section>

                        @endforeach

                        <p class="text-blue-400 p-1 pl-4 font3 pt-6 h-[60px] inline-flex items-center">Read all...       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right text-blue-400" viewBox="0 0 16 16">
                                <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>
                        </p>
                    </div>


                {{--      third column   NAVIGATION           --}}
                    <div class="w-[20%]    ">
                        <section class="border-t bg-gray-50 text-[#2f506c] p-3 pt-[13px] pl-0">
                            <a class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[15px] px-3">Navigation</a>
                            <ul class="font5 text-[#6c9abf] pl-4">
                                <li class="py-1 pl-1"> > Main</li>
                                <li class="py-1 pl-1"> > News</li>
                                <li class="py-1 pl-1"> > History</li>
                                <li class="py-1 pl-1"> > Activities</li>
                                <li class="py-1 pl-1"> > Concours</li>
                                <li class="py-1 pl-1"> > Olympiades</li>
                            </ul>
                        </section>
                        <section class=" bg-gray-50 text-[#2f506c] p-3 pt-[13px] pl-0 mt-4 h-[250px]">
                            <a class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[13px] px-3">Moodle</a>
                            <div class="pl-4">Login</div>

                            <form class="m-4 flex flex-col justify-end">
                                <input type="search" class="  h-[26px] w-26 m-2  text-grey-100 flex" content="login..."  >
                                <input type="search" class="  h-[26px] w-26 m-2  text-grey-100 flex" content="password..."  >
                                <input type="submit" value="sign in" class="bg-green-600 h-[26px] rounded text-xs  m-2 w-16 text-white">
                            </form>


                        </section>
                        <section class=" bg-gray-50 text-[#2f506c] p-3 pt-[13px] pl-0 mt-4 h-[250px]">
                            <a class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[13px] px-3 ">Direction</a>
                            <div class="pl-4">Name Surname</div>
                            <img src="" class="w-[160px] h-[120px] pl-4 pt-4">

                        </section>
                    </div>
               </main>


                    <section class=" font3 text-[#2f506c] text-lg mt-8">
                        <p class="border-t-2 border-[#6091ba] pt-[15px] px-3 mt-4 pl-4 p-4 w-[200px]">
                            Our team</p>
                        <div class="product owl-item-slide">
                            <a class="product-link" href="/teams?lang=ru&amp;pkid=1679398890812538" target="_blank">
                                <div class="product-img-wrap" style="width: auto; height: 100px; margin: 0 auto;">
                                    <img class="product-img" src="/files/sites/1678379566328140/files/widgets/block_footer_slider_banners/0/ru/1613807741_large__js_uchitel_metematiki__0f8ce93b6435ccc7950d5e6a3b278392.jpg" style="width: auto; height: 100px; margin: 0 auto;">
                                </div>
                            </a>
                        </div>


                    </section>

</section>



{{-- JAVA SCRIPT--}}
                        <a href="javascript:click();" class="p-2 rounded">click and get the prize</a>

                        <iframe src="{{url('/inner')}}" name="content" class="p-2 bg-red"></iframe>
{{--                        <a href="javascript:c();">askinfo</a>--}}
{{--                        <a href="javascript:write();">write</a>--}}
{{--                        <a href="javascript:Name();">name</a>--}}




                <section class="m-8">

                    <div class="flex justify-center m-4  pt-4 text-gray-500 bg-gray-50  w-full h-[400px]  ">
                        Parasha de la semaine
                    </div>

                    <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-gray-50 ">
                        Services proposed
                    </div>

                    <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-gray-50 ">
                        News
                    </div>

                    <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-gray-50">
                        Events
                    </div>

                    <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-gray-50">
                        Gallerie de photos
                    </div>

                    <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-gray-50">
                        A propos de l'école
                    </div>


                    <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-gray-50">
                       Programme
                    </div>

                    <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-gray-50">
                        Activites
                    </div>


                    <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-gray-50">
                        Demandes d-inscriptions et visites
                    </div>

                    <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-gray-50">
                        Parents
                    </div>

                </section>
            </div>
        </div>

{{--   FOOTER --}}
<footer class="w-full">

    <section class="bg-[#444444] text-white flex inline-flex h-[245px] w-full font3 text-[17px]">
        <div class="w-[20%] p-5 ml-12">
            <p>Navigation</p>
            <ul class="font5 text-[#6c9abf] pl-4">
                <li class="py-1 pl-1"> > Main</li>
                <li class="py-1 pl-1"> > News</li>
                <li class="py-1 pl-1"> > History</li>
                <li class="py-1 pl-1"> > Study materials</li>
                <li class="py-1 pl-1"> > Jobs</li>
                <li class="py-1 pl-1"> > Site map</li>

            </ul>
        </div>
        <div class="w-[20%] p-5 ml-12">Questionnaire</div>
        <div class="w-[20%] p-5 ml-12">Statistics</div>
        <div class="w-[20%] p-5">
            <p>Contacts</p>
            <data class="font5 text-[#6c9abf]  ">
                <div class="flex inline-flex pl-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg>
                    <div class="pl-2">Centre ville 12</div>
                </div>

                <div class="flex inline-flex pl-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                    <div class="pl-2">43‒30‒95, 43‒08‒88</div>
                </div>


                <div class="flex inline-flex pl-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                    </svg>
                    <div class="pl-2">contact@habad.ch</div>
                </div>
            </data>
        </div>
    </section>

    <div class="flex justify-center  sm:items-center sm:justify-between bg-[#2b2b2b] font2 h-[36px]">
        <div class="text-center  text-gray-500 sm:text-left">
            <div class="flex items-center ml-4">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-[#7594ae]">
                    <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>

                <a href="https://laravel.bigcartel.com" class="ml-1 ">
                    Shop
                </a>

                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-[#7594ae]">
                    <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>

                <a href="https://github.com/sponsors/taylorotwell" class="ml-1 ">
                    Sponsor
                </a>
                <a href="https://github.com/sponsors/taylorotwell" class="ml-1 ">
                    OM Foundation
                </a>
            </div>
        </div>




        <div class="mx-4 text-center  text-gray-200 text-right  font2 ">
            for <span class="text-[#7594ae]">Ohalei Menahem School</span> v1.0 ©  <?=date('Y') ?>
        </div>
    </div>

</footer>

    <script type="text/javascript">
        function click(){
            alert(frames.content.s);

        }

        function go(){

        }
    </script>

    </body>
</html>
