<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Exception;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected string $view_path = 'admin.clients.';
    protected string $base_route = 'admin.clients.';
    protected object $model;

    public function __construct(Client $client)
    {
        $this->model = $client;
    }

    public function index()
    {
        $clients = $this->model::paginate(config('Reading.nodes_per_page'));

        return view($this->view_path . 'index', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|min:3',
            'image' => 'required|image|max:2048',
        ]);

        if($request->image) {
            $OriginalName = $request->image->getClientOriginalName();
            $fileName = time().'_'.$OriginalName;
            $request->image->storeAs('public/clients/', $fileName);
            $request['logo'] = $fileName;
        }

        try {
            $this->model->create([
                'name' => $request->name,
                'logo' => $request->logo,
            ]);
            return redirect()->route($this->base_route . 'index')->with('success', 'Clients added successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('Sorry, Something went wrong.'));
        }
    }

    public function create()
    {
        $page_title = 'Create Clients';
        $screenOption = config('page.ScreenOption');
        return view($this->view_path . 'create', compact('page_title', 'screenOption'));
    }

    public function edit($id)
    {
        $client = $this->model->findOrFail($id);

        return view($this->view_path . 'edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        try {
            $client = $this->model->findorFail($id);
            $client->update($request->all());
            return redirect()->route($this->base_route . 'index')->with('success', 'Clients Updated successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('Sorry, Something went wrong.'));
        }
    }

    public function destroy($id)
    {
        try {
            $client = $this->model->findorFail($id);
            $client->delete();
            return redirect()->back()->with('success', 'Clients Deleted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('Something went wrong. Please try again.'));
        }
    }
}
