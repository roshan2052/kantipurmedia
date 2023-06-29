<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Exception;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    protected string $view_path = 'admin.about_us.';
    protected string $base_route = 'admin.about_us.';
    protected object $model;

    public function __construct(AboutUs $aboutUs)
    {
        $this->model = $aboutUs;
    }

    public function create()
    {
        if($aboutUs = $this->model::first()){
            return redirect()->route($this->base_route . 'edit', $aboutUs->id);
        }
        $page_title = 'Create About Us';
        $screenOption = config('page.ScreenOption');
        return view($this->view_path . 'create', compact('page_title', 'screenOption'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_title' => 'required|string|min:2',
            'first_content' => 'required',
            'second_title' => 'required|string|min:2',
            'second_content' => 'required',
            'third_title' => 'required|string|min:2',
            'third_content' => 'required',
            'fourth_title' => 'required|string|min:2',
            'fourth_content' => 'required',
            'description' => 'required'
        ]);

        try {
            $aboutUs = $this->model->create($validatedData);
            return redirect()->route($this->base_route . 'edit', $aboutUs->id)->with('success', 'About Us added successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('Sorry, Something went wrong.'));
        }
    }

    public function edit($id)
    {
        $aboutUs = $this->model->findOrFail($id);

        return view($this->view_path . 'edit', compact('aboutUs'));
    }

    public function update(Request $request, $id)
    {
        try {
            $aboutUs = $this->model->findorFail($id);
            $aboutUs->update($request->all());
            return redirect()->back()->with('success', 'About Us Updated successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('Sorry, Something went wrong.'));
        }
    }

}
