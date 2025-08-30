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
    public function clientManagement(): View
    {
        return view('pages.client_management');
    }
    public function scheduleManagement(): View
    {
        return view('pages.schedule_management');
    }
    public function marketingManagement(): View
    {
        return view('pages.marketing_management');
    }
    public function fetchAI(): View
    {
        return view('pages.fetch_ai');
    }
    public function settings(Request $request): View
    {
        $form_type = $request->query('form', 'profile'); // default to 'profile'
        return view('pages.settings', compact('form_type'));
    }
}
