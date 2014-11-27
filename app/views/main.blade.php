
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Technicians Management - Dashboard</title>
    {{ HTML::style('css/main.css') }}
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDpDBs668w-2HORB25aaEu-tSydv4wdeJQ"></script>
    {{ HTML::script('js/main.js') }}
  </head>
  <body>
    <h1 class="title">Technicians Manager</h1>
    <input id="pac-input" class="controls" type="text" placeholder="Search Address">
    <div id="map-canvas"></div>
  </body>
</html>