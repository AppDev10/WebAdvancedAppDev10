  <div class="container">
    <h1>Simple Login with CodeIgniter</h1>
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="content">
         <?php echo validation_errors(); ?>
         <?php echo form_open('verifylogin'); ?>
         <label for="username">Username:</label>
         <input type="text" size="20" id="username" name="username"/>
         <br/>
         <label for="password">Password:</label>
         <input type="password" size="20" id="passowrd" name="password"/>
         <br/>
         <input type="submit" value="Login"/>
       </form>
     </div>
   </div>
 </div>

</div>