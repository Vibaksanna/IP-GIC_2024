<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
         // Validate the request        
         $request->validate([            
            'document' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',        
        ]);

        // Store the file        
        $path = $request->file('document')->store('uploads');

        // Return a response        
        return response()->json(['path' => $path], 200);
    }
    
    public function store(Request $request) 
    {    
        $request->validate([        
            'image' => 'required|image|max:2048' // Validation rules for upload    
        ]);    
        
        $image = $request->file('image');    
        $fileName = uniqid() . '.' . $image->getClientOriginalExtension(); // G  

        $path = $image->storeAs('uploads', $fileName); // Store the original im 

        return redirect()->route('gallery.index')->with('success', 'Image uploaded successfully!');    
    }    
    
    public function destroy($id) 
    {        
        $image = Image::findOrFail($id);        
        Storage::delete($image->path);        
        $image->delete();        
        return redirect()->route('gallery.index')->with('success', 'Image deleted successfully!');    
    }    
    
    public function show($id) {        
        $image = Image::findOrFail($id);        
        return view('gallery.show', compact('image')); 
    }
}
