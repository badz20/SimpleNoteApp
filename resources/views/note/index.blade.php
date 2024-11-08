@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-between m-5">
     <h3>List of notes</h3>
    </div>

    <div class="container">
        <div class="card col-md-6">
        <div class="card-body">
        <div>
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
            <div class="d-flex justify-content-end mb-3">
                <a href="" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Create note</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
              @foreach ($notes as $note)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $note->name }}</td>
                        <td>{{ $note->description }}</td>
                        <td>
                            <div class="d-flex justify-content-start gap-2">
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editNoteModal{{ $note->id }}">Edit</button>
                        <form action="{{ route('note.delete', $note->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"">Delete</button>
                        </form>
                            </div>
                        
                        </td>
                    </tr>
                    <!-- Edit note Modal -->
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
                </tbody>
               @endforeach
            </table>
        </div>
        </div>
    </div>

    <!-- Add note Modal -->
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