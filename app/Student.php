<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'gender', 'image', 'birthday', 'point'
    ];



    /**
     * Cac Functions
     */
    public function dateCreated($showTimes = false)
    {
        $format = "d/m/Y";
        if ($showTimes) $format = $format . " H:i:s";
        return $this->created_at->format($format);
    }
    public function dateUpdated($showTimes = false)
    {
        $format = "d/m/Y";
        if ($showTimes) $format = $format . " H:i:s";
        return $this->updated_at->format($format);
    }

    /**
     *  Accessor
     */
    public function getImageUrlAttribute()
    {
        // $imageUrl = "https://place-hold.it/246x384?text=246x384 or 300x468&italic&bold";
        // $imageUrl = "holder.js/246x384?theme=industrial&lineWrap=2.5&random=yes&text=246x384 or 450x600";
        $imageUrl = "";
        
        // $directory = config('cms.image.directory');
        $directory = $this->image;
        

        if(! \is_null($this->image)){
            $imagePath = \public_path() . "/storage/" . $this->image;

            if(file_exists($imagePath)){
                $imageUrl = asset("/storage/{$directory}");
            }
        }
        
        return $imageUrl ?: 'https://place-hold.it/50x50?text=50x50';
    }


    /**
     * Local Scopes
     */
    public function scopeLatestFirst($query)
    {
        return $query->orderBy('updated_at', 'DESC');
    }
}
