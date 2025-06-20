<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function signup(Request $request){
        //Validation...
        $request->validate([
            


        ]);

        //   ***For Unique Userid***


        $lastuser = User::orderBy('id','desc')->first();  // Find last 'id' in a table
        // Extract number part (you can also use user id)
        $number = $lastuser->id + 1000 ; // Add 1000 to last table 'id'

        // 2. Create full userid
        $userid = 'IRCTC' . $number;    // ex:- IRTCT1001
        
        // Insert into Table...
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->userid = $userid;
        
        $user->save();
        if($user){
            return "Signup Successfully!!!";
        }

    }


}
