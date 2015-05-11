<h1>Admin part Home</h1>

<!-- form to add new newsItem			// make this collapse title (add new newsItem) -->

<?php echo validation_errors(); ?>
<?php echo form_open('addNews'); ?>

<label for="title">Title:</label>
<br/>
<input type="text" size="20" id="title" name="title"/>
<br/>
<label for="text">Text:</label>
<br/>
<textarea rows="2" cols="100" name="text">
</textarea>
<br/>
<label for="textFull">Full text:</label>
<br/>
<textarea rows="2" cols="100" name="textFull">
</textarea>
<br/>
<input type="submit" value="Submit"/>
</form>