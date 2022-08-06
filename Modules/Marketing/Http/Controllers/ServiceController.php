<?php

namespace Modules\Marketing\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Marketing\Entities\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('marketing::service.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('marketing::service.create');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('marketing::service.edit', [
            'service' => $service,
        ]);
    }
}