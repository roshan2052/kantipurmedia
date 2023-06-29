<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    protected string $view_path = 'admin.testimonials.';
    protected string $base_route = 'admin.testimonials.';
    protected object $model;

    public function __construct(Testimonial $testimonial)
    {
        $this->model = $testimonial;
    }

    public function index()
    {
        $query = $this->model::query();

        if(request()->filled('client_name')) {
            $query->where('client_name', 'like', "%". request('client_name') ."%");
        }
        $testimonials = $query->paginate(config('Reading.nodes_per_page'));

        return view($this->view_path . 'index', compact('testimonials'));
    }

    public function create()
    {
        $page_title = 'Create Testimonials';
        $screenOption = config('page.ScreenOption');
        return view($this->view_path.'create', compact('page_title','screenOption'));
    }


    public function show($id){
        $faq = $this->model->find($id);
        return view($this->view_path.'show', compact('faq'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'client_name' => 'required|string|min:3|max:50',
            'client_designation' => 'required|min:3|max:50',
            'review' => 'required|min:3',
            'company_name' => 'required|min:3|max:50',
            'client_image' => 'nullable|image',
        ]);

        try {
            $this->model->create($validatedData);
            return redirect()->route($this->base_route.'index')->with('success', 'Testimonial added successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('Sorry, Something went wrong.'));
        }
    }

    public function edit($id)
    {
        $faq = $this->model->findOrFail($id);

        return view($this->view_path . 'edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        try {
            $faq = $this->model->findorFail($id);
            $faq->update($request->all());
            return redirect()->route($this->base_route.'index')->with('success', 'Testimonial Updated successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('Sorry, Something went wrong.'));
        }
    }

    public function destroy($id)
    {
        try {
            $faq = $this->model->findorFail($id);
            $faq->delete();
            return redirect()->back()->with('success', 'Testimonial Deleted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('Something went wrong. Please try again.'));
        }
    }
}
