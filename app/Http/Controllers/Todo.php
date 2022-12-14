<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issue;

class Todo extends Controller
{
    public function createIssue(Request $request)
    {
        $issue = new Issue;
        $issue->name = $request->name ? $request->name : 'NO TITLE';
        $issue->created_by_user = 1;
        $issue->assigned_to_user = 1;
        $issue->save();

        return redirect('/todo');
}

    public function getIssuesAssignedByUserId(Request $request)
    {
        $issues = Issue::where('assigned_to_user', '=', 1)->get();
        $data = ['issues' => $issues];
        return view('todo', $data);
    }
}
