@extends('layouts.master')

@section('content')
    <div style="margin-left: 7%; font-family: 'Kanit', sans-serif; margin-top: 5%">
        <div style="font-size: 30px">เพิ่มรายการอาหารของร้าน{{ $restaurant->name }}</div>
        <form method="POST" action="{{ route('content3.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="name">ชื่อรายการอาหาร</label>
                    <input type="text" name="name" class="form-control" style="width: 50%" required>
                    <label for="price" style="margin-top: 3%">ราคา (บาท)</label>
                    <input type="text" name="price" class="form-control" style="width: 20%" required>
                    <label for="price" style="margin-top: 3%">ประเภทของอาหาร</label>
                    <input type="text" name="type" class="form-control" style="width: 10%" required>
                    <div>m = อาหารจารหลัก</div>
                    <div>a = อาหารทานเล่น</div>
                    <div>b = เครื่องดื่ม</div>
                </div>

                <div class="col">
                    <input type="file" name="image" class="form-control-file img_intput"
                           style="font-family: Kanit, sans-serif;"  id="image_input" required>
                    <div>
                        <div style="font-family: Kanit, sans-serif; position: absolute; margin-top: 15%; margin-left: 17%; color: #5d5b6a"
                             id="image_preview">image preview</div>
                        <img style="height: 200px; width: 310px; margin-top: 2%; background-color: white"
                             id="img_show">
                    </div>
                </div>
            </div>
            <button  class="btn btn-info" style="margin-top: 3%; margin-left: 30%" type="submit">เพิ่มรายการอาหาร</button>
        </form>
    </div>
@endsection

@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img_show').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
            document.getElementById("image_preview").style.display = "none";
        }

        $("#image_input").change(function() {
            readURL(this);
        });
    </script>
@endsection
