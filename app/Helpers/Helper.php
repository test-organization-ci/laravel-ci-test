<?php
namespace App\Helpers;

use DB;

class Helper {
  public static function get_content_category($id) {
    $category = DB::table('categories')->where('id', $id)->first();

    return isset($category->content) ?  $category->content : 'khong co content';
  }
}
?>
