<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Komanda;
use App\Models\Speletajs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CommentController extends Controller
{
    use AuthorizesRequests;

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

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);

        if (Auth::id() !== $comment->user_id && Auth::user()->role_id != 1) {
            abort(403, 'Unauthorized action.');
        }

        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);

        if (Auth::id() !== $comment->user_id && Auth::user()->role_id != 1) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'content' => 'required',
        ]);

        $comment->content = $request->input('content');
        $comment->save();

        if ($comment->commentable_type == 'App\Models\Komanda') {
            return redirect()->route('komandas.show', $comment->commentable_id)->with('success', 'Comment updated successfully.');
        } elseif ($comment->commentable_type == 'App\Models\Speletajs') {
            return redirect()->route('speletaji.show', $comment->commentable_id)->with('success', 'Comment updated successfully.');
        }
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);

        if (Auth::id() !== $comment->user_id && Auth::user()->role_id != 1) {
            abort(403, 'Unauthorized action.');
        }

        $commentable_id = $comment->commentable_id;
        $commentable_type = $comment->commentable_type;
        $comment->delete();

        if ($commentable_type == 'App\Models\Komanda') {
            return redirect()->route('komandas.show', $commentable_id)->with('success', 'Comment deleted successfully.');
        } elseif ($commentable_type == 'App\Models\Speletajs') {
            return redirect()->route('speletaji.show', $commentable_id)->with('success', 'Comment deleted successfully.');
        }
    }
}
