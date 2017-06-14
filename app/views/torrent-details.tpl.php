{% extends "layout.tpl.php" %}
{% block content %}
<table class="w3-table w3-bordered ">
  <tr><td>
    <div class="container w3-center">
    {% if torrent.block %}
       <h1>This torrent is blocked</h1>
    {% else %}

       <h1><a href="{{torrent.file}}">{{ torrent.name|e }}</a></h1>
    </div>
    {% endif %}
  </td></tr>
  <tr>
      <td>
        <div class="w3-container w3-center">
<img src="{{ torrent.image|e }}" alt="" />
        </div>
      </td>
  </tr>
  <tr>
    <td>
      <div class="w3-container w3-center">
<p> Name: {{ torrent.name|e }}</p>
  <p>Type: {{ torrent.type|e }}</p>
  <p> Gen: {{ torrent.gen|e}}</p>
      <div>
  </td>
     </tr>
     <tr>
       <td>
   <div class="w3-container w3-center">
     <h3>Description</h3>
      <p>{{ torrent.description }}</p>
    </div>
  </tr>
    </td>
    <tr> <td>
       <div class="w3-container w3-center">
<p>Uploud by</p>
      </div>
    </tr> </td>
  </table>
{% if IfLogin %}
{#                  coments table                      #}
  {% for comment in comments %}
  <div class="w3-container">
    <div class="w3-card-4">
      <header class="w3-container w3-dark-grey">
        <p>By {{comment.usernikname|e}}  on date{{comment.date|e}}<p>
      </header>
      <div class="w3-container">
        <img src="public/images/avatar_616633_2.gif" alt="Avatar" class="w3-left  w3-margin-right" >
        <p>{{comment.text|e}}</p><br>
      </div>
    </div>
  </div>
  <br>
  <br>
{% endfor %}
{#                  coments form                      #}
<div class="w3-container w3-large">
<form class="w3-container" action="?comments/create/" method="post" >
<label class="w3-label w3-text-teal"><b>Write a comment</b></label>
<!--<input class="w3-input w3-border w3-light-grey" type="textarea" name="comment">-->
<textarea class="w3-input w3-border" style="resize:none"></textarea>
<input type="hidden" name="torrentid" value="{{id}}">
<button class="w3-btn w3-blue-grey">And Commet<input style="visibility: hidden"  type="submit" value="Create!"></button>
</form>
</div>

{% endif %}

{% endblock %}
