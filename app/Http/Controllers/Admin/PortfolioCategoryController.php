<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    public function index()
    {
        $portfolio_categories = PortfolioCategory::orderBy('title', 'asc')->get();

        return view('admin.portfolio.category', compact('portfolio_categories'));
    }
}
