<?php

namespace App\Http\Controllers;

use App\Models\CrowdMall;
use Illuminate\Http\Request;

class CrowdMallController extends Controller
{
    public function add_input_in_crowdMall(Request $request)
    {
        return response()->view('frontend.pages.add-input-in-crowdmall',[
            'key' => $request->key,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'agree' => 'required',
        ]);
        CrowdMall::newCrowdMall($request);
        return back()->with('success', 'Successful');
    }
}
