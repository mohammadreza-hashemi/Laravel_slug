<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
   public function show($slug){
//       return Post::findOrFail($id);
       return Post::whereSlug($slug)->firstOrFail();
       
 }
  public function create(){
      return view('posts.create');
  }
  public function store(Request $request){
      $post =new Post;
      $post->title= $request->title;
      $post->body= $request->body;
      $post->slug= str_slug($request->title);
      
//      $slug= str_slug($request->title);
      $i=1;//n+1 problem
      While(Post::whereSlug($post->slug)->exists()){
          $post->slug = str_slug($request->title).'-'.$i++;
      }
      

                  //select * form post where  Rlike create regular exeption
//      $count=Post::whereRaw("slug RLIKE '^{$slug}(-[0-9]*)?$'")->count();
//      if($count){
//          $post->slug="{$slug}-{$count}";
//      }else{
//           $post->slug=$slug;
//      }
      
      
      
//      $latestslug=Post::whereRaw("slug RLIKE '^{$slug}(-[0-9]*)?$'")
//             ->orderBy('id' ,'ASC')                 // ==== ->latest('id')//اخرین بر اساس ای دی
////           ->first();
//             ->pluck('slug');
//      if($latestslug){
//          $pieces= explode('-',$latestslug);
//          $number=intval(end($pieces));
//          $post->slug .= '-'.($number +1);
//      }
      
                          
      
      
      
      $post->save();
      
      return $post;
  }
}
