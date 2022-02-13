<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Trainee</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('trainee.store') }}" method="POST">
            <div class="modal-body">
                @csrf
                    <input type="text" name="name" placeholder="NAME" required>

                    <input type="email" name="email" placeholder="EMAIL" required>

                    <input type="address" name="address" placeholder="ADDRESS" required>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add Trainee</button>
            </div>
        </form>
      </div>
    </div>
  </div>