<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
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

                <div class="max-w-6xl  sm:px-6 lg:px-8 pl-0 ml-0 bg-white  position-static">
                    <img src="/app/ganhbd/public/img/slide-5.jpeg" class="w-[100%] h-auto pt-5 parent position-sticky">
                    <div class="position-relative sopra0 font3 text-md">
                        <p class=" h-[40px] w-[200px] bg-[#6091ba] text-white px-3 py-1.5  uppercase mb-1">Come to OPEN DAYS</p>
                        <p class="bg-black h-[28px] px-3 text-white  opacity-75  w-[400px]">
                            Discover our online resources on Moodle</p>
                    </div>


{{--MAIN SECTION        --}}

                    {{--    first column                --}}
    <main class="flex inline-flex w-full mt-8  ">
                    <div class="w-[30%]  mr-5 border-t bg-gray-100 text-[#2f506c] p-3 pl-0 ">
                        <a class="font3 text-[#2f506c] text-lg p-3 pl-0  pt-[13px] border-t-2 border-[#6091ba] ">  &nbsp &nbsp About School &nbsp</a>
                        <img src="/app/ganhbd/public/img/img1.jpeg" class="w-[200px] h-[150px] pl-[15%] pt-[10px]"/>
                    </div>

                {{--    second column                --}}
                    <div class="w-[50%] mr-5 border-t bg-gray-100 text-[#2f506c] p-3 pt-[13px] pl-0">
                        <a class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[15px] px-3">Last news</a>
                        <section >
                            <div>
                                <img>
                                <title class="font4 text-[#2f506c]">Announcement</title>
                                <div>some text</div>
                                <div>Date</div>
                            </div>
                        </section>
                    </div>


                {{--      third column              --}}
                    <div class="w-[20%]  border-t bg-gray-100 text-[#2f506c] p-3 pt-[13px] pl-0 ">
                        <a class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[15px] px-3">Navigation</a>
                        <ul class="font5 text-[#6c9abf] pl-4">
                            <li class="py-1 pl-1"> > Main</li>
                            <li class="py-1 pl-1"> > News</li>
                            <li class="py-1 pl-1"> > History</li>
                            <li class="py-1 pl-1"> > Activities</li>
                            <li class="py-1 pl-1"> > Concours</li>
                            <li class="py-1 pl-1"> > Olympiades</li>
                        </ul>
                    </div>
               </main>


</div>

{{-- JAVA SCRIPT--}}
                        <a href="javascript:click();" class="p-2 rounded">click and get the prize</a>

                        <iframe src="{{url('/inner')}}" name="content" class="p-2 bg-red"></iframe>
{{--                        <a href="javascript:c();">askinfo</a>--}}
{{--                        <a href="javascript:write();">write</a>--}}
{{--                        <a href="javascript:Name();">name</a>--}}




                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">
                                    <a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">PARASHA</a>
                                </div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">SERVICES</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">NEWS</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>




                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">EVENTS</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-white rounded shadow">
                    Gallerie de photos
                </div>

                <div class="flex justify-center mt-4  pt-4 text-gray-500 w-full h-[400px] bg-white rounded shadow">
                    A propos du gan
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
        <div class="w-[20%] p-5 ml-12">Navigation</div>
        <div class="w-[20%] p-5 ml-12">Questionnaire</div>
        <div class="w-[20%] p-5 ml-12">Statistics</div>
        <div class="w-[20%] p-5">Contacts</div>
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
            for <span class="text-[#7594ae]">OM School</span> v1.0 ©  <?=date('Y') ?>
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
