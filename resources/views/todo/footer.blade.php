<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <form action="/todo/delete/all" method="post">
        @csrf
        <input type="submit" value="clear all">
    </form>
</div>
