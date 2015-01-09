# urlshorter
To shorten your looooong URL

This is the basic style boostrap form declaration :

Javascript Declaration : 
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

html : 
<form method="post" id="submit" name="submit">
  <div class="input-group form-group-lg">
      <input type="url" required class="form-control" placeholder="Put your URL to short here" name="url-text" id="url-text" class="form-control input-lg">
  <div class="input-group-btn">
  <button class="btn btn-default btn-lg btn-primary" type="submit"><i class="glyphicon glyphicon-resize-small"></i> Short it !</button>
  </div>
  </div>
</form>

And here JQuery Function to post the url : 

$(document).ready(function(){
	$("form#submit").submit(function() {
	var urlToShort     = $('input#url-text').val();
		$.ajax({
			type: "POST",
			url: "add_url.php",
			data: "url="+ urlToShort,
			success: function(info){
				$('#result').html(info);
			},
			failed:function(){

			}
			
		});
	return false;
	});
});
