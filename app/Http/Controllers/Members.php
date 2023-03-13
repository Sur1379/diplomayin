<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Members extends Controller
{
    public function members() {
        $members = \App\Models\Members::query()->get();
        return view('usanoxner', ['members' => $members]);
    }

    public function profile($id) {
        $member = \App\Models\Members::query()->where('id', $id)->first();
        $firstName = $member->first_name;
        $lastName = $member -> last_name;
        $imageUrl= $member -> image_url;
        $faculty = $member -> faculty;
        $dob = $member -> dob;
        $email = $member -> email;
        $phoneNumber = $member -> phone_number;
        $address = $member -> address;

        return view('profile',  compact('firstName','lastName','faculty','dob','email','phoneNumber','address','imageUrl'));
    }
}
