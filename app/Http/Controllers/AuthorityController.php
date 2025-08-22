<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthorityController extends Controller
{
    public function operationalManagement(): View
    {
        return view('pages.operational_management');
    }
    public function financeManagement(): View
    {
        return view('pages.financial_management');
    }
}
