<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Home | RESLab Computer Engineering Unand"
        ];
        echo view('layout/header', $data);
    }
}
