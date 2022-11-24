<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User ;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_name' , 'number_type' , 'car_number' , 'car_letter' , 'government_name' , 'document_number' ,
        'mobile' , 'car_type' , 'family_number' , 'id_card_number' , 'resident_number' , 'document_front_photo' ,
        'document_back_photo' , 'id_card_photo' , 'car_photo' , 'resident_card_photo' , 'notes' , 'random_code'
    ];


    public function user () {
        return $this->belongsTo(User::class);
    }


}
