<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function showProductHome()
    {
        if (isset($_GET['start_price']) && isset($_GET['end_price'])) {
            $start_price = $_GET['start_price'];
            $end_price = $_GET['end_price'];
            $filter = DB::table("tb_product")
                ->whereBetween('price', [$start_price, $end_price])
                ->orderBy('price', 'ASC')
                ->paginate(6)->appends(request()->query());
        } else {
            $filter = DB::table("tb_product")->paginate(6)->appends(request()->query());
        }

        if (isset($_GET['sort_by'])) {
            if ($_GET['sort_by'] == 'atoz') {
                $filter = DB::table("tb_product")->orderBy('name', 'asc')->paginate(6)->appends(request()->query());
            } elseif ($_GET['sort_by'] == 'ztoa') {
                $filter = DB::table("tb_product")->orderBy('name', 'desc')->paginate(6)->appends(request()->query());
            } elseif ($_GET['sort_by'] == 'lowtohigh') {
                $filter = DB::table("tb_product")->orderBy('price', 'asc')->paginate(6)->appends(request()->query());
            } else {
                $filter = DB::table("tb_product")->orderBy('price', 'desc')->paginate(6)->appends(request()->query());
            }
        }

        if (isset($_GET['brand'])) {
            if ($_GET['brand'] == 'mg') {
                $filter = DB::table("tb_product")->where('brand', 'mg')->paginate(6)->appends(request()->query());
            } elseif ($_GET['brand'] == 'hg') {
                $filter = DB::table("tb_product")->where('brand', 'hg')->paginate(6)->appends(request()->query());
            } elseif ($_GET['brand'] == 'rg') {
                $filter = DB::table("tb_product")->where('brand', 'rg')->paginate(6)->appends(request()->query());
            } elseif ($_GET['brand'] == 'perfectgrade') {
                $filter = DB::table("tb_product")->where('brand', 'Perfect Grade')->paginate(6)->appends(request()->query());
            } elseif ($_GET['brand'] == 'kotobukiya') {
                $filter = DB::table("tb_product")->where('brand', 'kotobukiya')->paginate(6)->appends(request()->query());
            }
        }
        return view('model')->with(['filter' => $filter]);
    }
}
