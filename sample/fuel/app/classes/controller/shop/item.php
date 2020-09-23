<?php
class Controller_Shop_Item extends Controller
{
    public function action_index()
    {
        print('index');
    }

    // /shop/item/tax/100のようにディレクトリ、コントローラー名、アクション名、パラメータのようにアクセスする
    // 初期値をパラメータに入れれば/shop/item/taxでもwarning吐かない
    public function action_tax($price = 0)
    {
        print($price * 1.10);
    }
}
