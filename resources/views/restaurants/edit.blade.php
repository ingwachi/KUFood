@extends('layouts.master')

@section('content')
    <div style="margin-left: 7%; font-family: 'Kanit', sans-serif; margin-top: 5%">
        <div style="font-size: 30px">แก้ไขรายการอาหาร</div>
        <form method="POST" action="{{ route('restaurant.menu.update', ['menu' => $menu->id, 'restaurant' => $restaurant]) }}">
            @method('PUT')
            @csrf
            <label for="name">ชื่อรายการอาหาร</label>
            <input type="text" name="name" class="form-control" style="width: 30%" value="{{ old('name', $menu->name) }}" required>
            <label for="price" style="margin-top: 3%">ราคา (บาท)</label>
            <input type="text" name="price" class="form-control" style="width: 10%" value="{{ old('price', $menu->price) }}" required>
            <label for="price" style="margin-top: 3%">ประเภทของอาหาร</label>
            <input type="text" name="type" class="form-control" style="width: 10%" value="{{ old('type', $menu->type) }}" required>
            <div>m = อาหารจารหลัก</div>
            <div>a = อาหารทานเล่น</div>
            <div>b = เครื่องดื่ม</div>
            <button  class="btn btn-info" style="margin-top: 3%" type="submit">ยืนยันการแก้ไข</button>
        </form>
        <form id="deleteForm" onsubmit="return confirm('Are you sure to delete this post?')"
              action="{{ route('restaurant.menu.delete', ['restaurant' => $restaurant, 'menu' => $menu->id]) }}" method="post">
            @method('DELETE')
            @csrf
            <button style="margin-top: -5%; margin-left: 10%" class="btn btn-danger" type="submit">ลบรายการอาหาร</button>
        </form>

    </div>
@endsection
