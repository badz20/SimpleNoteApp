@extends('layout.app')

@section('content')
<div class="container d-flex justify-content-center">
<div class="card w-75 ">
    <div class="card-body">
    <div  class="w-50">
            @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
      @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
        </div>
    <div class="container d-flex justify-content-between align-items-center gap-3">
        
     <h3>List of notes</h3>
     <div class="d-flex justify-content-end">
                <a href="" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add notes</a>
            </div>
    </div>

    <div class="notes-container">
        @foreach ($notes as $note)
            <div class="note-card">
            {{ $loop->iteration }}
            <div class="d-flex justify-content-start gap-2">
            
                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editNoteModal{{ $note->id }}"> <i class="fas fa-pencil"></i></button>
                        <form action="{{ route('note.delete', $note->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                        </div>
                <h3>{{ $note->name }}</h3>
                <p>{{ Str::limit($note->description, 100) }}</p>
                
            </div>

            <div class="modal fade" id="editNoteModal{{ $note->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit notes</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                            <form  action="{{ route('note.edit', $note->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{ $note->name }}">
                            </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Description">{{ $note->description }}</textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" id="noteForm" class="btn btn-success">Create note</button>

                        </div>
                            </form>
                    </div>
                    </div>
                </div>
                </div>
        @endforeach
    </div>

    </div>
</div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add notes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
            <form  action="{{ route('note.create') }}" method="POST">
                @csrf
                @method('POST')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name">
            </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Description"></textarea>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" id="noteForm" class="btn btn-success">Create note</button>

        </div>
            </form>
      </div>
    </div>
  </div>
</div>



@endsection