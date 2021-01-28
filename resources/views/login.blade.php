@include('home')

<form class="col-md-6" method="POST">

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Saisissez votre mot de passe">
    </div>

    <button class="btn btn-primary" type="submit">Connexion</button>

</form>