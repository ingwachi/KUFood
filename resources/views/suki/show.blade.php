@extends('layouts.master')

@section('content')
    <div style="margin-left: 7%; font-family: 'Kanit', sans-serif; margin-top: 5%">
        <div class="row">
            <div class="col">
                <img src="/{{ $menu->image }}" alt="" style="width: 600px; height: 400px">
            </div>
            <div class="col">
                <div style="font-size: 50px; margin-top: 10%">{{ $menu->name }}</div>
                <div style="font-size: 20px; color: #4e555b">ราคา {{ $menu->price }} บาท</div>
            </div>
        </div>

    </div>
@endsection
