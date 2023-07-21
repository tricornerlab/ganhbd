@extends('welcome')

@section('content')

    <div class="w-[80%] mr-5  bg-gray-50 text-[#2f506c] p-3 pt-0  pb-0 pt-[12px] pl-0">
        <a href="{{url('novitas')}}" class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[11px] px-3">
            History
        </a>

        <section class="text-gray-700 font3 m-6">{!!  $history[0] !!}</section>

    </div>

@endsection
