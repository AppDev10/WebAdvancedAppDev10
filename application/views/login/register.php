  <div class="container">
    <h1><?php $title?></h1>
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="content">
         <?php echo validation_errors(); ?>
         <?php echo form_open('register'); ?>
         <label for="username">Username:</label>
         <input type="text" size="20" id="username" name="username"/>
         <br/>
         <label for="password">Password:</label>
         <input type="password" size="20" id="passowrd" name="password"/>
         <br/>
         <label for="password">Confirm password:</label>
         <input type="password" size="20" id="passowrd" name="password"/>
         <br/>
         <label for="naam">Naam:</label>
         <input type="text" size="20" id="naam" name="naam"/>
         <br/>
         <label for="voornaam">Voornaam:</label>
         <input type="text" size="20" id="voornaam" name="voornaam"/>
         <br/>
         <label for="email">Email:</label>
         <input type="email" size="20" id="email" name="email"/>
         <br/>
         <input type="submit" value="Login"/>
       </form>
     </div>
   </div>
 </div>

</div>