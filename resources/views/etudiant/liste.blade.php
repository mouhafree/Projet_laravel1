<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Crud in laravel</title>
</head>
<body>
    @include('partials.navbar')
 <div class="container text-center mt-5">
    <div class="row m-3">
        <div class="col">
            <h1>Crud in Laravel pour la liste des etudiants</h1>
            <hr>

            <a href="/ajouter" class="btn btn-primary btn-lg mb-3"> Ajouter un Etudiant</a>
            <table class="table table-bordered mt-2 ">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <thead>
                    <tr scope="col">
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Classe</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $etudiants as $etudiant )
                    
                    <tr class="" scope="col">
                        <td>{{ $etudiant->id }}</td>
                        <td>{{ $etudiant->nom }}</td>
                        <td>{{ $etudiant->prenom }}</td>
                        <td>{{ $etudiant->classe }}</td>
                        <td>
                            <a href="/update-etudiant/{{ $etudiant->id }}" class="btn btn-info">Update</a>
                            <a href="/delete-etudiant/{{ $etudiant->id }}" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
 </div>   


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>