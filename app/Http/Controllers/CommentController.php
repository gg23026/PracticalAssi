<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Komanda;
use App\Models\Speletajs;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $type, $id)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $commentable = null;

        if ($type == 'komanda') {
            $commentable = Komanda::find($id);
        } elseif ($type == 'speletajs') {
            $commentable = Speletajs::find($id);
        }

        if ($commentable) {
            $comment = new Comment();
            $comment->content = $request->input('content');
            $comment->user_id = Auth::id();
            $commentable->comments()->save($comment);
        }

        return back();
    }
}





