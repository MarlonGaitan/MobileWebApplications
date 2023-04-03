<!doctype html>
<html lang="en">
  <head>
    <?php
      include("header.php"); 
      ?>
  </head>
  <body>
    <a id="skippy" class="sr-only sr-only-focusable" href="#content">
      <div class="container">
        <span class="skiplink-text">Skip to main content</span>
      </div>
    </a>

    {% include docs-navbar.html %}

    {{ content }}

    {% include footer.html %}
    {% include scripts.html %}
  </body>
</html>
