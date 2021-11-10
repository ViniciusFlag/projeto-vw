<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{BASE}}vendor/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="{{BASE}}css/style.css" />

    <script src="https://kit.fontawesome.com/ff2c2eeb4f.js" crossorigin="anonymous"></script>

    <title>
      {%block title%}{%endblock%}
    </title>
</head>
<body>
  {%include 'partials/header.twig.php'%}
  {%block body%}{%endblock%}
</body>
</html>