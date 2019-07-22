<?php

namespace [[appns]]Http\Controllers;

use Illuminate\Http\Request;

use [[appns]]Http\Requests;
use [[appns]]Http\Controllers\Controller;

use [[appns]][[model_uc]];

use DB;

class [[controller_name]]Controller extends Controller
{
  //
  public function __construct()
  {
    //$this->middleware('auth');
  }


  public function index()
  {

   $indexes = [[model_uc]]::paginate(30);

    return view('[[view_folder]].index')->with(compact('indexes'));
  }

  public function create(Request $request)
  {
    return view('[[view_folder]].add');
  }

  public function edit(Request $request, $id)
  {
    $edit = [[model_uc]]::findOrFail($id);
    return view('[[view_folder]].edit')->with(compact('edit'));

  }

  public function show(Request $request, $id)
  {
    $show = [[model_uc]]::findOrFail($id);
    return view('[[view_folder]].show')->with(compact('show'));
  }


public function store(Request $request)
{
  $store = null;
  if($request->id > 0) { 
  $store = [[model_uc]]::find($request->id); 
  $store->id = $request->id;
    [[foreach:columns]]
      $store->[[i.name]] = $request->[[i.name]];
     [[endforeach]]
      $store->save();
    }
  else {
      $store = new [[model_uc]];
      
      [[foreach:columns]]
      $store->[[i.name]] = $request->[[i.name]];
      [[endforeach]]
      $store->save();

}
        return redirect('/[[route_path]]');
}
public function destroy(Request $request, $id) {

  $destroy = [[model_uc]]::findOrFail($id);

  $destroy->delete(); 
  return redirect('/[[route_path]]');
}


}
