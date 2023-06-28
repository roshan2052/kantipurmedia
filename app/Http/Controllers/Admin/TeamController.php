<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        if(request()->filled('member_name')) {
            $query->where('member_name', 'like', "%". request('member_name') ."%");
        }
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
        $team = $this->model->find($id);
        return view($this->view_path.'show', compact('team'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'member_name' => 'required|string|min:2',
            'designation' => 'required|string|min:2',
            'member_info' => 'nullable',
            'image' => 'nullable|image|max:2048',
            'facebook_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'insta_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
        ]);

        try {
            $this->model->create($validatedData);
            return redirect()->route($this->base_route.'index')->with('success', 'Team added successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('Sorry, Something went wrong.'));
        }
    }

    public function edit($id)
    {
        $team = $this->model->findOrFail($id);

        return view($this->view_path . 'edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        try {
            $team = $this->model->findorFail($id);
            $team->update($request->all());
            return redirect()->route($this->base_route.'index')->with('success', 'Team Updated successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('Sorry, Something went wrong.'));
        }
    }

    public function destroy($id)
    {
        try {
            $team = $this->model->findorFail($id);
            $team->delete();
            return redirect()->back()->with('success', 'Team Deleted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('Something went wrong. Please try again.'));
        }
    }
}
