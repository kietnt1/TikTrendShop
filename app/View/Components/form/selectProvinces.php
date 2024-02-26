<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class selectProvinces extends Component
{
    /**
     * Create a new component instance.
     */
    protected $apiProvinces = 'https://vnprovinces.pythonanywhere.com/api/';
    protected string $address;
    public function __construct($address = '')
    {
        $this->address = $address;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $resProvinces = Http::get($this->apiProvinces . 'provinces?limit=100');
        $provinces = $resProvinces->json()['results'];
        if (!empty($_GET['id_provinces'])) {
            $resDistrict = Http::get($this->apiProvinces . 'provinces/' . $_GET['id_provinces'] . '?limit=100');
            $districts = $resDistrict?->json()['districts'];
        }
        if (!empty($_GET['id_district'])) {
            $resWards = Http::get($this->apiProvinces . 'districts/' . $_GET['id_district'] . '?limit=100');
            $wards = $resWards?->json()['wards'];
        }

        return view('components.form.select-provinces', ['provinces' => $provinces, 'districts' => $districts ?? [], 'wards' => $wards ?? []]);
    }
}
