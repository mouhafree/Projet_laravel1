<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Crud in laravel</title>
</head>
<body>
    <div class='container'>
        <div class='row'>
            <div class='col'>
                <h1>Modifier des Etudiants</h1>
                <a href="{{asset('etudiant')}}" class="btn btn-danger btn-lg  float-en">Back</a>
                <hr>


                @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                <ul>
                    @foreach($errors->all() as $error)
                    <li  class="alert alert-danger">{{ $error}}</li>
                    @endforeach
                </ul>

    <form action="/update/traitrement" method="post" class="form-group">
            @csrf

            <input type="text" name="id" class="form-control" value="{{$etudiants->id}}">

        <div class="mb-3">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" value="{{$etudiants->nom}}">
        </div>

        <div class="mb-3">
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" class="form-control" value="{{$etudiants->prenom}}">
        </div>

        <div class="mb-3">
            <label for="classe">Classes</label>
            <input type="text" name="classe" class="form-control" value="{{$etudiants->classe}}">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update Student</button>
        </div>
</form>

            </div>
        </div>
    </div>
</body>
</html>