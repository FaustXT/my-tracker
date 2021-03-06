{% extends "layout-admin.tpl.php" %}
{% block content %}

<div class="row">
  <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-default">
      <div class="panel-heading">Log in</div>
      <div class="panel-body">
        <form action="?admin/login" method="post">
          <fieldset>
            <div class="form-group">
              <input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Password" name="password1" type="password" value="">
            </div>
            <div class="checkbox">
              <label>
                <input name="remember" type="checkbox" value="Remember Me">Remember Me
              </label>
            </div>
            <input class="btn btn-primary"  type="submit" value="Login!">
            {% if error %}

            <div style="color:red;" > {{error}}</div>
            {% endif %}
            {% if error_login %}
            <div class="">


            <img class="w3-left-align" src="{{error_login}}" alt="" />

            <input class="w3-input w3-border " style="width: 25%" type="text" name="captcha" placeholder="Text from picture" >
            </div>
            {% endif %}


          </fieldset>
        </form>
      </div>
    </div>
  </div><!-- /.col-->
</div><!-- /.row -->


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script>
  !function ($) {
    $(document).on("click","ul.nav li.parent > a > span.icon", function(){
      $(this).find('em:first').toggleClass("glyphicon-minus");
    });
    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
  }(window.jQuery);

  $(window).on('resize', function () {
    if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
  })
  $(window).on('resize', function () {
    if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
  })
</script>
{% endblock %}
