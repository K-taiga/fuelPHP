<?php
// view直下のtemplateをデフォルトで読み込むクラス
class Controller_Sample extends Controller_Template
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

        // DB::query('INSERT INTO items SET item_name="すいか", price=80')->execute();

        // print('Execute!');

        // $data = array();
        // $data['name'] = 'かとう';
        // return View::forge('sample/index', $data);

        // $view = View::forge('sample/index');
        // $view->set('name', 'かとう');
        // return $view;

        // $data = array();
        // $data['html'] = '<p>段落のタグ<strong>強調</strong></p>';

        // // サニタイズでhtmlじゃなく文字列として渡っちゃうのをfalseで回避
        // return View::forge('sample/index', $data, false);

        // $view = View::forge('sample/index');
        // // 個別にサニタイズを回避
        // $view->set('html', '<p>段落</p>', false);
        // $view->set('danger', '<script></script>');

        // return $view;

        $this->template->title = 'お問い合わせ';
        $data = array();
        $data['myname'] = '加藤';
        $this->template->content = View::forge('sample/index', $data);
    }

    public function action_calc($a, $b)
    {
        // sample/calc/$a/$bのように$_GETで受け取れる
        $answer = $a * $b;
        print($answer);
    }

    public function action_save()
    {
        print('save');
    }

    public function action_check()
    {
        $this->template->title = 'お問い合わせ：確認';
        $this->template->content = View::forge('sample/check');
    }

    public function action_thanks()
    {
        $this->template->title = 'お問い合わせ：完了';
        $this->template->content = View::forge('sample/thanks');
    }

}
