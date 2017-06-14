<table class="w3-table-all w3-centered">
<tr><td> {{comment.usernikname|e}}  (user) add at date {{comment.date|e}} </td></tr>
<tr>
  <td> <img src="public/images/default_avatar.gif" alt="avatar"> </td>
  <td> <p> {{comment.text|e}}</p></td>
</tr>
</table>
  <form class="w3-container" action="?comments/details/" method="post" >
  <label class="w3-label w3-text-teal"><b>First Name</b></label>

  <input class="w3-input w3-border w3-light-grey" type="textarea" name="comment">



  <button class="w3-btn w3-blue-grey">And Commet<input style="visibility: hidden"  type="submit" value="Create!"></button>
</form>
