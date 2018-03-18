<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Author;
use App\Book;
use App\Magazine;

Route::get('/', function () {
  /*echo "Creating authors";
  if (($handle = fopen ( public_path () . '/Authors.csv', 'r' )) !== FALSE) {
    $guard = 0;
     while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
       //var_dump($data);
       if($guard == 1){
         $author = new Author ();
         $author->emailAdress = $data [0];
         $author->firstname = $data [1];
         $author->lastname = $data [2];
         $author->save ();
       }
       $guard = 1;
     }
     fclose ( $handle );
     echo "authors created";

     echo "Creating books";
     if (($handle = fopen ( public_path () . '/Books.csv', 'r' )) !== FALSE) {
       $guard = 0;
        while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
          //var_dump($data);
          if($guard == 1){
            $book = new Book ();
            $book->title = $data [0];
            $book->isbnNumber = $data [1];
            $book->author = $data [2];
            $book->description = $data [3];
            $book->save ();
          }
          $guard = 1;
        }
        fclose ( $handle );
        echo "books created";

        echo "Creating magazines";
        if (($handle = fopen ( public_path () . '/Magazines.csv', 'r' )) !== FALSE) {
          $guard = 0;
           while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
             //var_dump($data);
             if($guard == 1){
               $magazine = new Magazine ();
               $magazine->title = $data [0];
               $magazine->isbnNumber = $data [1];
               $magazine->author = $data [2];
               $magazine->publicationDate = $data [3];
               $magazine->save ();
             }
             $guard = 1;
           }
           fclose ( $handle );
           echo "magazines created";*/


 });

 Route::resource('authors', 'AuthorController');
 Route::resource('books', 'BookController');
 Route::resource('magazines', 'MagazineController');
