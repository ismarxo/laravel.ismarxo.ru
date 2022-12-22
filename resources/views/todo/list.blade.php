<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    @if($issues)
        <ol>
            @foreach($issues as $key => $issue)
                @include('todo.issue', [$key, $issue])
            @endforeach
        </ol>
    @else
        <div>
            You don't have issues
        </div>
    @endif
</div>
