<?php

namespace App\Http\Controllers;

use App\Models\Note;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::query()
            ->where('user_id', request()->user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate(12);
        return view('note.index', ['notes' => $notes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'notedata' => ['required'],
            'title' => ['required'],
        ]);

        $data['user_id'] = $request->user()->id;
        $data['note'] = $data['notedata'];
        unset($data['notedata']);

        // Get first image in content
        $dom = new DOMDocument();
        $dom->loadHTML($data['note']);
        $images = $dom->getElementsByTagName('img');
        $firstImage = null;
        foreach ($images as $image) {
            $src = $image->getAttribute('src');
            if (!empty($src) && is_null($firstImage)) {
                $firstImage = $src;
                break;
            }
        }
        $data['image_description'] = $firstImage;

        $note = Note::create($data);

        return to_route('note.show', $note)->with('message', 'Note was created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        if ($note->user_id !== request()->user()->id) {
            abort(403);
        }
        return view('note.show', ['note' => $note]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        if ($note->user_id !== request()->user()->id) {
            abort(403);
        }
        return view('note.edit', ['note' => $note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        if ($note->user_id !== request()->user()->id) {
            abort(403);
        }

        $data = $request->validate([
            'notedata' => ['required'],
            'title' => ['required'],
        ]);
        $data['note'] = $data['notedata'];
        unset($data['notedata']);

        // Get first image in content
        $dom = new DOMDocument();
        $dom->loadHTML($data['note']);
        $images = $dom->getElementsByTagName('img');
        $firstImage = null;
        foreach ($images as $image) {
            $src = $image->getAttribute('src');
            if (!empty($src) && is_null($firstImage)) {
                $firstImage = $src;
                break;
            }
        }
        $data['image_description'] = $firstImage;

        $note->update($data);

        return to_route('note.show', $note)->with('message', 'Note was updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        if ($note->user_id !== request()->user()->id) {
            abort(403);
        }
        $note->delete();

        return to_route('note.index')->with('message', 'Note was deleted');
    }
}
