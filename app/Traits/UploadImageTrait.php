<?php


namespace App\Traits;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait UploadImageTrait
{
    public function uploadImage1 (Request $request , $folderName ) {
        $image = $request->file('id_card_photo')->getClientOriginalName();
        $path = $request->file('id_card_photo')->storeAs($folderName , $image , 'public' );
        return $path ;
    }
    public function uploadImage2 (Request $request , $folderName ) {
        $image = $request->file('car_photo')->getClientOriginalName();
        $path = $request->file('car_photo')->storeAs($folderName , $image , 'public' );
        return $path ;
    }
    public function uploadImage3 (Request $request , $folderName ) {
        $image = $request->file('resident_card_photo')->getClientOriginalName();
        $path = $request->file('resident_card_photo')->storeAs($folderName , $image , 'public' );
        return $path ;
    }
    public function uploadImage4 (Request $request , $folderName ) {
        $image = $request->file('document_front_photo')->getClientOriginalName();
        $path = $request->file('document_front_photo')->storeAs($folderName , $image , 'public' );
        return $path ;
    }
    public function uploadImage5 (Request $request , $folderName ) {
        $image = $request->file('document_back_photo')->getClientOriginalName();
        $path = $request->file('document_back_photo')->storeAs($folderName , $image , 'public' );
        return $path ;
    }
}








