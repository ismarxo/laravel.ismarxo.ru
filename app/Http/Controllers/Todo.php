<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issue;

class Todo extends Controller
{
    public function createIssue(Request $request)
    {
        $issue = new Issue;
        $issue->name = $request->issue ? $request->issue : 'NO TITLE';
        $issue->created_by_user = 1;
        $issue->assigned_to_user = 1;
        $issue->save();


        return redirect('/todo');
}

    public function getIssuesAssignedByUserId(Request $request)
    {
        $user_id = 1; #TODO add user_id from request or from controller
        $issues = Issue::where('assigned_to_user', '=', $user_id)->get();
        $data['issues'] = [];
        foreach ($issues as $item) {
            $data['issues'][] = $item->getAttributes();
        }

        return view('todo', $data);
    }

    public function deleteIssue(Request $request)
    {
        $user_id = 1; #TODO add user_id from request or from controller
        if($request->issue_id) {
            $issue_id = $request->issue_id;
            $issue = Issue::find($issue_id);
            $issue->delete();
        }


        return redirect('/todo');
    }
}
