<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> DVD Search </title>
  </head>

  <body>

    <header>
         DVD Search
    </header>

    <div id="main">
    <form action="/dvds" method="get">
        DVD: <input type="text" name="dvdName" id="dvdName">
        <br>
        <br>
        <button type="submit"> Search </button>
    </form>
    </div>
  </body>
</html>

<style>

header {
  padding: 1em;
  height: 30px;
  background-color: #C9CCEF;
  font-size: 25px;
  text-align: center;
  font-family: "verdana";
}

#main {
  margin-top: 20px;
  text-align: center;
  font-family: "verdana";
}


</style>
