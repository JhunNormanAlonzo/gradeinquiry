<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Models\SchoolYear;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete(Request $request)
    {
        $id = $request->id;
        $page = $request->page;

        if ($page == "users") {
            User::find($id)->delete();
        } elseif ($page == "schoolYears") {
            SchoolYear::find($id)->delete();
        } elseif ($page == "subjects") {
            Subject::find($id)->delete();
        } elseif ($page == "curriculum") {
            Curriculum::find($id)->delete();
        } else {
        }

        return back()->with('success', 'Deleted successfully');
    }
}
