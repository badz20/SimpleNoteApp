@extends('layouts.app')

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
     <a href="javascript:void(0)" type="button" class="btn btn-primary" onclick="openModal('add')">Add notes</a>

            </div>
    </div>

    <div class="notes-container">
        @foreach ($notes as $note)
            <div class="card note-card col-md-5" >
                <div class="card-body">
                {{ $loop->iteration }}.  
            <div class="d-flex justify-content-start gap-2">
            
            <button type="button" class="btn btn-warning btn-sm" onclick="openModal('edit', {{ $note->id }})">
                <i class="fas fa-pencil"></i>
            </button>                        
            <form action="{{ route('note.delete', $note->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                        </div>
                <h3>Title: {{ $note->name }}</h3>
                <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>{{ $note->description }}</textarea>
</div>
      
                

                <div class="remarks">
            <h5 style="text-decoration: underline;">Remarks:</h5>
            <div  style="height: 100px; overflow-y: scroll;">
                 @foreach ($note->remarks as $remark)
                <div class="remark">
                    <strong>{{ $remark->user->name }}:</strong> {{ $remark->remark }}
                </div>
            @endforeach
            </div>
           
        </div>
        <form action="{{ route('remark.store', $note->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="remark" class="form-label">Add a remark</label>
                <textarea class="form-control" name="remark" id="remark" rows="2" required></textarea>
            </div>
            <button type="submit" class="btn btn-secondary">Add Remark</button>
        </form>
                </div>
            
                
            </div>

            
        @endforeach
    </div>

    </div>
</div>
</div>


<div class="modal fade" id="ajaxModal" tabindex="-1" aria-labelledby="ajaxModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ajaxModalLabel">Modal Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="ajaxModalContent">
                
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script>
function openModal(action, noteId = null) {
    let url = '';
    if (action === 'edit' && noteId) {
        console.log('edit note');
        url = '{{ route('note.edit', ':id') }}'.replace(':id', noteId);

    } else if (action === 'add') {
        console.log('Add note');
        url = '{{ route('note.add') }}';
    }

    console.log('Request URL:', url);

    $.ajax({
        url: url,
        method: 'GET',
        success: function(response) {
            $('#ajaxModalContent').html(response);
            $('#ajaxModal').modal('show');
        },
        error: function(xhr) {
            console.error('Failed to load modal content:', xhr);
        }
    });
}

</script>
@endsection