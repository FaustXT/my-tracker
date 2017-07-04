{% extends "layout-admin.tpl.php" %}
{% block content %}


{% include 'admin-header.tpl.php' %}
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tables</h1>
			</div>
		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Advanced Table</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th >Name</th>
										<th>Administrate</th>
						    </tr>
                </thead>
                {% for user in users %}
                <tr>
									<td> <a href="?user/details/{{user.id|e}}">{{ user.nikname|e }}</a></td>
									<td><td><a href="?admin/torrent/block/{{user.id|e}}">{% if torrent.block ==false %}Block {% else %} Unblock {% endif %}</a><a href="?admin/torrent/delete/{{user.id|e}}"> Delete </a></td></td>
								 </tr>
                  {% endfor %}

						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->

          <script>
              $(function () {
                  $('#hover, #striped, #condensed').click(function () {
                      var classes = 'table';

                      if ($('#hover').prop('checked')) {
                          classes += ' table-hover';
                      }
                      if ($('#condensed').prop('checked')) {
                          classes += ' table-condensed';
                      }
                      $('#table-style').bootstrapTable('destroy')
                          .bootstrapTable({
                              classes: classes,
                              striped: $('#striped').prop('checked')
                          });
                  });
              });

              function rowStyle(row, index) {
                  var classes = ['active', 'success', 'info', 'warning', 'danger'];

                  if (index % 2 === 0 && index / 2 < classes.length) {
                      return {
                          classes: classes[index / 2]
                      };
                  }
                  return {};
              }
          </script>
        </div>




<script src="public/admin/js/jquery-1.11.1.min.js"></script>
<script src="public/admin/js/bootstrap.min.js"></script>
<script src="public/admin/js/chart.min.js"></script>
<script src="public/admin/js/chart-data.js"></script>
<script src="public/admin/js/easypiechart.js"></script>
<script src="public/admin/js/easypiechart-data.js"></script>
<script src="public/admin/js/bootstrap-datepicker.js"></script>
<script src="public/admin/js/bootstrap-table.js"></script>
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
