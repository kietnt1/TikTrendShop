<?php

namespace App\Http\Controllers\ManagerStores;

use App\Http\Requests\ValidateFormStoreCU;
use App\Models\Stores;
use Exception;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Faker\Extension\Extension;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\error;

class StoresController extends Controller
{
    protected $storesModel;
    function __construct()
    {
        $this->storesModel = new Stores();
    }
    function index()
    {
        $store = $this->storesModel->where('id_user', '=', Auth::id())->first();
        return view('pages.manage-stores.index', ['store' => $store]);
    }
    function formCU()
    {
        $store = $this->storesModel->where('id_user', '=', Auth::id())->first();
        if ($store && !Route::currentRouteNamed('manager.update.shop')) return redirect(route('manager.shop'));
        return view('pages.manage-stores.register', ['store' => $store ?? []]);
    }
    function register(ValidateFormStoreCU $req)
    {
        try {
            $checkUser = $this->storesModel->where('id_user', '=', Auth::id())->get();
            if ($checkUser) return redirect(route('manager.shop'));
            $this->storesModel->create([
                'name' => $req->name_shop,
                'phone' => $req->phone_number,
                'description' => $req->description,
                'address' => join(",", $req->address),
                'slug' => $req->slug,
                'id_user' => Auth::id(),
            ]);
            return redirect(route('manager.shop'));
        } catch (Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
        }
    }
    function update(ValidateFormStoreCU $req, $slug)
    {
        try {
            $store = $this->storesModel->where('slug', $slug)->first();
            $store->update([
                'name' => $req->name_shop,
                'phone' => $req->phone_number,
                'description' => $req->description,
            ]);
            return response()->json($store);
        } catch (Exception $e) {
            echo $e->getMessage();
            die;
        }
    }
}
