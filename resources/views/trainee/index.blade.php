@extends('layouts.app')

@section('content')
@include('trainee.create_modal')

<div class="container">
    <br>
    <h3>Trainee Management</h3>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Trainee
      </button>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($getTrainee as $getTrainee)
            <tr>
                <th scope="row">{{ $getTrainee->id }}</th>
                <td>{{ $getTrainee->full_name }}</td>
                <td>{{ $getTrainee->email }}</td>
                <td>{{ $getTrainee->address }}</td>
                <td>
                    <button type="button" data-url="{{ route('trainee.edit', $getTrainee->id) }}" class="btn btn-primary edit_trainee">Edit</button>
                    <button type="button" data-url="{{ URL::to('/trainee/destroy/'.$getTrainee->id) }}" class="btn btn-danger btn_delete">
                        Delete
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>

<div class="append-trainee"></div>

@endsection

@section('script')
    <script type="text/javascript">
        $('.edit_trainee').click(function(){
            var div = $('.append-trainee');
            div.empty();

            var url = $(this).data('url');

            $.ajax({
                url: url,
                success:function(data){
                    div.append(data);
                    $('#edit_trainee').modal('show');
                }
            });
        });

        $('.btn_delete').click(function(e){
            var url = $(this).data('url');
			swal ({
			    title: "Are you sure?",
			      text: "Are you sure you want to delete this trainee?",
			      icon: "warning",
			      buttons: true,
			      dangerMode: true,
			}).then((result) => {
				if (result) {
					window.location.href = url;
				}
			})
		});
    </script>

@endsection