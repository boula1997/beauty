<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $portfolio;

    public function __construct( Gallery $portfolio)
    {
        $this->portfolio = $portfolio;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            $portfolios = $this->portfolio->get();
            return view('front.portfolios.portfolio', compact( 'portfolios'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio= $this->portfolio->findorfail($id);
        return view('front.portfolio.single_portfolio', compact('portfolio'));
    }


}
