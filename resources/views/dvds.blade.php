<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Search {{ $search }} </title>
  </head>

  <body>
    <header>
      DVD Search
    </header>
    <br>
    <div id="returnHome"> <a href = '/'> >>> Return Home <<< </a> </div>
    <br>
    <div id="searchText"> </div>
    <div id="tableDiv">

    <table style= "width:75%" id="table1">
      <tr>
        <th>Title </th>
        <th> Genre </th>
        <th> Rating </th>
      </tr>

      @foreach($dvds as $dvd)
      <tr>
        <td> {{$dvd->title}} </td>
        <td>  {{$dvd->genre_name}}</td>
        <td>  {{$dvd->rating_name}} </td>
      </tr>
      @endforeach
    </div>

<script type="text/javascript">

    var search = document.getElementById("dvdName").value;
    document.getElementById("searchText").innerHTML = search;
    // unable to set text for user search...

</script>

  </body>

</html>

<style>

header {
  padding: 1em;
  height: 30px;
  background-color: #C9CCEF;
  font-size: 25px;
  text-align: center;
  color: #000000;
  font-family: "verdana";
}

#returnHome {
  text-align: center;
  margin-bottom: 1px;
}

body {
  font-family: "verdana";
}

#tableDiv {
  margin-left: 15%;
}

#table1, th, td {
  border: 1px solid black;
}

</style>
