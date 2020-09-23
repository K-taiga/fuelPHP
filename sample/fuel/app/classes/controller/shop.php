<?php

class Controller_Shop extends Controller
{
    public function action_index()
    {
        return View::forge('shop/index');
    }

    public function action_save()
    {
        $item = Model_Item::forge();

        $data = array();
        // formの内容はInput::postで受け取れる
        $data["item_name"] = Input::post('item_name');
        $data["price"] = Input::post('price');
        $item->set($data);
        $item->save();

        print('Saved');
    }

}
