<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Http\Requests\ListingUserRequest;


class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::where('published', true)
            ->orderBy('created_at')->paginate(12);
        
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
            'listing_zipcode' => '',
            'listing_bedrooms' => '',
            'listing_has_store' => '',
            'listing_has_garage' => '',
            'listing_area' => '',
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
    public function store(ListingUserRequest $request)
    {
        $listing = Listing::create($request->only([
            'category_id', 'type_id', 'title', 'address',
            'zipcode', 'description', 'price', 'bedrooms',
            'has_store', 'has_garage', 'area', 'phone', 'image',
            'image_1', 'image_2', 'image_3', 'image_4', 'image_5'
        ]));

        $disk = 'public';

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $filename_thumb = time() . '_small.' . $image->getClientOriginalExtension();
        $path = 'listings/' . $filename;
        $path2 = 'listings/' . $filename_thumb;

        $img = \Image::make($image->getRealPath());
        $thumb = \Image::make($image->getRealPath())
            ->encode('jpg', 90)
            ->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            });

        \Storage::disk($disk)->put($path, $img->stream(), 'public');
        \Storage::disk($disk)->put($path2, $thumb->stream(), 'public');

        $listing->image = 'storage/' . $path;
        $listing->save();

        $image_fields = ['image_1', 'image_2', 'image_3', 'image_4', 'image_5', 'image_6'];
    
        foreach ($image_fields as $image_field) {
            $extra_image = $request->{$image_field};
            if ($extra_image) {
                $filename = time() . '_' . $image_field . '.' . $extra_image->getClientOriginalExtension();
                $filename_thumb = time() . '_' . $image_field . '_small.' . $extra_image->getClientOriginalExtension();

                $path = 'listings/' . $filename;
                $path2 = 'listings/' . $filename_thumb;
        
                $extra_img = \Image::make($extra_image->getRealPath());
                $thumb = \Image::make($extra_image->getRealPath())
                    ->encode('jpg', 90)
                    ->resize(300, 300, function ($constraint) {
                        $constraint->aspectRatio();
                    });

                \Storage::disk($disk)->put($path, $extra_img->stream(), 'public');
                \Storage::disk($disk)->put($path2, $thumb->stream(), 'public');

                $listing->{$image_field} = 'storage/' . $path;
                $listing->save();
            }
        }

        return redirect(route('pages.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::findOrFail($id);
        return view('listings.show', ['listing' => $listing]);
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
