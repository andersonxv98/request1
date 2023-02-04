<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Request 1</title>
  </head>
  <body>
  
  

  <div class="container-sm">
  <header>
    <h2 class="mt-2" style="color:black; font-family:unset">Request 1</h2>
  </header>

  <form method="post" action="response.php">
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email"  class="form-control" id="email" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Enter your UserName">
      </div>
     
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 
  </div>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>