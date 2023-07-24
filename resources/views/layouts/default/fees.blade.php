@extends('welcome')

@section('content')

<div class="w-[80%] mr-5   text-[#2f506c] p-3 pt-0  pb-0 pt-[12px] pl-0">
    <a href="{{url('fees')}}" class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[11px] px-3">
        Fees
    </a>
    <section class="text-gray-700 font3 m-6">{!!  $fees[0] !!} : </section>


    <form class="ml-6 flex flex-col items-center ">
        <input content="from">
        <textarea class="bg-white border h-[200px] w-[400px]">Your message</textarea>
        <x-green-button class="align-content-lg-end">
            </x-green-button>
    </form>
</div>
@endsection

