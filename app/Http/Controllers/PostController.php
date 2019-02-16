<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // read all created posts
    public function viewAllPosts(){
        $posts = Post::All();
        return view('posts')->with('posts', $posts);
    }

    //---- Admin area only ----\\

    // create post, beside creating post (title & description): 
    // retreive post categories to insert category id
    public function showPostForm(){
        if(Auth::user()->role_id == 2){
            $postCategories = Category::All();
            return view('add_post')->with('postCategories', $postCategories);
        } else{
            return view('/access_denied');
        }
    }

    public function createPost(Request $input){
        if(Auth::user()->role_id == 2){
            $post = new Post();
            $post->title = $input->title;
            $post->description = $input->description;
            $post->category_id = $input->category_id;
            $post->save();
            return redirect('add_post');
        } else{
            return view('/access_denied');
        }        
    }

    // Post category form
    public function showPostCategoryForm(){
        if(Auth::user()->role_id == 2){
            return view('add_post_category');
        } else{
            return view('/access_denied');
        }    
    }

    // create post category

    public function createPostCategory(Request $input){
        if(Auth::user()->role_id == 2){
            $category = new Category();
            $category->name = $input->category;
            $category->save();
            return redirect('add_category');
        } else{
            return view('/access_denied');
        }  
    }

    public function editPostForm($postId){
        if(Auth::user()->role_id == 2 && Post::findOrFail($postId)){
            $post = Post::where('id', $postId)->get();
            return view('edit_post')->with('post', $post);            
        } else{
            return view('access_denied');
        }
    }

    public function editCategoryForm($categoryId){
        if(Auth::user()->role_id == 2 && Category::findOrFail($categoryId)){
            $category = Category::where('id', $categoryId)->get();
            return view('edit_category')->with('category', $category);
        } else{
            return view('access_denied');
        }
    }
    
    public function updatePost(Request $input, $postId){        
        if(Auth::user()->role_id == 2){
            $post = Post::where('id', $postId)->update([
                'title' => $input->title,
                'description' => $input->description
            ]);            
            return redirect('edit/post/'.$postId);
        } else{
            return view('access_denied');
        }
    }

    public function deletePost(Request $input){   
        if(Auth::user()->role_id == 2){
            $post = Post::where('id', $input->id)->delete();
            return redirect('posts');        
        } else{
            return view('access_denied');
        }
        
    }
    //---- End Admin area ----\\

    public function showAllCategories(){
        $categories = Category::All();
        return view('categories')->with('categories', $categories);
    }

    public function getCategoryId($catId){
        $postsCategory = Post::where('category_id', $catId)->get();
        return view('category')->with('postsCategory', $postsCategory);
    }

    public function getPostById($postId){
        $post = Post::where('id', $postId)->get();
        return view('post_details')->with('post', $post);
    }


}
