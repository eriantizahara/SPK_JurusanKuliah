<?php

namespace App\Controllers;

use App\Models\ModelPenyewaan;

class landingpage extends BaseController
{
    public function index(): string
    {
        return view('layout/v_landingpage');
    }
}