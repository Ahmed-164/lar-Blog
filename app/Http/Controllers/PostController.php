<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class PostController extends Controller
{
    

public function __construct(){

    return $this->middleware('auth')->except(['show','detaile']);
}



public function show(){
    $posts =Post::orderBy('id','desc')->paginate(6);
    $number=Post::count();
    return view('posts.index',['posts'=>$posts ,'number'=>$number]);
}

    
public function create(){

return view('posts.createpost');

}

public function store(Request $request){

$request->validate([
'title'=>'required|max:100',
'content'=>'required|max:700',
'image'=>'image|mimes:jpeg,jpg,png|max:1999',
]);

if($request->hasFile('image')){
    $file=$request->file('image');
    $ext=$file->getClientOriginalExtension();
    $image_name=time().'.'.$ext;
    $file->storeAs('public/images/',$image_name);

}
else{
    $image_name='no-image.png';
}
$user_id=auth()->user()->id;
$post = new Post();
$post->title=$request->title;
$post->content=$request->content;
$post->image=$image_name;
$post->user_id=$user_id;

$post->save();
return redirect()->route('home')->with('status','Your Post Added Succssfully');


}

public function detaile($id){
    $post =Post::where('id',$id)->first();

    return view('posts.postdetaile',['post'=>$post]);
}

public function destroy($id){
    $post = Post::find($id);
    $post->delete();
    return redirect()->route('home')->with('status','your post is deleted succssfully');

}
public function edit($id){
    $post=Post::find($id);
    if($post->user_id !=auth()->user()->id){
        return redirect('/')->with('error','Your are not authenticated to edit this post');
    }
    return view('posts.editpost',['post'=>$post]);
}


public function update($id ,Request $request){

    $request->validate([
        'title'=>'required|max:100',
        'content'=>'required|max:700',
        'image'=>'image|mimes:jpeg,jpg,png|max:1999',
        ]);
        
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $image_name=time().'.'.$ext;
            $file->storeAs('public/images/',$image_name);
        
        }
        else{
            $image_name='no-image.png';
        }
        $user_id=auth()->user()->id;
        $post =Post::find($id);
        $post->title=$request->title;
        $post->content=$request->content;
        $post->image=$image_name;
        $post->user_id=$user_id;
        $post->save();
        return redirect()->route('home')->with('status','Your Post Updated Succssfully');



}


}
