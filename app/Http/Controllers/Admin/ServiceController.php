<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    protected string $view_path = 'admin.services.';
    protected string $base_route = 'admin.services.';
    protected object $model;

    public function __construct(Service $service)
    {
        $this->model = $service;
    }

    public function index()
    {
        $query = $this->model::query();

        if(request()->filled('title')) {
            $query->where('title', 'like', "%". request('title') ."%");
        }
        $services = $query->paginate(config('Reading.nodes_per_page'));

        return view($this->view_path . 'index', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:3',
            'description' => 'required|min:3',
        ]);

        try {
            $this->model->create([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description,
            ]);
            return redirect()->route($this->base_route . 'index')->with('success', 'Services added successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('Sorry, Something went wrong.'));
        }
    }

    public function create()
    {
        $page_title = 'Create Services';
        $screenOption = config('page.ScreenOption');
        return view($this->view_path . 'create', compact('page_title', 'screenOption'));
    }

    public function edit($id)
    {
        $service = $this->model->findOrFail($id);

        return view($this->view_path . 'edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        try {
            $service = $this->model->findorFail($id);
            $service->update($request->all());
            return redirect()->route($this->base_route . 'index')->with('success', 'Services Updated successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('Sorry, Something went wrong.'));
        }
    }

    public function destroy($id)
    {
        try {
            $service = $this->model->findorFail($id);
            $service->delete();
            return redirect()->back()->with('success', 'Services Deleted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('Something went wrong. Please try again.'));
        }
    }
}
