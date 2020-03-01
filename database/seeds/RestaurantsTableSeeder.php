<?php

use Illuminate\Database\Seeder;
use App\Restaurant;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurant = new Restaurant;
        $restaurant->name = 'เอ่งฉ้วนสุกี้';
        $restaurant->address = 'ถ.งามวงศ์วาน 56-58 แขวงลาดยาว เขตจตุจักร, กรุงเทพมหานคร 10900';
        $restaurant->detail = 'อาหารจีนสไตล์ฮกเกี้ยน และภูเก็ตโอลด์ทาวน์แท้ๆ จากแรงบันดาลใจที่อากง อาม่าทำให้ทานตอนยังเล็ก ความสุขของทุกคำ ความอร่อย และพิถีพิถันเหมือนทำกับข้าวให้ลูกหลาน วันนี้มาอยู่ที่นี่แล้ว';
        $restaurant->image = 'img/homepage/content3.png';
        $restaurant->save();

        $restaurant1 = new Restaurant;
        $restaurant1->name = 'Mihimihi';
        $restaurant1->address = '89 ซ.งามวงศ์วาน 52 แขวงลาดยาว เขตจตุจักร กรุงเทพมหานคร 10900 กรุงเทพมหานคร (ติดป้ายรถเมล์)';
        $restaurant1->detail = 'Mihimihi มาเปิดที่เกษตรแล้วจ้า มีทั้งครีมพัฟสไตล์ฝรั่งเศส แพนเค้กซูเฟล่ และเครื่องดื่ม ร้านสีขาวเล็กๆน่ารัก มาถ่ายรูปเช็คอินได้เลยอยู่ที่ Home Village Kasetsart';
        $restaurant1->image = 'img/homepage/content4.png';
        $restaurant1->save();

        $restaurant2 = new Restaurant;
        $restaurant2->name = 'Sam Steak and More (แซม สเต็ก แอนด์ มอร์)';
        $restaurant2->address = 'ถนนงามวงศ์วาน, ลาดยาว, กรุงเทพมหานคร, 10900, ประเทศไทย กรุงเทพมหานคร (ปากซอยงามวงศ์วาน 60)';
        $restaurant2->detail = 'ในย่าน ม.เกษตรศาสตร์ มีร้านสเต๊กอยู่หลายร้านและราคาไม่แพง ร้าน Sam Steak อร่อยและราคาไม่แพง เราเลยเปลี่ยนมาเป็นลูกค้าประจำร้านนี้ บ่อยกว่าร้าน Jeffer ไปทานตั้งแต่ร้านเปิดใหม่ๆ';
        $restaurant2->image = 'img/homepage/content4.png';
        $restaurant2->save();

    }
}
