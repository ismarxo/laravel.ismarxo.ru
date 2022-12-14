<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <form action="/todo/add" method="post">
        @csrf
        <input type="text" name="issue" required>
        <input type="submit" value="add issue">
    </form>
</div>
