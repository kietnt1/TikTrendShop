<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\View\Components\Form\SelectProvinces;

class ComponentController extends Controller
{
    function renderProvinces()
    {
        $htmlSelect =  (new SelectProvinces())->render();
        return $htmlSelect;
    }
}
