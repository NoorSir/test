<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Mail\ContactMail;
use Mail;

class contact extends Model
{
    use HasFactory;
    protected $table = 'contact';
    public $fillable=['name', 'email','subject','message'];
    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "umairallahrakha590@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
