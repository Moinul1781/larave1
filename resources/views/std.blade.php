<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
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
        <h3>Srudent Informatoin</h3>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="">Id</label>
            <input type="id" id="id"class="form-control" name="name">
        </div>
        <label for="">Skills</label> <br>
            <div class="form-check-inline">
                
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">PHP
                </label>
                </div>
                <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">JAVA
                </label>
                </div>
                <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">PYTHON
                </label>
            </div> 
            <div class="form-group"><br>
            <label for=""> Select Gender</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optradio">Male
                    </label>
                    </div>
                    <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optradio">Female
                    </label>
                    </div>
                    <div class="form-check disabled">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optradio">Other
                    </label>
                </div>
            </div>
            <div class="form-group">

                   <button class="btn btn-primary" type="submit">Save</button>
            </div>
         

    </div>
</body>
</html>