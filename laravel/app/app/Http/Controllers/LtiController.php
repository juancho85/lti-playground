<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LtiController extends Controller
{
    protected $lti;


    public function __construct()
    {
        include(app_path() . '/functions/ims/blti.php');

        $this->lti = is_basic_lti_request();
//        $this->lti = new BLTI("secret", false, false);
    }


    public function launch(): View
    {
        if($this->lti) {
            return view('lti.launch');
        } else {
            return view('welcome');
        }


    }
}
