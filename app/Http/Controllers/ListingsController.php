<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;


class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::where('is_published', true)->orderBy('created_at')->paginate(12);
        
        return view('listings.index', [
            'listings' => $listings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listings.form')->with([
            'listing' => '',
            'page_title' => 'افزودن ملک',
            'listing_title' => '',
            'listing_description' => '',
            'listing_price' => '',
            'listing_address' => '',
            'listing_city' => '',
            'listing_zipcode' => '',
            'listing_bedrooms' => '',
            'listing_has_store' => '',
            'listing_has_garage' => '',
            'listing_sqft' => '',
            'image_required' => true,
            'action' => 'POST',
        ]);
        // 'image', 'image_1', 'image_2', 'image_3',
        // 'image_4', 'image_5', 'image_6'
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd("store");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd("show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd("edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd("update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd("destroy");
    }


    public function search()
    {
        $listings = [];
        return view('listings.index', ['listings' => $listings]);
    }
}
