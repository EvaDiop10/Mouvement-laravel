<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
</nav>

<div class="container">
    <form method="POST" action="/entreprise/store">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="name" class="form-control"  name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1"  class="form-label">Siege</label>
            <input type="name" class="form-control" name="siege" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1"  class="form-label">telephone</label>
            <input type="integer" name="telephone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1"  class="form-label">date de creation</label>
            <input type="date" name="dateCreation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1"  class="form-label">registre</label>
            <input type="text" name="registre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1"  class="form-label">adresse Web</label>
            <input type="text" name="adresseWeb" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label"  name="cotisationSocial" for="exampleCheck1">Avez-vous une cotisation sociale et patronale?</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox"  class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" name="organigramme" for="exampleCheck1">Avez-vous un organigrame?</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox"  class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" name="contratFormel" for="exampleCheck1">Avez-vous un contrat formel?</label>
        </div>
        <div class="mb-3">
            <select name="quartier_id" id="">Selectionnez un quartier
                @foreach($quartiers as $quartier)
                <option value="1">{{$quartier->nom}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
</body>
</html>
