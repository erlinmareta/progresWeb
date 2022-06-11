<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>profil user</title>
  </head>
  <body>
    
  <form>
    
  
  {{-- @foreach($dtuser as $user) --}}
    <div class="col-6 mx-auto mt-5">
    <legend class="text-center">Na Jaemin</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Username</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Emrin">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Email</label>
      <input type="email" id="disabledTextInput" class="form-control" placeholder="sdsad@jsd.com">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Password</label>
      <input type="password" id="disabledTextInput" class="form-control" placeholder="fsdgfghtdh">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nomor Handphone</label>
      <input type="phone" id="disabledTextInput" class="form-control" placeholder="08239252">
    </div>
    <div class="d-grid gap-2 col-3 mx-auto">
        <a href="" class="btn btn-primary">Unduh File</a>
    </div><br>
    <div class="d-grid gap-2 col-3 mx-auto">
        <a href="" class="btn btn-primary">Logout</a>
    </div>
  
  </div>
</form>
{{-- @endforeach --}}


  </body>
</html>