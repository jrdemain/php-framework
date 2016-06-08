<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );

switch ( $route->getAction() ) {

    case 'contact':
        if (isset($_POST['submit'])) {
          print '<pre>';
          print_r($_POST);
          print '</pre>';
      } else {
        include( APP_VIEW .'/home/homeSubNav.php' );
        include( APP_VIEW .'/home/contactView.php' );
      }
      break;

      case 'create':

          include( APP_VIEW .'/create/createSubNav.php' );
          include( APP_VIEW .'/create/createView.php' );
          break;

      case 'newPlayer':

          if (isset($_POST['submit']))
          {
            $dbObj = new db();

            $sql = "INSERT INTO players (jersey_num, player_name, bat_hand, throw_hand) VALUES (?, ?, ?, ?)";
            $dbObj->dbPrepare($sql);
            $dbObj->dbExecute([
             $_POST['jersey_num'],
             $_POST['player_name'],
             $_POST['bat_hand'],
             $_POST['throw_hand']

            ]);


          include( APP_VIEW .'/create/createSubNav.php' );
          include( APP_VIEW .'/create/createView.php' );
          }

          break;

    case 'table':
        $dbObj = new db();

        $sql = "SELECT * FROM players";
        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([]);


        include( APP_VIEW .'/home/homeSubNav.php' );
        include( APP_VIEW .'/home/tableView.php' );
        break;


    default:
        $dbObj = new db();

        $sql = "SELECT * FROM app_user";
        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([]);
        $row = $dbObj->dbFetch("assoc");


      #  print '<pre>';
      #  print_r($row);
      #  print '</pre>';

        include( APP_VIEW .'/home/homeSubNav.php' );
        include( APP_VIEW .'/home/homeView.php' );
  break;

}


# Include html footer
include( APP_VIEW . '/footer.php' );
