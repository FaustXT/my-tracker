<!DOCTYPE html>
<html>
    <head>
      <title>index</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style >
      .w3-myfont {
      font-family: "Comic Sans MS", cursive, sans-serif;
      }
      </style>
    </head>
      <body>
    {% include 'header.tpl.php' %}

        <div id="content">{% block content %}{% endblock %}</div>
        <!-- Footer -->
  <footer class="w3-container w3-theme-dark w3-padding-16">

    <img src="public/images/footer.png" alt="">
    </div>
  </footer>
    </body>
</html>
