<h1>DIt is de adminPage voor about</h1>
<?php echo validation_errors(); ?>
<?php echo form_open('submitAbout'); ?>
<textarea rows="10" cols="100" name="text"><?php echo $text['text']; ?>
</textarea>
<br/>
<input type="submit" value="Submit"/>
</form>