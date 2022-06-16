<?php

namespace Vendor\Mzpackage\Controllers;

use App\Http\Controllers\Controller;

class mzpackagecontroller extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function greeting()
    {
        return view('CurrencyFormatter::greeting');
    }
}
