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
    <nav class="topmenu bg-blue-800 text-blue-400 h-[32px] font2">
        <ul class="flex inline-flex ">
            <li class="list-none p-2 pr-2">About   &nbsp; | </li>
            <li class="list-none p-2 pr-2">Advantages &nbsp; |  </li>
            <li class="list-none p-2 pr-2">Program  &nbsp;|  </li>
            <li class="list-none p-2 pr-2">Teachers &nbsp; | </li>
            <li class="list-none p-2 pr-2">Enroll &nbsp; |  </li>
            <li class="list-none p-2 pr-2">Fees  &nbsp;|  </li>
            <li class="list-none p-2 pr-2">Partners  &nbsp;|  </li>

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 pr-6 pt-2 sm:block ">

                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-xs text-white  ">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-xs text-white  ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-xs  text-white ">Register</a>
                        @endif

                    @endauth
                </div>
            @endif
        </ul>
    </nav>


{{--    < class="flex justify-center pt-1 sm:justify-start sm:pt-0 bg-gray-100">--}}
{{--MIDDLE MENU--}}

        <nav class="flex inline-flex justify-between bg-blue-700 h-[43px] w-[100%] text-white  pl-2 font2 uppercase">
            <div class="flex inline-flex">
                <li class="ml-2 my-2 px-1.5 rounded-2xl bg-blue-800"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-instagram mt-1.5" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg></li>
                <li class="ml-2 my-2 px-1.5 rounded-2xl bg-blue-800 "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-facebook mt-1.5" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg></li>
                <li class="ml-2 my-2 rounded-2xl bg-blue-800 px-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-youtube mt-1.5" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                    </svg></li>
                <li class="ml-2 my-2 rounded-2xl bg-blue-800 px-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-messenger mt-1.5" viewBox="0 0 16 16">
                        <path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z"/>
                    </svg></li>
                <li class="ml-2 my-2 rounded-2xl bg-blue-800 px-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram mt-1.5" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                    </svg></li>

            </div>
            <div >
                <form class="pt-1.5 inline-flex ml-48">
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
    <nav class="relative flex items-top justify-center bg-gray-100   sm:items-center sm:pt-0">

            <section class="flex justify-between h-[113px]  w-full pt-[2%] text-[#6c9abf]">
                <div class="flex inline-flex w-[50%]  ">
                    <a href="{{ url('/app/ganhbd/public/') }}" class="">
                        <img href="{{ url('/app/ganhbd/public/img/logosh.png') }}" class="h-16 w-24 pt-2 pl-8 pl-7" />
                        </a>


                        <a href="/" class="inline-flex"><div class="pt-[10%] pl-2 text-lg  ">School Ohalei Menachem</div></a>

                </div>


                <div class=" pr-5 font2">

                    <p>Tel :</p>
                    <p>e-mail: </p>
                </div>
            </section>
    </nav>

{{--  TOP MENU              --}}
    <nav>
                <ul class="flex inline-flex bg-blue-400 h-10 w-[100%] pl-0 text-white pt-2 pl-2 font3 uppercase">
                    <li class="px-3">PROGRAM</li>
                    <li class="px-3">NEWS</li>
                    <li class="px-3">METHODOLOGY</li>
                    <li class="px-3">ABOUT SCHOOL</li>
                    <li class="px-3 ">Our achievements</li>
                    <li class="px-3 border-b-2">Information Board</li>

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
                        <section class="bg-gray-100 mb-3 h-[200px] pt-3">
                            <a class="font3 text-[#2f506c] text-lg p-3 pl-0 pt-[12px] border-t-2 border-[#6091ba] ">
                                &nbsp &nbsp About School &nbsp</a>
                            <img src="/app/ganhbd/public/img/img1.jpeg" class="w-[150px] h-[120px] pl-[10%] pt-[10px]"/>
                        </section>
                        <section class="mt-5 bg-gray-100 pt-3 h-[400px]">
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
                            <a class="font3 ml-4 mb-4 text-blue-400">See full timetable > </a>
                        </section>

                        <section class="bg-gray-100 my-3  mt-4 h-[200px] pt-3">
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
                    <div class="w-[60%] mr-5  bg-gray-100 text-[#2f506c] p-3 pt-0  pb-0 pt-[12px] pl-0">
                        <a class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[11px] px-3">Last news</a>
                        <section class="" >
                            {{--   news1     --}}
                            <div class="border-b">
                                <div class="flex inline-flex">
                                    <img src="/app/public/img/" class="w-[30px] h-[30px] pl-3">
                                    <div class="font3 text-[#7fa7cb] pl-4">Announcement</div>
                                </div>
                                <p class="font4 pl-12">School supplies</p>

                                <div class="flex inline-flex font4 text-gray-600 pb-4 w-full justify-between">
                                    <div class="flex inline-flex font4 text-gray-600 pb-4  w-[85%]">
                                        <i class="fa fa-calendar fa-sm  p-3 pr-2 pl-12 text-[text-gray-500]"></i>
                                        <p class="pt-0.5 ">21.06.2023</p>
                                        <i class="fas fa-comments fa-sm  p-3 pr-1 pl-4 text-[text-gray-500]"></i>
                                        <p class="pr-4">0</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="ml-1 bi bi-eye-fill mt-1" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg>
                                        <p class="pl-1 ">20</p>
                                    </div>
                                    <p class="w-[15%] text-blue-400">Read more..<span class="font3 font-weight-bolder">></span></p>
                                </div>
                            </div>

                        </section>
                        <p class="text-blue-400 p-1 pl-4 font3 pt-6 h-[60px] ">Read all .. > </p>
                    </div>


                {{--      third column   NAVIGATION           --}}
                    <div class="w-[20%]    ">
                        <section class="border-t bg-gray-100 text-[#2f506c] p-3 pt-[13px] pl-0">
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
                        <section class=" bg-gray-100 text-[#2f506c] p-3 pt-[13px] pl-0 mt-4 h-[250px]">
                            <a class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[15px] px-3">Direction</a>
                            <div class="pl-4">Name Surname</div>
                            <img src="" class="w-[160px] h-[120px] pl-4 pt-4">

                        </section>
                    </div>
               </main>


                    <section>
                        <div class="pl-4 p-4 font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[15px] px-3 mt-4">Our team</div>
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






                <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-white rounded shadow">
                    Parasha de la semaine
                </div>

                <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-white rounded shadow">
                    Services proposed
                </div>

                <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-white rounded shadow">
                    News
                </div>

                <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-white rounded shadow">
                    Events
                </div>

                <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-white rounded shadow">
                    Gallerie de photos
                </div>

                <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-white rounded shadow">
                    A propos de l'école
                </div>


                <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-white rounded shadow">
                   Programme
                </div>

                <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-white rounded shadow">
                    Activites
                </div>


                <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-white rounded shadow">
                    Demandes d-inscriptions et visites
                </div>

                <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-white rounded shadow">
                    Parents
                </div>

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
