<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Pricing;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('id', 'desc')->get();
        $portfolio_categories = PortfolioCategory::get();
        $experiences = Experience::orderBy('start_year', 'desc')->get();
        $pricings = Pricing::get();

        return view('public.index', compact('portfolios', 'portfolio_categories', 'experiences', 'pricings'));
    }
}
