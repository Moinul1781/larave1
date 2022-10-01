<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Employees</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h3>All Employees</h3>
        <a href="{{ url('create-employees')}}" class="btn btn-dark"> Create Employee</a>
                    <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Join Date</th>
                    <th>Department</th>
                    <th>Skills</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $emp)
                <tr>
                    <td>{{$emp-> name}}</td>
                    <td>{{$emp-> joinDate}}</td>
                    <td>{{$emp-> department}}</td>
                    
                    <td>
                        @php
                          $skills = json_decode($emp->skills)
                        @endphp

                        @foreach($skills as $skill)
                          {{$skill}}
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ url('edit-employees/'.$emp->id) }}" class="btn btn-primary">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mymodal{{ $emp->id }}">Delete</button>
                        
                        <div class="modal" id="mymodal{{ $emp->id }}" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure want to delete <b>{{ $emp->name}}</b> data? </p>
                                </div>
                                <div class="modal-footer">
                                    <a href="{{ url('delete-employees/'.$emp->id)}}" class="btn btn-success">Yes</a>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                             </div>
                            </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
    </div>
    
</body>
</html>