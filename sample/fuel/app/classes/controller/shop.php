<?php

class Controller_Shop extends Controller
{
    public function action_index()
    {
        // limit , offset(ページングの処理など) でパラメータ受け取る
        // $data['rows'] = Model_Item::find_all(1, 1);
        // 主キーを指定して取得
        // $data['row'] = Model_Item::find_by_pk(2);

        // 複数取得
        $data['rows'] = Model_Item::find_by('price','60','>');
        // 1件だけ取得
        // $data['row'] = Model_Item::find_one_by('item_name','バナナ','=');

        return View::forge('shop/index', $data);
    }

    public function action_save()
    {
        $item = Model_Item::forge();

        $data = array();
        // formの内容はInput::postで受け取れる
        $data["item_name"] = Input::post('item_name');
        $data["price"] = Input::post('price');
        // setがあればINSERT
        $item->set($data);
        $item->save();

        print('Saved');
    }

    public function action_delete() {
      $item = Model_Item::find_by_pk(4);
      $item->delete();
    }

    public function action_update() {
      $item = Model_Item::find_by_pk(1);
      $item['price'] = 12345;
      // すでにあるレコードの場合はUPDATE
      $item->save();
    }
}
