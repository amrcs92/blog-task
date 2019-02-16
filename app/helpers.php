<?php 

use Illuminate\Support\Facades\DB;

// helper function for getting all categories
if(!function_exists('getPostCategories')){
    function getPostCategories(){
        $postCategories = DB::table('categories')->get();
        return $postCategories;
    }
}