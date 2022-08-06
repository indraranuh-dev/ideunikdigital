<?php

namespace Modules\Marketing\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Marketing\Entities\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('marketing::team.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('marketing::team.create');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('marketing::team.edit', [
            'team' => $team,
        ]);
    }
}