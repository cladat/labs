<?php
namespace App\Services;

use Storage;
use Image;

class Intervention {

    public function imageResize($disk, $x, $y, $image){

        $lien = Storage::disk($disk)->path($image);
        $img = Image::make($lien)->resize($x,$y);
        return $img;
        
    }
}