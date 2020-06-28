<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
  public function home()
  {
    return view('web.home');
  }

  public function about()
  {
    return view('web.about');
  }

  public function services()
  {
    return view('web.services');
  }  public function development()
  {
    return view('web.development');
  }
  public function seo()
  {
    return view('web.development');
  }

  public function sites()
  {
    return view('web.sites');
  }


  public function contact()
  {
    return view('web.contact');
  }
}
