<?php
require_once 'core/init.php';

//$users = db::getInstance()->query('SELECT username FROM users');
//if($users->count()) {
    //foreach($users as $user) {
    //    echo $user->username;
    //}
//}

// $user = DB::getInstance()->query("SELECT username FROM users WHERE username = ?", array('Alex'));
//$user = DB::getInstance()->get('users', array('username', '=', 'alex'));

// looping through a set of results using for each  (video9)

//if(!$user->count()) {
//  echo 'no user';
 //} else {
  //  foreach($user->results() as $user) {
    //echo $user->username;
   //}
//}

 // getting just the first result (video9)
// if(!$user->count()){
//  echo 'No user';
//  }else{
//    echo $user->first()->username;
//  }

// to insert into table (video10)
// $userInsert = DB::getInstance()->insert('users', array(
//      'username' => 'Dale',
//      'password' => 'password',
//       'salt'    => 'salt'
// ));
//upadte table (Video10)
// $userInsert = DB::getInstance()->update('users', 5 , array(
  
//   'password' => 'newpassword',
//    'name' => 'Dale Garett'
// ));
 if (Session::exists('home')) {
      echo '<P>' . Session::flash('home') . '</P>' ;
 }

 $user = new user();
 if($user->isLoggedIn()) {
  ?>  
   <p> Hello <a href="#"><?php echo escape($user->data()->username); ?></a>!</p>

   <ul>
    <li><a href="logout.php">Log out</a></li>
   </ul>

  <?php
 } else {
  echo '<p>You need to <a href="login.php">log in</a> or <a href="register.php">register</a></p>';
 }
   
 

