<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use App\Rules\Recaptcha;
use App\Traits\UploadImageTrait;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Milon\Barcode\DNS2D;


class CarController extends Controller
{
    use UploadImageTrait;

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.allCars' , compact('cars'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return string
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
//        $this -> validate($request, [
//            'g-recaptcha-response' =>
//                ['required', new Recaptcha()]]);

        // Recaptcha passed, do what ever you need

        $car = Car::create([
            'owner_name' => $request->owner_name ,
            'number_type' => $request->number_type ,
            'car_number' => $request->car_number ,
            'car_letter' => $request->car_letter,
            'government_name' => $request->government_name ,
            'document_number' => $request->document_number ,
            'mobile' => $request->mobile ,
            'car_type' => $request->car_type ,
            'family_number' => $request->family_number ,
            'id_card_number' => $request->id_card_number ,
            'resident_number' => $request->resident_number ,
            'document_front_photo' => $this->uploadImage1($request, 'imgs'),
            'document_back_photo' => $this->uploadImage2($request, 'imgs') ,
            'id_card_photo'=> $this->uploadImage3($request, 'imgs') ,
            'car_photo' => $this->uploadImage4($request, 'imgs') ,
            'resident_card_photo' => $this->uploadImage5($request, 'imgs')
        ]);

        session()->flash('success', 'لقد تم اضافة معلوماتك الى النظام');
        return view('cars/allCars');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Factory|View
     */
    public function show($id)
    {
        $car = Car::find($id);

        return view('cars.car' , ['car' => $car ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Car $car
     * @return Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Car $car
     * @return Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Car $car
     * @return Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
