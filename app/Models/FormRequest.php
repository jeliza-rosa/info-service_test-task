<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormRequest extends Model
{
    use HasFactory;

    static public function validate()
    {
        $attributes = request()->validate([
            'name' => 'required|min:2|max:30',
            'phone' => 'required|regex:/\+?([0-9]{2})-?([0-9]{3})-?([0-9]{6,7})/',
            'company' =>'required|min:2|max:100',
            'name_application' => 'required|min:2|max:60',
            'message' => 'required|min:5|max:500',
            'file' => 'required',
        ]);

        $attributes['owner_id'] = auth()->id();

        return $attributes;
    }
}
