<div class="modal fade" id="edit_trainee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Trainee</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('trainee.update',$trainee->id) }}" method="POST">
            <div class="modal-body">
                @csrf
                @method('PATCH')
                    <input type="text" name="name" value="{{ $trainee->full_name }}" placeholder="NAME" required>

                    <input type="email" name="email" value="{{ $trainee->email }}" placeholder="EMAIL" required>

                    <input type="address" name="address" value= "{{ $trainee->address }}" placeholder="ADDRESS" required>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Edit Trainee</button>
            </div>
        </form>
      </div>
    </div>
  </div>