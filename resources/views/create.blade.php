<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employees</title>
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
        <h3>Create Employees</h3>
        <a href="{{ url('all-employees')}}" class="btn btn-dark"> All Employees</a>
       
        <form action="{{ url('store-employees' )}}" method='post'>
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
            
        </div>
        <div class="form-group">
            <label for="join">Date of Joining</label>
            <input type="date" id="join" name="dateOfJoining" class="form-control">
        </div>
        <div class="form-group">
        <label for="sel1">Department</label>
        <select class="form-control" id="sel1" name="department">
            <option value="">SELECT DEPARTMENT</option>
            <option value="CSE">CSE</option>
            <option value="EEE">EEE</option>
            <option value="LLB">LLB</option>
            <option value="BBA">BBA</option>
        </select>
        </div>
            <div class="form-group">
             <label for="">skills</label>
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" name="skills[]" class="form-check-input" value="PHP">PHP
                </label>
              </div>
            <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" name="skills[]" class="form-check-input" value="JAVA">JAVA
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" name="skills[]" class="form-check-input" value="PYTHON">PYTHON
                </label>
            </div>
        </div>
        <div class="form-group">
          <button class="btn btn-dark" type="submit">Create</button>
         </div>
         
     </form>
    </div>
</body>
</html>