<?php       

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{
    public function tmpFunction()
    {
        return 'We are inside of tmpFunction';
    }
}