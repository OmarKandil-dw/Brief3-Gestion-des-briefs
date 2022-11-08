
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

    <li></li>
    
  </ul>

<form action="/addtaches" method="get">

    <input type="text" name="title" placeholder="Nom" value="">
    <input type="date" name="startdate" placeholder="Date début" value="">
    <input type="date" name="enddate" placeholder="Date fin " value="">
    <input type="text" name="description" placeholder="Description" value="">
    <input type="hidden" name="id_brief" placeholder="Description" value="{{$id }}">

    
    <button type="submit">Confirmer</button>

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
                        <a  class="btn btn-danger" href="delete/{{ $row->id }}">Supprimer </a> 
                    </td> 
                </tr>
            @endforeach

            @endif
    </tbody>
</table>




