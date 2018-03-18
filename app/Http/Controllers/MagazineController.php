<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Magazine;

class MagazineController extends Controller
{
  function compare_title($a, $b)
  {
    return strnatcmp($a['title'], $b['title']);
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $result = DB::table('magazines')
                ->orderByRaw('title ASC')
                ->get();

      return $result;
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      echo "authors created";
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
      //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($isbnOrAuthororTitle)
  {
    $books = DB::table('magazines')
                    ->where('isbnNumber', $isbnOrAuthororTitle)
                    ->orWhere('author', $isbnOrAuthororTitle)
                    ->orWhere('title', $isbnOrAuthororTitle)
                    ->get();
      return $books;
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      //
  }
}
