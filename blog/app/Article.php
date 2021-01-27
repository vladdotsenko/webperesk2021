<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
protected $fillable = [
  "text",
  "short_text",
  "author_name"
];
}
