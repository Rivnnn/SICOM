<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $services = Service::where('user_id', Auth::id())->get();
        return view('admin.service.index', compact('services'));
    }

    public function create()
    {
        $category = Category::all();
        return view('admin.service.create', compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|integer|exists:category,id',
            'price' => 'required|numeric|min:0',
        ]);

        $service = new Service();
        $service->user_id = Auth::id();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->category_id = $request->category_id;
        $service->price = $request->price;
        $service->save();

        return redirect()->route('admin.service.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        if ($service->user_id !== Auth::id()) {
            abort(403);
        }

        $category = Category::all();
        return view('admin.service.edit', compact('service', 'category'));
    }

    public function update(Request $request, Service $service)
    {
        if ($service->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|integer|exists:category,id',
            'price' => 'required|numeric|min:0',
        ]);

        $service->title = $request->title;
        $service->description = $request->description;
        $service->category_id = $request->category_id;
        $service->price = $request->price;
        $service->save();

        return redirect()->route('admin.service.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        if ($service->user_id !== Auth::id()) {
            abort(403);
        }

        $service->delete();
        return redirect()->route('admin.service.index')->with('success', 'Service deleted successfully.');
    }
}
