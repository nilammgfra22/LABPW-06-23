<?php

namespace App\Models;

class post
{
  private static $blog_posts = [
    [
      "title" => "Judul Post Pertama",
      "slug" => "judul-post-pertama",
      "author" => "Syifa Ur Rahmi",
      "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt praesentium libero similique perferendis dolorum, 
        inventore asperiores dicta sapiente deleniti commodi beatae nulla vitae alias eaque delectus obcaecati rerum nostrum nihil veniam. 
        Distinctio possimus ut enim doloremque, voluptates molestiae quam? Numquam sequi explicabo consequatur, at dicta non totam corrupti 
        temporibus accusamus quod possimus, ipsa, praesentium laboriosam repellendus provident? Placeat aperiam exercitationem modi eaque? 
        Quam suscipit unde placeat? Laborum in, ab nemo omnis, quaerat molestiae a ratione animi amet fuga expedita beatae."
    ],
    [
      "title" => "Judul Post Kedua",
      "slug" => "judul-post-kedua",
      "author" => "Zakiah Fitri",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur vero exercitationem suscipit doloribus earum 
        laudantium sint non blanditiis ducimus id ullam voluptatem iure, illum sapiente aliquam omnis. Amet laboriosam ex soluta! 
        Omnis eveniet deleniti unde, alias nobis aliquam ea, neque magnam quibusdam expedita asperiores sint non minima dolores vero 
        hic enim fugiat ipsam! Delectus voluptate est voluptates accusamus quibusdam ipsum dolores sequi fugit facere aliquam sint ipsam 
        debitis, rem sed, velit commodi repellat dolor ullam quisquam. Totam, illo ipsum iusto, animi veritatis culpa quaerat explicabo 
        itaque alias provident aspernatur unde dolor! Fugit nostrum itaque iure, quod tempore delectus esse consequatur eveniet totam 
        voluptatum, nobis adipisci fuga ratione modi! Voluptates, accusamus! Amet iure et soluta dicta accusantium accusamus, esse omnis 
        alias animi unde eius molestiae laborum ex dolores a officiis exercitationem voluptas sit in nemo rem reiciendis. Suscipit qui 
        atque quo. Iure delectus ratione saepe eum porro autem qui consequatur asperiores."
    ]
  ];

  public static function all()
  {
    return collect(self::$blog_posts);
  }

  public static function find($slug)
  {
    $posts = static::all();
    // $post = [];
    // foreach ($posts as $p) {
    //   if ($p["slug"] === $slug) {
    //     $post = $p;
    //   }
    // }
    return $posts->firstWhere('slug', $slug);
  }
}
