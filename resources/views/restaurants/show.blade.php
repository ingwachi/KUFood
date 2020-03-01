@extends('layouts.master')

@section('content')
    <div style="font-family: 'Kanit', sans-serif; margin-top: 3%">
        <div style="font-size: 40px; margin-left: 5%;">{{ $restaurant->name }}</div>
        <hr style="width: 90%; border: 1px solid black">
        <div class="row">
            <div class="col-9">
                <div class="row">
                    <div class="col">
                        <img src="/{{ $restaurant->image }}" alt="" style="width: 90%; margin-top: 2%; margin-left: 15%">
                    </div>
                    <div class="col" style="margin-left: 2%">
                        <div style="margin-top: 15%">ตำแหน่งที่ตั้ง</div>
                        <div style="color: #4e555b">{{ $restaurant->address }}</div>
                        <div>{{ $restaurant->detail }}</div>
                    </div>
                </div>
                <div style="margin-left: 7%; margin-top: 5%; font-size: 30px">Signature Dish</div>
                <div style="margin-left: 7%; margin-top: 2%">
                    <div class="row">
                        <div class="col">
                            <img src="/img/menus/1.jpg" alt="" style="width: 450px; height: 300px">
                            <div style="text-align: center; margin-top: 2%">สเต็กหมู</div>
                        </div>
                        <div class="col">
                            <img src="/img/menus/13.jpg" alt="" style="width: 450px; height: 300px">
                            <div style="text-align: center; margin-top: 2%">มันบดอบชีส</div>
                        </div>
                    </div>
                </div>
                <div style="margin-left: 7%; margin-top: 5%; margin-bottom: 10%">
                    <div style="font-size: 40px">Menu</div>
                    <hr>
                    <div style="font-size: 30px">อาหารคาว</div>
                    <hr style="border: 2px solid black; width: 10%; margin-left: -0%; border-radius: 10px">
                    @foreach($restaurant->menus as $menu)
                        @if($menu->type == 'm')
                            <div class="row" style="font-size: 20px; color: #5a6268">
                                <div class="col-9">
                                    <div><a href="{{ route('content3.show', ['content3' => $menu->id]) }}" target="_blank" style="color: #5a6268">{{ $menu->name }}</a></div>
                                </div>
                                <div class="col-3">
                                    <div>{{ $menu->price }} บาท <a href="{{ route('restaurant.menu.edit', ['menu' => $menu->id, 'restaurant' => $restaurant->id]) }}" style="font-size: 15px">แก้ไข</a></div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div style="font-size: 30px; margin-top: 3%">อาหารทานเล่น</div>
                    <hr style="border: 2px solid black; width: 10%; margin-left: -0%; border-radius: 10px">
                    @foreach($restaurant->menus as $menu)
                        @if($menu->type == 'a')
                            <div class="row" style="font-size: 20px; color: #5a6268">
                                <div class="col-9">
                                    <div><a href="{{ route('content3.show', ['content3' => $menu->id]) }}" target="_blank" style="color: #5a6268">{{ $menu->name }}</a></div>
                                </div>
                                <div class="col-3">
                                    <div>{{ $menu->price }} บาท <a href="{{ route('restaurant.menu.edit', ['menu' => $menu->id, 'restaurant' => $restaurant->id]) }}" style="font-size: 15px">แก้ไข</a></div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div style="font-size: 30px; margin-top: 3%">เครื่องดื่ม</div>
                    <hr style="border: 2px solid black; width: 10%; margin-left: -0%; border-radius: 10px">
                    @foreach($restaurant->menus as $menu)
                        @if($menu->type == 'b')
                            <div class="row" style="font-size: 20px; color: #5a6268">
                                <div class="col-9">
                                    <div><a href="{{ route('content3.show', ['content3' => $menu->id]) }}" target="_blank" style="color: #5a6268">{{ $menu->name }}</a></div>
                                </div>
                                <div class="col-3">
                                    <div>{{ $menu->price }} บาท <a href="{{ route('restaurant.menu.edit', ['menu' => $menu->id, 'restaurant' => $restaurant->id]) }}" style="font-size: 15px">แก้ไข</a></div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <a href="{{ route('restaurants.menu.create', ['restaurant' => $restaurant->id]) }}" class="btn btn-info" style="margin-left: 40%; margin-top: 3%">เพิ่มรายการอาหาร</a>
                </div>
            </div>
            <div class="col-3">
                <div>
                    <div style="margin-left: 10%; font-size: 20px">บทความน่าสนใจอื่นๆ</div>
                    <div class="card" style="width: 16rem; height: 27rem">
                        <img class="card-img-top" src="/img/homepage/content2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">3 ร้านบุฟเฟ่ต์น่าลองย่านเกษตร <span class="badge badge-danger">New</span></h5>
                            <p class="card-text">3 อันดับร้านบุฟเฟ่ต์เด็ดยอดฮิตของเด็กเกษตรไม่มาถือว่ามาไม่ถึงเกษตร...</p>
                            <a href="/content2" class="btn btn-info" style="margin-left: 25%">อ่านบทความ</a>
                        </div>
                    </div>
                    <div class="card" style="width: 16rem; height: 27rem; margin-top: 3%">
                        <img class="card-img-top" src="/img/homepage/content3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">เอ่งฉ้วนสุกี้ร้านใหม่งามวงศ์วาน <span class="badge badge-danger">New</span></h5>
                            <p class="card-text">ร้านของเราเป็นอาหารจีนสไตล์ฮกเกี้ยนภูเก็ต สูตรอาหารที่เราทำเป็นมรดกตกทอดมาจากอากง และอาม่า...</p>
                            <a href="#" class="btn btn-info" style="margin-left: 25%">อ่านบทความ</a>
                        </div>
                    </div>
                    <div class="card" style="width: 16rem; height: 27rem; margin-top: 3%">
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
    </div>
@endsection
