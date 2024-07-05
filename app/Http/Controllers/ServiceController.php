<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $services = Service::all();
        return view('service.index', compact('services'));
    }

    public function show($id){
        $service = Service::find($id);
        $categories = Category::all();
        $users = User::all();
    
        // Populate the form fields with the existing data
        $data = [
            "service" => $service,
            "categories" => $categories,
            "users" => $users,
            "title" => $service->title,
            "description" => $service->description,
            "price" => $service->price,
            "category_id" => $service->category_id,
            "user_id" => $service->user_id,
            "image" => $service->image,
        ];
    
        return view('service.show', $data);
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        if (!$service) {
            return redirect()->route('service.index')->with('error', 'Service not found!');
        }
    
        if (!$service->delete()) {
            return redirect()->route('service.index')->with('error', 'delete service!');
        }
    
        return redirect()->route('service.index')->with('success', 'Service deleted successfully!');

    }

    public function create()
    {
        $categories = Category::all();
        $users = User::all();
        return view('service.create', compact('categories', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'user_id' => ['required', 'string'],
            'title' => ['required'],
            'description' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'price' => ['required'],
            'category_id' => ['required'],
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
    
        Log::info("Image uploaded: $imageName");
        Log::info("Image path: " . public_path('images') . '/' . $imageName);

        $service = new Service();
        $service->user_id = 2;
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->image = 'images/' . $imageName;
        $service->price = $request->input('price');
        $service->category_id = $request->input('category_id');
        $service->save();

        return redirect()->route('service.index')->with('success', 'Service created successfully!');
    }
    
    public function edit($id)
    {
        $service = Service::find($id);
        $categories = Category::all();
        $users = User::all();
    
        // Populate the form fields with the existing data
        $data = [
            "service" => $service,
            "categories" => $categories,
            "users" => $users,
            "title" => $service->title,
            "description" => $service->description,
            "price" => $service->price,
            "category_id" => $service->category_id,
            "user_id" => $service->user_id,
            "image" => $service->image,
        ];
    
        return view('service.edit', $data);
    }

public function update(Request $request, $id)
{
    $service = Service::find($id);

    $service->title = $request->input('title');
    $service->price = $request->input('price');
    $service->description = $request->input('description');

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $service->image = 'images/' . $imageName;
    }

    $service->category_id = $request->input('category_id');
    $service->user_id = $request->input('user_id');
    $service->save();

    return redirect()->route('service.index')->with('success', 'Service berhasil diupdate');
}
    
}