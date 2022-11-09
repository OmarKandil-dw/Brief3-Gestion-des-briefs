
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
    
</body>
</html>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
  text-decoration: none;
  color: white;
}

    body{
        background-color:whitesmoke; 
        margin: 0;
        padding: 0;

    }

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
 
.data{
    margin-top: 100px;
    margin-left: 250px;
    }

form,h6{
    margin-top: 50px;
    margin-left:20px ;
}

table{
    margin-left:20px ;
    margin-bottom:60px ;

    
}
table{
    width: 80%;
}

button{
    height:100%;
    border: 3px outset #333;
    background-color: #333;    
    color: white;
    margin-left:0px;
}

</style>

<ul>
    <li><a href="/index" style="margin-top:2px;" class="a">Accueil</a></li>
    <li><a href="/briefs" style="margin-top:2px;" class="a">Briefs</a></li>
   {{-- <li style="margin-left:10px;"><a href="{{ URL('addapprenants/' . $promotion[0]->id) }} ">Ajouter un apprenant</a></li> --}}    
  </ul>


<form action="/addtaches" method="get" class="">
 <i><u> <h4 class="text-center mb-3">Ajouter Nouveau taches</h4></i></u>

  <div class="row" style="width:100%;">
    <div class="col-sm-3">
      <label for="staticEmail2" class="visually-hidden">Nom </label>
      <input type="text" class="form-control" name="title" placeholder="Nom" value="">
    </div>
    <div class="col-sm-3">
      <label for="inputPassword2" class="visually-hidden">Date début</label>
      <input type="date" class="form-control" name="startdate" placeholder="Nom" value="">
    </div>
    <div class="col-sm-3">
      <label for="inputPassword2" class="visually-hidden">Date fin </label>
      <input type="date" class="form-control" name="enddate" placeholder="Nom" value="">
    </div>
    <div class="col-sm-3">
      <label for="staticEmail2" class="visually-hidden">Description</label>
      <input type="text" class="form-control" name="description" placeholder="Description" value="">
    </div>
    <input type="hidden" name="id_brief" placeholder="Description" value="{{$id }}">
  </div>
      <div class="text-center mt-3">
      <button type="submit" class="btn btn mt-2  ">Confirmer </button>
    </div>
  </form>


<h6>Liste des taches : </h6>

<table>

    <thead>
        <th>Nom</th>
        <th>Date début </th>
        <th> Date fin </th>
        <th>Description </th>
        <th>Actions</th>
    </thead>
    <tbody>
        @if ($data[0]->id !=null)
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->title }}</td>
                    <td>{{ $row->startdate }}</td>
                    <td>{{ $row->enddate }}</td>
                    <td>{{ $row->description }}</td>
                     <td>
                        <a class="btn btn-primary" href="/update_taches/{{ $row->id }}">Modifier </a> 
                        <a class="btn btn-danger" href="{{ $id }}/delete/{{ $row->id }}">Supprimer </a> 
                    </td> 
                </tr>
            @endforeach

            @endif
    </tbody>
</table>




