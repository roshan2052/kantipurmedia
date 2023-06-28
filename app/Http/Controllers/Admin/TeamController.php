<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Team;
use App\Models\Testimonial;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    protected string $view_path = 'admin.teams.';
    protected string $base_route = 'admin.teams.';
    protected object $model;

    public function __construct(Team $team)
    {
        $this->model = $team;
    }

    public function index()
    {
        $query = $this->model::query();

        $teams = $query->paginate(config('Reading.nodes_per_page'));

        return view($this->view_path . 'index', compact('teams'));
    }

    public function create()
    {
        $page_title = 'Create Teams';
        $screenOption = config('page.ScreenOption');
        return view($this->view_path.'create', compact('page_title','screenOption'));
    }


    public function show($id){
        $faq = $this->model->find($id);
        return view($this->view_path.'show', compact('faq'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        try {
            $this->model->create([
                'question' => $request->question,
                'answer' => $request->answer,
                'is_active' => $request->is_active ?? 1,
            ]);
            return redirect()->route($this->base_route.'index')->with('success', 'Faq added successfully.');
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
            return redirect()->route($this->base_route.'index')->with('success', 'Faq Updated successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('Sorry, Something went wrong.'));
        }
    }

    public function destroy($id)
    {
        try {
            $faq = $this->model->findorFail($id);
            $faq->delete();
            return redirect()->back()->with('success', 'Faq Deleted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('Something went wrong. Please try again.'));
        }
    }
}
