<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function getAllPost(){

        $respones = Http::get('http://jsonplaceholder.typicode.com/posts');
        return $respones->json();
    }



    public function addPost(){
        $respones =Http::post('http://jsonplaceholder.typicode.com/posts',[
           'userId' =>1,
           'title'=>'New Post',
           'body'=>'New Post Description'
        ]);
        return $respones->json();
    }


    public function updatePost($id){
        $respones =Http::put('http://jsonplaceholder.typicode.com/posts/'.$id,[
            'title'=>'Update Post',
            'body'=>'Update Post Description'
        ]);
        return $respones->json();
    }
    public function deletePost($id){
        $respones =Http::delete('http://jsonplaceholder.typicode.com/posts/'.$id);
        return $respones->json();
    }




    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
