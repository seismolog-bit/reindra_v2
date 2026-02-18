<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Pricing;
use App\Models\Theme;
use App\Models\ThemeCategory;
use App\Models\ThemeTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Technology;

class HomeController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('year', 'desc')->get();
        $portfolio_categories = PortfolioCategory::get();
        $experiences = Experience::orderBy('start_year', 'desc')->get();
        $pricings = Pricing::get();
        $technologies = Technology::all();

        return view('public.index', compact('portfolios', 'portfolio_categories', 'experiences', 'pricings', 'technologies'));
    }

    public function pricingShow($slug)
    {
        $pricing = Pricing::where('slug', $slug)->first();
        $theme_category = ThemeCategory::where('slug', $slug)->first();
        $themes = Theme::where('theme_category', $theme_category->id)->get();
        $tags = ThemeTag::orderBy('title', 'asc')->get();

        return view('public.pricing-show', compact('pricing', 'themes', 'tags'));
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];


        Mail::to('reindrawahyudi@gmail.com')->send(new ContactMail($data));

        return redirect()->route('index')->with('success', "Thanks form contacting me, I'll get back you soon!");
    }

    // public function themeLoadMore(Request $request)
    // {
    //     $offset = $request->offset;

    //     $limit = 1;

    //     $theme_category = ThemeCategory::where('slug', $request->slug)->first();
    //     $themes = Theme::where('theme_category', $theme_category->id)->offset($offset)->limit($limit)->get();

    //     return response()->json($themes);
    // }
}
