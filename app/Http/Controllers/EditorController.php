<?php

namespace App\Http\Controllers;

use App\Models\Bundle;
use App\Models\Resource;
use Laravel\Lumen\Routing\Controller as BaseController;

class EditorController extends BaseController
{
    /**
     * Display the editor view
     * @param string $bundle
     * @param string $resource
     * @return \Illuminate\View\View
     */
    public function index($bundle, $resource)
    {
        $bundle = Bundle::find($bundle);
        $resource = Resource::find($resource, $bundle);

        return view('editor.index', ['bundle' => $bundle, 'resource' => $resource]);
    }
}