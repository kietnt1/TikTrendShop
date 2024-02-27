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
        $menus = [
            [
                'title' => 'Quản lý sản phẩm',
                'icon' => '',
                'url' => '',
                'id' => 1,
                'children' => [
                    [
                        'title' => 'Tất cả',
                        'icon' => '',
                        'url' => '',
                    ],
                    [
                        'title' => 'tạo sản phẩm',
                        'icon' => '',
                        'url' => '',
                    ]
                ]
            ],
            [
                'id' => 2,
                'title' => 'quản lý hóa đơn',
                'icon' => '',
                'url' => '',
            ],
            [
                'id' => 3,
                'title' => 'Quản lý bài đăng',
                'icon' => '',
                'url' => '',
                'children' => [
                    [
                        'title' => 'Tất cả',
                        'icon' => '',
                        'url' => '',
                    ],
                    [
                        'title' => 'tạo bài đăng',
                        'icon' => '',
                        'url' => '',
                    ]
                ]
            ],
            [
                'id' => 3,
                'title' => 'Quản lý vorcher',
                'icon' => '',
                'url' => '',
                'children' => [
                    [
                        'title' => 'Tất cả',
                        'icon' => '',
                        'url' => '',
                    ],
                    [
                        'title' => 'tạo vorcher',
                        'icon' => '',
                        'url' => '',
                    ]
                ]
            ],
        ];

        return view('components.sidebar.sidebar-manager-stores-menus', ['menus' => $menus]);
    }
}
