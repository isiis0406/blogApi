<?php

namespace App\Http\Controllers\api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return  $posts = Post::orderByDesc('id')->get();
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'img' => 'image|mimes:png,jpg,jpeg'
         ]);
       
        if($request->hasFile('img')){
         $path =$request->file('img')->store('posts');
        }else{
         $path = null;
        }
        
       if( Post::create([
         'title' => $request->title,
         'content' => $request->content,
         'author' => $request->author,
         'img' => $path
       ])){
         return response()->json([
            'status' => true,
            'message' => 'successfully, post ajouté',

         ], 200);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
       return $post;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
         // Validate datas
         $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'img' => 'image|mimes:png,jpg,jpeg'
         ]);

         // new image treatment
         if($request->hasFile('img')){
            // Delete the old image
            if(Storage::exists($post->img)){
               Storage::delete($post->img);
               // Store the new image to the storage path
               $path =$request->file('img')->store('posts');

               // Store the news datas 
               if( $post->update([
                  'title' => $request->title,
                  'content' => $request->content,
                  'author' => $request->author,
                  'img' => $path
               ]
               )){
                  // & return a response
                  return response()->json([
                     'status' => true,
                     'message' => 'successfully, post édité',
         
                  ], 200);
                }
             }
           }else{
            //Store the updated datas
            if( $post->update([
               'title' => $request->title,
               'content' => $request->content,
               'author' => $request->author,
            ]
            )){
               // & return a response
               return response()->json([
                  'status' => true,
                  'message' => 'successfully, post édité',
      
               ], 200);
             }
           }
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      // Delete the old image
      if(Storage::exists($post->img)){
         Storage::delete($post->img);
       }
       // Delete the post
      if( $post->delete()){
         // & return response
         return response()->json([
            'status' => true,
            'message' => 'successfully, post supprimé',

         ], 200);
       }
        
    }
}
