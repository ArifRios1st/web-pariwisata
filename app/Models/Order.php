<?php

namespace App\Models;

use App\Http\Traits\HasPhoto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    use HasPhoto;
    protected $guarded = ['id'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'photo_url',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function packet(){
        return $this->belongsTo(Packet::class);
    }
}
