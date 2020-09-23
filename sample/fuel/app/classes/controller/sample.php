<?php

class Controller_Sample extends Controller
{
    public function action_index()
    {
        // $user = new Model_User();

        // print($user->get_name());

        // newじゃなくforgeで割り当てる
        // $item = Model_Item::forge();
        // $data = array();
        // $data['item_name'] = 'いちご';
        // $data['price'] = '80';

        // $item->set($data);
        // $item->save();

        // print('saved!');

        // $data = array();
        // $data['raws'] = Model_Item::find_all();

        // return View::forge('shop/index',$data);

        DB::query('INSERT INTO items SET item_name="すいか", price=80')->execute();

        print('Execute!');
    }

    public function action_calc($a, $b)
    {
        // sample/calc/$a/$bのように$_GETで受け取れる
        $answer = $a * $b;
        print($answer);
    }

}
