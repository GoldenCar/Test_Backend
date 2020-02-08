<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Member;


class MemberController extends Controller
{
    //
    public function create (Request $request) {
        $avatarFile = $request->file('avatar_file');
        $filename = "avatar". (microtime(true) * 10000);
        Storage::disk('local')->putFileAs(
            'files/avatar',
            $avatarFile,
            $filename
        );
        
        $newMember = $request->all();
        $newMember["avatar"] = $filename;
        $member = Member::create($newMember);
        

        return json_encode(["status" => true, "data" => $member]);
    }
}
