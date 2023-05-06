<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css" integrity="sha512-PqwCZJ6UZn6nTPpDgF4veEJ1AJYL+vJ/dX9/bmqXDQvOfZo5ic5h5LYfV5W5cKjyUVpHxAMhJX9cwqwyKfbkJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Plateform Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link float-right" href="#">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row mt-5 pt-5">
        <div class="col-md-6">
          <h1>Welcome to PP</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mattis, turpis a vehicula lobortis, nibh libero congue turpis, id iaculis metus massa eget diam. Praesent commodo nisl eget mauris sollicitudin, vel consectetur ex iaculis. Nullam posuere euismod odio, sed pulvinar ex consectetur vel.</p>
          <div class="containe">
            <img id="image" src="./public/images/animated.png" alt="Animated image" width="200px">
          </div>
          <style>
            .containe {
                width: 100%;
                height: 100px;
                position: relative;
                }

                #image {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    animation: move 5s infinite linear;
                    }

                    @keyframes move {
                    0% {
                        left: 50%;
                    }
                    50% {
                        left: 25%;
                    }
                    100% {
                        left: 50%;
                    }
                }
          </style>
        </div>
        <div class="col-md-6">
            <form action="action/login.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="text" name="username" class="form-control" id="username">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="row">
                    <div class="col-md-8 pt-1 mb-3 form-check">
                        <label class="form-check-label" for="exampleCheck1">You do not have an account? <a href="./partitions/register.php"> Register Here !</a></label>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class=" btn btn-primary">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js" integrity="sha512-B4y4Y52o4/5gjLilSGi57Z8mHtQf1wB5Gzw42Ozyy8YTFobbl5vKP10D1buc7VjKpveiF7VwHzCggbmlIVVJng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>