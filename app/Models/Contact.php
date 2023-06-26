<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public static $contact;

    public static function newContact($request): void
    {
        self::$contact = new self();
        self::$contact->first_name = $request->first_name;
        self::$contact->last_name = $request->last_name;
        self::$contact->email = $request->email;
        self::$contact->city = $request->city;
        self::$contact->contact_number = $request->contact_number;
        self::$contact->company_name = $request->company_name;
        self::$contact->designation = $request->designation;
        self::$contact->message = $request->message;
        self::$contact->save();
    }
}
