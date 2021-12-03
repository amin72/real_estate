<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Http\Requests\ListingUserRequest;


class ListingsController extends Controller
{
    public function __construct() {
        $this->middleware('auth', [
            'only' => [
                'create',
                'store',
                'edit',
                'update',
                'destroy'
            ]
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $zone_id = $request->zone == 'empty' ? '' : $request->zone;
        $type_id = $request->type== 'empty' ? '' : $request->type;
        $price = $request->price == 'empty' ? '' : $request->price;

        $listings = Listing::where('published', true);
        
        if ($zone_id) {
            $listings->where('zone_id', $zone_id);
        }
        
        if ($type_id) {
            $listings->where('type_id', $type_id);
        }
        
        if ($price) {
            $listings->where('price', '<=', $price);
        }

        $listings = $listings->orderBy('created_at')->paginate(12);
        
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
            'listing_price_monthly' => '',
            'listing_address' => '',
            'listing_zipcode' => '',
            'listing_bedrooms' => '',
            'listing_has_store' => '',
            'listing_has_garage' => '',
            'listing_area' => '',
            'listing_requested' => '',
            'listing_exchange' => '',
            'listing_category' => '',
            'listing_type' => '',
            'listing_zone' => '',
            'listing_phone' => '',
            'image_required' => true,
            'method' => 'POST',
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
            'category_id', 'type_id', 'title', 'address', 'zipcode', 'zone_id',
            'description', 'price', 'price_monthly', 'bedrooms', 'area',
            'has_store', 'has_garage', 'phone', 'image',
            'image_1', 'image_2', 'image_3', 'image_4', 'image_5',
        ]));

        $listing->requested = $request->requested == 'on';
        $listing->exchange = $request->exchange == 'on';

        if (! $request->requested) {
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
                        ->resize(100, 100, function ($constraint) {
                            $constraint->aspectRatio();
                        });
    
                    \Storage::disk($disk)->put($path, $extra_img->stream(), 'public');
                    \Storage::disk($disk)->put($path2, $thumb->stream(), 'public');
    
                    $listing->{$image_field} = 'storage/' . $path;
                }
            }
        }
        
        $listing->save();
        return redirect(route('pages.index'))->with('success', 'آگهی شما با موفقیت ثبت شد. پس از تایید توسط مدیر سایت درج می شود.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::where('published', true)->findOrFail($id);
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
        $listing = Listing::findOrFail($id);

        return view('listings.form')->with([
            'listing' => $listing,
            'page_title' => 'ویرایش ملک',
            'listing_title' => $listing->title,
            'listing_description' => $listing->description,
            'listing_price' => $listing->price,
            'listing_price_monthly' => $listing->price_monthly,
            'listing_address' => $listing->address,
            'listing_zipcode' => $listing->zipcode,
            'listing_bedrooms' => $listing->bedrooms,
            'listing_has_store' => $listing->has_store,
            'listing_has_garage' => $listing->has_garage,
            'listing_requested' => $listing->requested,
            'listing_exchange' => $listing->exchange,
            'listing_area' => $listing->area,
            'listing_phone' => $listing->phone,
            'listing_category' => $listing->category->slug,
            'listing_type' => $listing->type->slug,
            'listing_zone' => $listing->zone->name,
            'image_required' => false,
            'method' => 'PUT',
            'action' => 'update',
        ]);
        // 'image', 'image_1', 'image_2', 'image_3',
        // 'image_4', 'image_5', 'image_6'
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
        $listing = Listing::where(['published' => false, 'id' => $id])
            ->firstOrFail();

        $listing->update($request->only([
            'category_id', 'type_id', 'title', 'address', 'zipcode', 'zone_id',
            'description', 'price', 'price_monthly', 'bedrooms', 'area',
            'has_store', 'has_garage', 'phone', 'image',
            'image_1', 'image_2', 'image_3', 'image_4', 'image_5',
        ]));

        $listing->requested = $request->requested == 'on';
        $listing->exchange = $request->exchange == 'on';

        if (! $request->requested) {
            $disk = 'public';

            $image = $request->file('image');
            if ($image) {
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
            }
    
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
                        ->resize(100, 100, function ($constraint) {
                            $constraint->aspectRatio();
                        });
    
                    \Storage::disk($disk)->put($path, $extra_img->stream(), 'public');
                    \Storage::disk($disk)->put($path2, $thumb->stream(), 'public');
    
                    $listing->{$image_field} = 'storage/' . $path;
                }
            }
        }
        
        $listing->save();
        return redirect(route('pages.index'))->with('success', 'آگهی شما با موفقیت بروزرسانی شد.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::where(['id' => $id, 'published' => false])
            ->firstOrFail();

        if ($listing->owner->id !== \Auth::id()) {
            abort(401);
        }

        if ($listing->delete()) {
            return redirect(route('dashboard.index'))
                ->with('success', 'آگهی با موفقیت حذف شد.');
        }

        return redirect(route('dashboard.index'))
            ->with('error', 'حذف آگهی امکان پذیر نیست.');
    }
}
