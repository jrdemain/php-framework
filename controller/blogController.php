<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );

switch ( $route->getAction() ) {

    case 'view':

      $dbObj = new db();

      $sql = "SELECT * FROM blog ORDER BY create_date DESC";
      $dbObj->dbPrepare($sql);
      $dbObj->dbExecute([]);

      include( APP_VIEW .'/blog/blogSubNav.php' );
      include( APP_VIEW .'/blog/listPostView.php' );
      break;

    default:
        $dbObj = new db();

        $sql = "SELECT * FROM blog ORDER BY create_date DESC";
        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([]);

        include( APP_VIEW .'/blog/blogSubNav.php' );
        include( APP_VIEW .'/blog/listPostView.php' );
        break;

}


# Include html footer
include( APP_VIEW . '/footer.php' );
