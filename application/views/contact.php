<?php echo form::open() ?>
<fieldset>
<div class="legend"><h3>Contact Us</h3></div> 

<div class="form_row"> 
	<div class="form_property"><label>Name:</label></div> 
	<div class="form_value"><?php echo form::input('name') ?></div> 
	<div class="clearer">&nbsp;</div> 
</div>

<div class="form_row"> 
	<div class="form_property"><label>Email:</label></div> 
	<div class="form_value"><?php echo form::input('email','',array('style'=>'width:200px')) ?></div> 
	<div class="clearer">&nbsp;</div> 
</div>

<div class="form_row"> 
	<div class="form_property"><label>Comments:</label></div> 
	<div class="form_value"><?php echo form::textarea('comments','',array('style'=>'width:300px;height:100px;')) ?></div> 
	<div class="clearer">&nbsp;</div> 
</div>

<div class="form_row form_row_submit"> 
<div class="form_value"><?php echo form::submit('submit','Send Comments') ?></div> 
<div class="clearer">&nbsp;</div> 
</div> 
</fieldset>
</form>