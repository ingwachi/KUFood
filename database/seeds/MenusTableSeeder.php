<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = 'สุกี้หมู';
        $menu->price = '60';
        $menu->type = 'm';
        $menu->image = 'img/content3/menu/1.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = 'สุกี้ไก่';
        $menu->price = '60';
        $menu->type = 'm';
        $menu->image = 'img/content3/menu/2.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = 'สุกี้ปลาหมึก';
        $menu->price = '70';
        $menu->type = 'm';
        $menu->image = 'img/content3/menu/3.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = 'สุกี้กุ้ง';
        $menu->price = '70';
        $menu->type = 'm';
        $menu->image = 'img/content3/menu/4.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = 'สุกี้ปลา';
        $menu->price = '75';
        $menu->type = 'm';
        $menu->image = 'img/content3/menu/5.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = 'สุกี้ทะเล';
        $menu->price = '85';
        $menu->type = 'm';
        $menu->image = 'img/content3/menu/6.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = 'เกี๊ยวโบว์';
        $menu->price = '30';
        $menu->type = 'a';
        $menu->image = 'img/content3/menu/7.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = 'หมูมะนาว';
        $menu->price = '40';
        $menu->type = 'a';
        $menu->image = 'img/content3/menu/8.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = 'ลูกชิ้นปลาลวกจิ้ม';
        $menu->price = '40';
        $menu->type = 'a';
        $menu->image = 'img/content3/menu/9.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = 'กุ้งนั่งเรือ';
        $menu->price = '60';
        $menu->type = 'a';
        $menu->image = 'img/content3/menu/10.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = 'ทะเลลวกจิ้ม';
        $menu->price = '60';
        $menu->type = 'a';
        $menu->image = 'img/content3/menu/11.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = 'หมึกอู้ฟู่';
        $menu->price = '89';
        $menu->type = 'a';
        $menu->image = 'img/content3/menu/12.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = 'น้ำเก็กฮวย';
        $menu->price = '25';
        $menu->type = 'b';
        $menu->image = 'img/content3/menu/13.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = 'น้ำกระเจี๊ยบ';
        $menu->price = '25';
        $menu->type = 'b';
        $menu->image = 'img/content3/menu/14.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = 'น้ำลำไย';
        $menu->price = '25';
        $menu->type = 'b';
        $menu->image = 'img/content3/menu/15.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = 'ชานมไข่มุก';
        $menu->price = '55';
        $menu->type = 'b';
        $menu->image = 'img/content3/menu/16.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '1';
        $menu->name = 'ชาภูเก็ต';
        $menu->price = '55';
        $menu->type = 'b';
        $menu->image = 'img/content3/menu/17.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '3';
        $menu->name = 'สเต็กหมู';
        $menu->price = '75';
        $menu->type = 'm';
        $menu->image = 'img/menus/1.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '3';
        $menu->name = 'พอร์คชอป';
        $menu->price = '89';
        $menu->type = 'm';
        $menu->image = 'img/menus/2.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '3';
        $menu->name = 'แฮมสเต็ก';
        $menu->price = '99';
        $menu->type = 'm';
        $menu->image = 'img/menus/3.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '3';
        $menu->name = 'พอร์ค กอ ดอง เบลอ';
        $menu->price = '135';
        $menu->type = 'm';
        $menu->image = 'img/menus/4.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '3';
        $menu->name = 'สเต็กปลา';
        $menu->price = '75';
        $menu->type = 'm';
        $menu->image = 'img/menus/5.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '3';
        $menu->name = 'สเต็กปลาชุบเกล็ดขนมปัง';
        $menu->price = '85';
        $menu->type = 'm';
        $menu->image = 'img/menus/6.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '3';
        $menu->name = 'สเต็กไก่';
        $menu->price = '75';
        $menu->type = 'm';
        $menu->image = 'img/menus/7.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '3';
        $menu->name = 'สเต็กไก่ชุบเกล็ดขนมปัง';
        $menu->price = '85';
        $menu->type = 'm';
        $menu->image = 'img/menus/8.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '3';
        $menu->name = 'สเต็กไก่อลาสก้า';
        $menu->price = '85';
        $menu->type = 'm';
        $menu->image = 'img/menus/9.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '3';
        $menu->name = 'สปาเก็ตตี้หมู';
        $menu->price = '59';
        $menu->type = 'm';
        $menu->image = 'img/menus/10.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '3';
        $menu->name = 'สปาเก็ตตี้คาโบนาร่าทูน่า';
        $menu->price = '59';
        $menu->type = 'm';
        $menu->image = 'img/menus/11.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '3';
        $menu->name = 'ซุปเห็ดแชมปีญอง';
        $menu->price = '29';
        $menu->type = 'a';
        $menu->image = 'img/menus/12.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '3';
        $menu->name = 'มันบดอบชีส';
        $menu->price = '29';
        $menu->type = 'a';
        $menu->image = 'img/menus/13.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '3';
        $menu->name = 'ผักโขมอบชีส';
        $menu->price = '29';
        $menu->type = 'a';
        $menu->image = 'img/menus/14.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '3';
        $menu->name = 'ชามะนาว รีฟีล';
        $menu->price = '22';
        $menu->type = 'b';
        $menu->image = 'img/menus/15.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '3';
        $menu->name = 'ชาดำเย็น รีฟีล';
        $menu->price = '22';
        $menu->type = 'b';
        $menu->image = 'img/menus/16.jpg';
        $menu->save();

        $menu = new Menu;
        $menu->restaurant_id = '3';
        $menu->name = 'โค้ก รีฟีล';
        $menu->price = '22';
        $menu->type = 'b';
        $menu->image = 'img/menus/17.jpg';
        $menu->save();
    }
}
