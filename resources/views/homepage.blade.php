@extends('layouts.master')

@section('style')
    <link rel="stylesheet" href="{{ url('/css/homepage.css') }}">
@endsection

@section('content')
    <img src="/img/banner.png" alt="" class="banner">

    <div class="row">
        <div class="col">
            <img src="/img/homepage/ku.jpg" alt="" class="pic1">
        </div>

        <div class="col" style="font-family: 'Kanit', sans-serif;">
            <div style="font-size: 30px;margin-top: 25%;margin-left: -5%">มหาวิทยาลัยเกษตรศาสตร์ (Kasetsart University)</div>
            <div style="margin-right: 8%; margin-left: -5%">
                <div style="margin-left: 10%">มหาวิทยาลัยเกษตรศาสตร์นั้นเป็นมหาวิทยาลัยชื่อดังย่านบางเขนซึ่งถือว่าเป็นย่านที่ของกิน</div>
                <div>
                    นั้นมีรอบมหาวิทยาลัยอย่างมากมายให้เลือกสรรกันเลยทีเดียวไม่ว่าจะเป็นคาว หวาน Blog ของเราขอนำเสนอร้านอาหารเด็ดๆดังๆ ที่ถือว่าห้ามพลาดกันเลยทีเดียวจะมีร้านไหนเด็ดโดนใจบ้างตามไปดูได้ใน Blog ของเรากันเลย ...
                </div>
            </div>
        </div>
    </div>
    <div style="font-family: 'Kanit', sans-serif; margin-top: 5%; margin-bottom: 5%">
        <div style="margin-left: 3%; font-size: 50px">บทความ</div>
        <hr style="width: 95%; border: 1px solid black">
        <div class="row" style="margin-left: 2%">
            <div class="col-3">
                <div class="card" style="width: 16rem; height: 27rem">
                    <img class="card-img-top" src="/img/homepage/content1.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">3 อันดับคาเฟ่ยอดฮิตย่านเกษตร <span class="badge badge-danger">New</span></h5>
                        <p class="card-text">มาดูกันว่า 3 อันดับคาเฟ่ยอดฮิตของเด็กเกษตรนั้นจะเป็นที่ไหนกันบ้าง...</p>
                        <a href="/content1" target="_blank" class="btn btn-info" style="margin-left: 25%">อ่านบทความ</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 16rem; height: 27rem">
                    <img class="card-img-top" src="/img/homepage/content2.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">3 ร้านบุฟเฟ่ต์น่าลองย่านเกษตร <span class="badge badge-danger">New</span></h5>
                        <p class="card-text">3 อันดับร้านบุฟเฟ่ต์เด็ดยอดฮิตของเด็กเกษตรไม่มาถือว่ามาไม่ถึงเกษตร...</p>
                        <a href="/content2" target="_blank" class="btn btn-info" style="margin-left: 25%">อ่านบทความ</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 16rem; height: 27rem">
                    <img class="card-img-top" src="/img/homepage/content3.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">เอ่งฉ้วนสุกี้ร้านใหม่งามวงศ์วาน <span class="badge badge-danger">New</span></h5>
                        <p class="card-text">ร้านของเราเป็นอาหารจีนสไตล์ฮกเกี้ยนภูเก็ต สูตรอาหารที่เราทำเป็นมรดกตกทอดมาจากอากง และอาม่า...</p>
                        <a href="#" class="btn btn-info" style="margin-left: 25%">อ่านบทความ</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 16rem; height: 27rem">
                    <img class="card-img-top" src="/img/homepage/content4.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">มาถึงเกษตรแล้วกับ Mihimihi</h5>
                        <p class="card-text">ขนมสไตล์ฝรั่งเศส แป้งบางมีความกรอบ ชิ้นใหญ่ มีหลายไส้ให้เลือก...</p>
                        <a href="#" class="btn btn-info" style="margin-left: 25%">อ่านบทความ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
