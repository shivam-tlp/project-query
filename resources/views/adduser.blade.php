<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Add User form</title>

    
</head>
<body>
    <h1>Fill the form</h1>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <form action="{{Route('/adduser')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="username">
                </div>
                    <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="useremail">
                </div>
                    <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="text" class="form-control" name="userage">
                </div>
                    <div class="mb-3">
                    <label class="form-label">City</label>
                    <input type="text" class="form-control" name="usercity">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                
                </form>

            </div>
        </div>
    </div>
    
</body>
</html>