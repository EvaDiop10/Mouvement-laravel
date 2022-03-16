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
    
</body>
</html>
<div class="container">
    <h2 class="">Liste des Entreprises</h2>
        <table class="table">
    <thead>
        <tr>
        <th scope="col"></th>
        <th scope="col">Nom</th>
        <th scope="col">Siége</th>
        <th scope="col">Date de creation</th>
        <th scope="col">Registre</th>
        <th scope="col">Localité</th>
        <th scope="col">Details</th>
        </tr>
    </thead>
    <tbody>
        @foreach($entreprises as $entreprise)
        <tr>
        <th scope="row"></th>
        <td>{{$entreprise->nom}}</td>
        <td>{{$entreprise->siege}}</td>
        <td>{{$entreprise->dateCreation}}</td>
        <td>{{$entreprise->registre}}</td>
        <td>{{$entreprise->quartier->nom}}</td>
        <td>
            <a href="{{ route('entreprise.show',$entreprise) }}">Plus de d'informations</a>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>