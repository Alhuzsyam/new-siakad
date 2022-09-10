<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_post = [
        [
            "Title" => "My first blog",
            "contain" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab harum pariatur nobis placeat, qui
            sint ut. A aliquid veniam nulla suscipit, explicabo, soluta labore cumque fugit mollitia ducimus autem! Sint
            placeat impedit corporis sequi debitis commodi deserunt? Ab consequuntur eligendi fuga? Voluptatibus accusamus
            molestiae eligendi corporis? Suscipit, quos. Autem natus consequatur laboriosam soluta, consequuntur in
            voluptatem eius delectus corrupti eos, eum aut. A saepe, quos suscipit voluptatum possimus fugiat numquam
            nesciunt perspiciatis nostrum aliquam necessitatibus fugit pariatur blanditiis sint optio in mollitia quod
            inventore quaerat veniam consequuntur rem. Quis laudantium, ipsa nostrum fugit error blanditiis maxime quas!
            Officiis, impedit exercitationem?"
        ],
        [
            "Title" => "My first blog",
            "contain" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab harum pariatur nobis placeat, qui
            sint ut. A aliquid veniam nulla suscipit, explicabo, soluta labore cumque fugit mollitia ducimus autem! Sint
            placeat impedit corporis sequi debitis commodi deserunt? Ab consequuntur eligendi fuga? Voluptatibus accusamus
            molestiae eligendi corporis? Suscipit, quos. Autem natus consequatur laboriosam soluta, consequuntur in
            voluptatem eius delectus corrupti eos, eum aut. A saepe, quos suscipit voluptatum possimus fugiat numquam
            nesciunt perspiciatis nostrum aliquam necessitatibus fugit pariatur blanditiis sint optio in mollitia quod
            inventore quaerat veniam consequuntur rem. Quis laudantium, ipsa nostrum fugit error blanditiis maxime quas!
            Officiis, impedit exercitationem?"
        ],

    ];

    public static  function all()
    {
        return self::$blog_post;
    }
}
