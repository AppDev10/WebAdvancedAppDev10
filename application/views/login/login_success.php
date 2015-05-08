<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="content">
			<span class="panel-header"><?php print_r($this->session->all_userdata()['logged_in']['username']);?> - Login succesvol!</span>
			<hr/>
			<p><a href="<?php echo base_url(array('home')) ?>">Ga verder naar de homepage</a></p>
		</div>
	</div>
</div>