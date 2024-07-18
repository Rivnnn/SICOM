<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;    
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('user_id', Auth::id())->get();
        return view('seller.services.index', compact('services'));
    }

    public function create()
    {
        $category = Category::all();
        return view('seller.services.create',compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            // 'image' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
        ]);

        // $image = $request->file('image');
        // $imageName = time() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('images'), $imageName);
    
        // Log::info("Image uploaded: $imageName");
        // Log::info("Image path: " . public_path('images') . '/' . $imageName);

        // $imagePath = 'images/' . $imageName;
        Service::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            // 'image' =>  $request->$imagePath,
            'category_id' => $request->category_id,
            'price' => $request->price,
        ]);

        return redirect()->route('seller.services.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        // $this->authorize('update', $service);
        $category = Category::all();
        return view('seller.services.edit', compact('service','category'));
    }

    public function update(Request $request, Service $service)
    {
        if ($service->user_id !== Auth::id()) {
            abort(403);
        }
        // $this->authorize('update', $service);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
        ]);

        // $image = $request->file('image');
        // $imageName = time() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('images'), $imageName);
    
        // Log::info("Image uploaded: $imageName");
        // Log::info("Image path: " . public_path('images') . '/' . $imageName);

        // $imagePath = 'images/' . $imageName;
        $service->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            // 'image' => $imagePath,
            'price' => $request->price,
        ]);

        return redirect()->route('seller.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $this->authorize('delete', $service);
        $service->delete();
        return redirect()->route('seller.services.index')->with('success', 'Service deleted successfully.');
    }
}
