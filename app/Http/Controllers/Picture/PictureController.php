<?php

namespace App\Http\Controllers\Picture;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PictureController extends Controller
{
    public function getPictures() {
        return view('picture.picture_show');
    }
}
