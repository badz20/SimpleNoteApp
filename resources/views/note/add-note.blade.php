<form action="{{ route('note.create') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Title</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Create Note</button>
</form>
