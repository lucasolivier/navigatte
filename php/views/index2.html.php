<html lang="en" >
<head>
  <!-- Angular Material style sheet -->
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">    
  <style type="text/css">
        /**
         * Hide when Angular is not yet loaded and initialized
         */
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
          display: none !important;
        }
    </style>

</head>
<body ng-app="BlankApp" ng-cloak>
  <!--
    Your HTML content here
  -->  <md-toolbar layout="row" layout-align="center" class="md-whiteframe-z2">
  <h2>Simple Dialog</h2>
</md-toolbar>
<md-button class="md-primary">Click me</md-button>
<md-button class="md-accent">or maybe me</md-button>
<md-button class="md-warn">Careful</md-button>
<md-button class="md-primary">Click me</md-button>
<md-button class="md-primary md-hue-1">Click me</md-button>
<md-button class="md-primary md-hue-2">Click me</md-button>
  
  <!-- Angular Material requires Angular.js Libraries -->
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>

  <!-- Angular Material Library -->
  <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>
  
  <!-- Your application bootstrap  -->
  <script type="text/javascript">    
    /**
     * You must include the dependency on 'ngMaterial' 
     */
    angular.module('BlankApp', ['ngMaterial']);
  </script>
  
</body>
</html>