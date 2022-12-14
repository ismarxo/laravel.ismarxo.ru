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
        $issue->status = 1;
        $issue->created_by_user = 1;
        $issue->assigned_to_user = 1;
        $issue->save();

        return redirect('/todo');
    }

    public function simpleCompleteOfIssue(Request $request)
    {
        $request->status = 2;
        $this->switchStatusOfIssue($request);
        return redirect('/todo');
    }

    public function simpleUncompleteOfIssue(Request $request)
    {
        $request->status = 1;
        $this->switchStatusOfIssue($request);
        return redirect('/todo');
    }

    public function switchStatusOfIssue(Request $request)
    {
        $issueId = $request->issue_id;
        $statusId = $request->status;
        $issue = Issue::find($issueId);
        $issue->status = $statusId;
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

    public function deleteAllIssues(Request $request)
    {
        $user_id = 1; #TODO add user_id from request or from controller
        $issue = Issue::where('created_by_user', $user_id);
        $issue->delete();

        return redirect('/todo');
    }
}
