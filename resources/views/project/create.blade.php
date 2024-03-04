<form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="title">Project Title:</label>
    <input type="text" name="title" required>

    <label for="images">Project Images:</label>
    <input type="file" name="images[]" accept="image/*" multiple>

    <button type="submit">Submit</button>
</form>
