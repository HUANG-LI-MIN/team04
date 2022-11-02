<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return redirect('brand');
    }
}
