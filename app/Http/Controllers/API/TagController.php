<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;
use App\Http\Resources\Tag as TagResource;

class TagController extends Controller
{
    public function index(){

        $tag = Tag::all();

        return TagResource::collection($tag);

    }
}
