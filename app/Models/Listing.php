<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    public $fillable = ['title', 'address', 'city', 'zipcode',
        'description', 'price', 'bedrooms', 'has_store', 'has_garage',
        'sqft', 'published', 'image', 'image_1', 'image_2', 'image_3',
        'image_4', 'image_5', 'image_6'
    ];


    public function category() {
        return $this->belongsTo(\App\Models\Category::class);
    }


    public function type() {
        return $this->belongsTo(\App\Models\Type::class);
    }


    public function getImageThumbnail($image) {
        return str_replace('.', '_small.', $this->image);
    }

    public function setImageAttribute($value)
    {
        $attribute_name = 'image';
        // $attribute_name2 = 'small_image';
        $disk = 'public'; // use Backpack's root disk; or your own
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
            $filename = md5($value.time()) . '.jpg';
            $filename2 = md5($value.time()) . '_small.jpg';

            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path . $filename, $image->stream());
            \Storage::disk($disk)->put($destination_path . $filename2, $image2->stream());

            // 3. Delete the previous image, if there was one.
            \Storage::disk($disk)->delete($this->{$attribute_name});
            // \Storage::disk($disk)->delete($this->{$attribute_name2});

            // 4. Save the public path to the database
            // but first, remove "public/" from the path, since we're pointing to it from the root folder
            // that way, what gets saved in the database is the user-accesible URL
            $public_destination_path = \Str::replaceFirst('public/', '', $destination_path);
            $this->attributes[$attribute_name] = 'storage/' . $public_destination_path . $filename;
            // $this->attributes[$attribute_name2] = 'storage/' . $public_destination_path . $filename2;
        } else {
            $this->attributes[$attribute_name] = $value;
            // $this->attributes[$attribute_name2] = str_replace('.', '_small.', $value);
        }
    }

}