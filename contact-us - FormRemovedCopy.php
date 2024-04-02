<?php $page = "contact"; ?>
<?php include_once('inc/header.php'); ?>
	<div class="content portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h1>Contact Us</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-46 col-xs-12">
					<p>2157 N. Damen Ave.<br>
					Suite 2C <br>
					Chicago, IL 60647<br>
					<a href="https://maps.google.com/maps?q=2157+N+Damen+Ave,+Chicago,+IL&amp;hl=en&amp;ll=41.921259,-87.677346&amp;spn=0.001968,0.004479&amp;sll=41.883365,-87.715582&amp;sspn=0.126013,0.286674&amp;oq=2157+N+Damen&amp;t=m&amp;hnear=2157+N+Damen+Ave,+Chicago,+Illinois+60612&amp;z=18" target="_blank">Map &amp; Directions</a>
					<br><br>			
					<b>Phone:</b>  (773) 278-GROW (4769)<br>
					<b>Email:</b> <a href="mailto:info@kidsonthegrow.com">info@kidsonthegrow.com</a><br>
					<b>Fax:</b> 773)-304-4375<br><br>
                    Like us on <a href="https://www.facebook.com/pages/Kids-on-the-Grow/128193783894602" target="_blank">Facebook</a> or read about us on <a href="http://www.yelp.com/biz/kids-on-the-grow-chicago" target="_blank">Yelp</a>!</p>
				</div>

				<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
					<div class="form-bg">
					<form name="htmlform" action="html_form_send" method="post">
					  <div class="form-group">
					    <label for="name">Name *</label>
					    <input type="text" class="form-control" name="name" placeholder="" maxlength="50" size="30">
					  </div>
					  <div class="form-group">
					    <label for="childname">Child's Name</label>
					    <input type="text" class="form-control" name="childname" maxlength="50" size="30" placeholder="">
					  </div>
					  <div class="form-group">
					    <label for="childname">Child's Age</label>
					    <input type="text" class="form-control" name="childage" maxlength="50" size="30" placeholder="">
					  </div>
					  <div class="form-group">
					    <label for="email">Email Address *</label>
					    <input type="email" class="form-control" name="email" maxlength="50" size="30" placeholder="">
					  </div>
					  <div class="form-group">
					    <label for="telephone">Telephone Number</label>
					    <input type="text" class="form-control" name="telephone" maxlength="30" size="30" placeholder="">
					  </div>
					  <div class="form-group">
					    <label for="comments">How can we help your family? *</label>
					    <textarea  name="comments" maxlength="1000" cols="25" rows="6" class="form-control"></textarea>
					  </div>
					<input type="submit" value="Submit" class="btn btn-default" />
					  
					</form>
					</div>
				</div>

			</div>
		</div>
	</div>
<?php include_once('inc/footer.php'); ?>