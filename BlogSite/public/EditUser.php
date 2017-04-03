<?php
// Load all application files and configurations
require($_SERVER[ 'DOCUMENT_ROOT' ] . '/../includes/application_includes.php');
// Include the HTML layout class
require_once(FS_TEMPLATES . 'Layout.php');
require_once(FS_TEMPLATES . 'News.php');
// Connect to the database
$db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Initialize variables
$requestType = $_SERVER[ 'REQUEST_METHOD' ];
// Generate the HTML for the top of the page
Layout::pageTop('Edit Profile');
?>
    <div class="container top25">
        <div class="col-md-8">
            <section class="content">

                <?php
                if ($requestType == 'GET') {

                    $sql = 'select * from users where email = ' . $_GET['email'];
                    $result = $db->query($sql);
                    $row = $result->fetch();
                    //News::story($row);
                    //showUpdateForm($row);
                    $id = $row['id'];
                    $firstName = $row['firstName'];
                    $lastName = $row['lastName'];
                    $email = $row['email'];
                    $password = $row['password'];

                    echo <<<postform
<form id="CreatePostForm" action='CreateUser.php' method="POST" class="form-horizontal">
<fieldset>
<!-- Form Name -->
<legend>Sign Up Form</legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="firstName">First Name</label>  
  <div class="col-md-4">
  <input id="firstName" name="firstName" type="text" placeholder="First" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lastName">Last Name</label>  
  <div class="col-md-4">
  <input id="lastName" name="lastName" type="text" placeholder="Last" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="Username" type="text" placeholder="Email" class="form-control input-md" required=""> 
  </div>
</div>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="signUpButton"></label>
  <div class="col-md-4">
    <button id="signUpButton" name="signUpButton" class="btn btn-info">Create</button>
  </div>
</div>
</fieldset>
</form>
postform;
                }
                elseif ($requestType == 'POST') {
                    //Validate data
                    // Save data
                    $id = $_POST['id'];
                    $firstName = htmlspecialchars($_POST['firstName'], ENT_QUOTES);
                    $lastName = htmlspecialchars($_POST['lastName'], ENT_QUOTES);
                    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
                    $password = htmlspecialchars($_POST['password'], ENT_QUOTES);

                    //echo '<pre>' . print_r($_POST) . '</pre>';
                    $sql = "update users set firstname = '$firstName', lastname = '$lastName', address1 = '$address1', password = '$password ', email = '$email' where id = $id;";
                    $result = $db->query($sql);
                    //header('Location: index.php');
                }
                ?>
            </section>
        </div>

    </div>


<?php
// Generate the page footer
Layout::pageBottom();