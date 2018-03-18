<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;

class BookController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $result = DB::table('books')
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
      echo "Create not avalaible";
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
      echo "Store not avalaible";
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($isbnOrAuthororTitle)
  {
    $books = DB::table('books')
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
      echo "Edit not avalaible";
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
      echo "Update not avalaible";
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      echo "Destroy not avalaible";
  }
}
