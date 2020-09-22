<?php

class Controller_Shop extends Controller
{
    public function action_index()
    {
        return View::forge('shop/index');
    }

}
