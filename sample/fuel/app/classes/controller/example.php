<?php

// コントローラー名、継承元
class Controller_Example extends Controller_Template
{
  // action_indexはマスト
	public function action_index()
	{
    // $dataにsubnavの配列を作成
    $data["subnav"] = array('index'=> 'active' );
    $this->template->title = 'Example &raquo; Index';
    // $dataをexample/indexのtemplateに渡す forge=プレスする
		$this->template->content = View::forge('example/index', $data);
	}

	public function action_add()
	{
		$data["subnav"] = array('add'=> 'active' );
		$this->template->title = 'Example &raquo; Add';
		$this->template->content = View::forge('example/add', $data);
	}

}
