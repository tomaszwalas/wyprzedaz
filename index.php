<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Czwartkowa wyprzedaż Kanap</title>
    <meta name="description" content="Czwartkowa wyprzedaż trwa! Nie czekaj kup kanapę dla Ciebie już dziś!" />
    <meta name="robots" content="noindex" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script  src="js/jquery-1.11.0.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/angular-route.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<script src="js/angular-storage.js"></script> --> 
    <!-- <script src="https://cdn.rawgit.com/nervgh/angular-file-upload/master/angular-file-upload.min.js"></script> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109311380-29"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-109311380-29');
    </script>
    <link rel="Stylesheet" type="text/css" href="css/style.css" />
  
<style>
  @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
     /* IE11 CSS  */

    .cards {
         display: flex;
    }
    header{
      display: flex;
    }
    .minutes-container, .hours-container, .seconds-container {
    position: relative;
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 60px;
}

  }
</style>

</head>
<body ng-app="app">
  <div ng-controller="navigation" ng-include="navigation()">
  </div>
	<div ng-view>
	</div>
	
	

<!-- ______________________js_______________ -->
  <script src="js/application.js"></script>
  <script src="js/controllers/controllersNavigation.js"></script>
  <script src="js/controllers/controllersSite.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


</body>
</html>