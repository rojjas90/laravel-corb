<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Todo;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $user = Auth::user();

    $user->load('collaboratingTodos','ownerTodo');

        return view('index',compact('user'));
  }
}
