<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = ['category_id', 'type_id', 'title', 'address',
        'zone_id', 'zipcode', 'description', 'price', 'price_monthly',
        'bedrooms', 'has_store', 'has_garage', 'has_elevator', 'area',
        'published', 'phone', 'agent_name', 'exchange','requested',
        'is_sold', 'sold_date',
        'image', 'image_1', 'image_2', 'image_3', 'image_4', 'image_5'
    ];

    protected static function booted()
    {
        static::creating(function ($obj) {
            $obj->user_id = \Auth::id();
        });
    }

    public function category() {
        return $this->belongsTo(\App\Models\Category::class);
    }


    public function type() {
        return $this->belongsTo(\App\Models\Type::class);
    }

    
    public function zone() {
        return $this->belongsTo(\App\Models\Zone::class);
    }


    public function owner() {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }


    public function getImageThumbnail($image) {
        return str_replace('.', '_small.', $this->image);
    }


    public function getThumbnail($image_field) {
        $image_fields = ['image', 'image_1', 'image_2', 'image_3', 'image_4', 'image_5', 'image_6'];

        if (in_array($image_field, $image_fields)) {
            $path = $this->{$image_field};
            if ($path) {
                $info = pathinfo($path);
                return $info['dirname'] . '/' . $info['filename'] . '_small.' . $info['extension'];
            }
        }

        return null;
    }


    public function setImageAttribute($value)
    {
        $this->setImage('image', $value);
    }
    
    
    public function setImage1Attribute($value)
    {
        $this->setImage('image_1', $value);
    }
 
 
    public function setImage2Attribute($value)
    {
        $this->setImage('image_2', $value);
    }


    public function setImage3Attribute($value)
    {
        $this->setImage('image_3', $value);
    }


    public function setImage4Attribute($value)
    {
        $this->setImage('image_4', $value);
    }


    public function setImage5Attribute($value)
    {
        $this->setImage('image_5', $value);
    }


    public function setImage6Attribute($value)
    {
        $this->setImage('image_6', $value);
    }


    public function setImage($attribute_name, $value)
    {
        $disk = 'public';
        $destination_path = 'listings/';
        
        // if a base64 was sent, store it in the db
        if (\Str::startsWith($value, 'data:image')) {
            // 0. Make the image
            $image = \Image::make($value)->encode('jpg', 90);
            $image2 = \Image::make($value)->encode('jpg', 90)
                ->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                });

            // 1. Generate a filename.
            $filename = time() . '_' . $attribute_name . '.jpg';
            $filename_thumb = time() . '_' . $attribute_name . '_small.jpg';

            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path . $filename, $image->stream());
            \Storage::disk($disk)->put($destination_path . $filename_thumb, $image2->stream());

            // 3. Delete the previous image, if there was one.
            \Storage::disk($disk)->delete(str_replace('storage/', '', $this->{$attribute_name}));
            \Storage::disk($disk)->delete(str_replace('storage/', '', $this->getThumbnail($attribute_name)));

            // 4. Save the public path to the database
            // but first, remove "public/" from the path, since we're pointing to it from the root folder
            // that way, what gets saved in the database is the user-accesible URL
            $public_destination_path = \Str::replaceFirst('public/', '', $destination_path);
            $this->attributes[$attribute_name] = 'storage/' . $public_destination_path . $filename;
        } else {
            $this->attributes[$attribute_name] = $value;
        }
    }
}
