<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $profile = Profile::first();

        
        

        // news/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('profile.index', ['profile' => $profile ]);
    }
    //
}
