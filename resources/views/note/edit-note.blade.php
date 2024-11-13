<form action="{{ route('note.update', $note->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Title</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $note->name }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ $note->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-success">Update Note</button>
</form>