{% extends "torrent-details.tpl.php" %}
{% block content %}
<form class="w3-container" action="?comments/create/" method="post" >
<label class="w3-label w3-text-teal"><b>First Name</b></label>
<input class="w3-input w3-border w3-light-grey" type="textarea" name="comment">
<input type="hidden" name="torrentid" value="{{id}}">
<button class="w3-btn w3-blue-grey">And Commet<input style="visibility: hidden"  type="submit" value="Create!"></button>
</form>
{% endblock %}
