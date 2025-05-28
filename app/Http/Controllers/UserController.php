<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
        public function index()
    {
        // $users = DB::table('users')->get();
        // $user = DB::table('users')->where('name', 'Caleigh White')->first();
        // $user = DB::table('users')->where('name', 'John')->firstOrFail();
        // $email = DB::table('users')->where('name', 'Caleigh White')->value('email');
        // $user = DB::table('users')->find(3);
        // $titles = DB::table('users')->pluck('email');
//  $titles = DB::table('users')->pluck('email', 'name');
// foreach ($titles as $name => $title) {
//     echo $title."</br>";
// }
        return $titles;
    }
}
