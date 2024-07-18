<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MailController;
use App\Jobs\SendEmail;
use App\Jobs\SendOtp;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function testmail(Request $request)
    {
        $faker = \Faker\Factory::create();
        $users = new User();
        $users->name = $faker->name;
        $users->email = $faker->email;
        $users->password = $faker->password;
        $users->save();
        Log::info("User Created : " . $users);
        dispatch(new SendEmail($users));
        dispatch(new SendOtp($users))->onQueue("high");
        return "Mail Sent";
    }

    public function staging()
    {
        try {
            $users = DB::table("tenants")->limit(10)->get();
            return json_encode(array(
                "status" => "success",
                "data" => $users
            ));
        } catch (Exception $e) {
            return json_encode(array(
                "status" => "error",
                "message" => $e->getMessage()
            ));
        }
    }
}
