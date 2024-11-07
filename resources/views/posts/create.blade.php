<x-app-layout>
    <h1>Create post</h1>

    <form action="/posts" method="post">
        @csrf
        <label for="title">Title: </label>
        <input type="text" id="title" name="title">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content"></textarea>
        <br>
        <label for="published_at">Published at:</label>
        <input type="text" name="published_at" id="published_at">
        <br>
        <input type="submit" value="Create">
    </form>
</x-app-layout>
