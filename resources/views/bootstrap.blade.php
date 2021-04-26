<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>bootstrap tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" type="text/css">

  </head>
  <style media="screen">
    body{
      padding: 0;
    }
    .container-fluid{
      background: aqua;
    }
    .col{
      border:1px solid black;
    }
    .my-custom-row{
      background: bisque;
      height:400px;
    }
  </style>
  <body>
    <div class="container-fluid">
      <div class="row">
        {{-- This has 12 column --}}
        <div class="col-sm-4 col-md-6 col-lg-2">Col One</div>
        <div class="col-sm-8 col-md-6 col-lg-8">Col Two</div>
      </div>
      <div class="row">
        {{-- This has 12 column --}}
        <div class="col-sm-4 order-md-2">Col One</div>
        <div class="col-sm-8 order-md-1">Col Two</div>
      </div>
      <div class="row">
        {{-- This has 12 column --}}
        <div class="col-sm-4 offset-2">Col One</div>
        <div class="col-sm-4 offset-1">Col Two</div>
      </div>
      <div class="row my-custom-row justify-content-center align-items-center">
        {{-- This has 12 column --}}
        <div class="col-sm-6 col-lg-12 bg-secondary"> <div class="p-6 border bg-light">Col One</div><div class="p-6 border bg-light">Col Two</div> </div>
        <div class="col-sm-6 col-lg-12 bg-warning"> <div class="p-4 border bg-light">Col Three</div> </div>
      </div>

    </div>

  </body>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</html>
