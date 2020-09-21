<?php

class Controller_Sample extends Controller
{
    public function action_index()
    {
        // $user = new Model_User();

        // print($user->get_name());

        // newじゃなくforgeで割り当てる
        $item = Model_Item::forge();
        $data = array();
        $data['item_name'] = 'いちご';
        $data['price'] = '80';

        $item->set($data);
        $item->save();

        print('saved!');
    }

    public function action_calc($a, $b)
    {
        // sample/calc/$a/$bのように$_GETで受け取れる
        $answer = $a * $b;
        print($answer);
    }


}
