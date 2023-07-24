@extends('welcome')

@section('content')

<div class="w-[80%] mr-5   text-[#2f506c] p-3 pt-0  pb-0 pt-[12px] pl-0">
    <a href="{{url('teachers')}}" class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[11px] px-3">
        Partners
    </a>
    <section class="text-gray-700 font3 m-6">{!!  $text[0] !!}</section>



    <p>For supply collaboration please click <a href="{{url('suppliers')}}" class="text-green-600">here.
            <p>You will be redirected to suppliers area.</p></a>
    </p>
</div>
@endsection

