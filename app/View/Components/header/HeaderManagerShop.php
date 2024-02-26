<?php

namespace App\View\Components\header;

use App\Models\Stores;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class HeaderManagerShop extends Component
{
    /**
     * Create a new component instance.
     */
    protected $storeModel;
    public function __construct()
    {
        $this->storeModel = new Stores();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $store = $this->storeModel->where('id_user', '=', Auth::id())->first();
        $image_thumb = json_decode($store['image_arr'])[0] ?? asset('images/default/shop.jpeg');
        return view('components.header.header-manager-shop', ['store' => $store, 'image_thumb' => $image_thumb]);
    }
}
