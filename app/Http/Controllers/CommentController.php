<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Komanda;
use App\Models\Speletajs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{
    public function store(Request $request, $type, $id)
    {
        $request->validate([
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->getSize() > 500 * 1024) { // 100KB
                return back()->withErrors(['image' => 'The image size must be less than 100KB.']);
            }
        }

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

            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('images', 'public');
                $comment->image_path = $path;
            }

            $commentable->comments()->save($comment);
        }

        return back();
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);

        if (Auth::id() !== $comment->user_id && !Auth::user()->is_admin) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->getSize() > 100 * 1024) { // 100KB
                return back()->withErrors(['image' => 'The image size must be less than 100KB.']);
            }
        }

        $comment->content = $request->input('content');

        if ($request->hasFile('image')) {
            if ($comment->image_path) {
                Storage::disk('public')->delete($comment->image_path);
            }
            $path = $request->file('image')->store('images', 'public');
            $comment->image_path = $path;
        }

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

        if (Auth::id() !== $comment->user_id && !Auth::user()->is_admin) {
            abort(403, 'Unauthorized action.');
        }

        if ($comment->image_path) {
            Storage::disk('public')->delete($comment->image_path);
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



