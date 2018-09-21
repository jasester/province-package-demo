<?php

namespace Hnndy\Province\Http\Controller\Api;

use Hnndy\Province\Models\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegionController extends Controller
{
    /**
     * 获取省份
     *
     * @param Request $request
     * @return void
     */
    public function provinces (Request $request)
    {
        $datas = Region::where('parent_id', 0)->orderBy('id', 'asc')->get();

        return view('province::province', compact('datas'));
    }

    /**
     * 省份下的城市
     *
     * @param Request $request
     * @param [type] $countryId
     * @return void
     */
    public function citys (Request $request, $countryId)
    {
        $datas = Region::where('parent_id', $countryId)->orderBy('id', 'asc')->get();

        return view('province::city', compact('datas'));
    }

    /**
     * 城市下的区县
     *
     * @param Request $request
     * @param [type] $countryId
     * @return void
     */
    public function countys (Request $request, $countryId)
    {
        $datas = Region::where('parent_id', $countryId)->orderBy('id', 'asc')->get();

        return view('province::county', compact('datas'));
    }

    /**
     * 区县下的街道
     *
     * @param Request $request
     * @param [type] $countryId
     * @return void
     */
    public function streets (Request $request, $countryId)
    {
        $datas = Region::where('parent_id', $countryId)->orderBy('id', 'asc')->get();

        return view('province::street', compact('datas'));
    }
}
