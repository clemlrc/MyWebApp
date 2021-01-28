@include('home')


<form class="col-md-6" method="POST">

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Username</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="your email address">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Password confirmation</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Confirm your password">
  </div>

  <button class="btn btn-primary" type="submit">Inscription</button>

</form>

