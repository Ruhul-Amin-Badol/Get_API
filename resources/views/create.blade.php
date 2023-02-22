<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <h2 class="text-center">Add Information</h2>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                <div>
                    <form action="{{url('information')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">FirstName</label>
                            <input type="text" class="form-control" id="First_name" name="First_name" placeholder="Enter Your FirstName">
                          </div>
                          <div class="mb-3">
                            <label for="name" class="form-label">LastName</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Your LastName">
                          </div>
                          <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"placeholder="Enter Your Email">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                    </form>  
                </div>
                </div>
                <div class="col-3"></div>
            </div>

        </div>
    </div>
</body>
</html>