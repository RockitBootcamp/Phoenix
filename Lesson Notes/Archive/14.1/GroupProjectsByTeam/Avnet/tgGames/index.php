<?php 
  error_reporting(E_ALL);
  ini_set('display_errors', 'on');

  include ( 'includes/head.html');
  include ( 'includes/header.html');

  // incorporate the connection script
  require ('connect.php');

  // if ( mysqli_ping( $dbc )) {
  //   echo 'MySQL Server ' . mysqli_get_server_info( $dbc ) . ' on ' . mysqli_get_host_info( $dbc );
  // }


    $q = 'SELECT * FROM game';
    $r = mysqli_query ( $dbc , $q);


  // call show_records
  // show_records( $dbc );

  mysqli_close( $dbc );
?>

  <div class="main">
    <div class="games-list">

      <div>
        <button class="edit">Edit</button> HP Build the Fastest Computer
      </div>
      <div>
        <?php

          if (mysqli_num_rows( $r )>0) {
            while ($row = mysqli_fetch_array( $r, MYSQLI_ASSOC)) {
              echo '<button>Edit</button> ' . $row['title'] . '<br>';
            }
          } else {
            echo '<p> There are no Games Posted</p>';
          }

          ?>
      </div>


    </div>


  </div>

<?php 

include ('includes/footer.html');

?>