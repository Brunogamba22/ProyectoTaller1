<?php
namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function panel()
    {
        return view('back/panel');
    }
}