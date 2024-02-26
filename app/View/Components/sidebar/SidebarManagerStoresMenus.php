<?php

namespace App\View\Components\sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Stores;
use Illuminate\Support\Facades\Auth;

class SidebarManagerStoresMenus extends Component
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
        return view('components.sidebar.sidebar-manager-stores-menus', ['store' => $store]);
    }
}
