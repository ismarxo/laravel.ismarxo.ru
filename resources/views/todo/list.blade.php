<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    @if($issues)
        <ol>
            @foreach($issues as $key => $issue)
                <li>
                    <span data-app="issue-name">{{ $issue['name'] }}</span>
                    <form action="/todo/delete" method="post">
                        @csrf
                        <input type="hidden" name="issue_id" required value="{{ $issue['id'] }}">
                        <input type="submit" value="delete issue">
                    </form>
                </li>
            @endforeach
        </ol>
    @else
        <div>
            You don't have issues
        </div>
    @endif
</div>
