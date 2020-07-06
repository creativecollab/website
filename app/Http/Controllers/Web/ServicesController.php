<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{

  public function sites()
  {
    return view('web.sites');
  }

  public function blogs()
  {
    return view('web.sites');
  }

  public function ecommerce()
  {
    return view('web.sites');
  }

  public function web()
  {
    return view('web.sites');
  }
}
