<li>
    <span
        data-app="issue-name"
        @if($issue['status'] === 2)
            style="text-decoration: line-through"
        @endif
    >{{ $issue['name'] }}</span>
    <form action="/todo/delete" method="post">
        @csrf
        <input type="hidden" name="issue_id" required value="{{ $issue['id'] }}">
        <input type="submit" value="delete issue">
    </form>
    @if($issue['status'] === 2)
        <form action="/todo/uncomplete" method="post">
            @csrf
            <input type="hidden" name="issue_id" required value="{{ $issue['id'] }}">
            <input type="submit" value="uncomplete issue">
        </form>
    @else
        <form action="/todo/complete" method="post">
            @csrf
            <input type="hidden" name="issue_id" required value="{{ $issue['id'] }}">
            <input type="submit" value="complete issue">
        </form>
    @endif


</li>
