<?php

namespace App\Http\Controllers;

use App\Carousel;
use App\Services\Intervention;
use Image;
use Storage;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCarousel;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carou = Carousel::all();
        return view('site.carousel', compact('carou'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.carousel-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarousel $request, Intervention $intervention)
    {
        $newcarou = new Carousel;
        $newcarou->photo = $request->photo->store('', 'image');
        // resize to the wanted dimensions with image intervention
        // $img = $intervention->imageResize('image','250','250',$newcarou->photo);
        // $img->save();
        $newcarou->save();
        $carou = Carousel::all();
        return view('site.carousel', compact('carou'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carousel $carousel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carousel $carousel)
    {
        $carousel->delete();
        $carou = Carousel::all();
        return view('site.carousel', compact('carou'));
    }
}
