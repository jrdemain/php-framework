<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );

switch ( $route->getAction() ) {
  case 'addStat':

      include( APP_VIEW .'/stats/statsSubNav.php' );
      include( APP_VIEW .'/stats/addStatView.php' );
      break;
  case 'newStat':

      if (isset($_POST['submit']))
      {
        $dbObj = new db();

        $sql = "INSERT INTO player_game_stats (game_id, player_id, stat_id, stat_value) VALUES (?, ?, ?, ?)";
        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([
         $_POST['game_id'],
         $_POST['player_id'],
         $_POST['stat_id'],
         $_POST['stat_value']

        ]);


        include( APP_VIEW .'/stats/statsSubNav.php' );
        include( APP_VIEW .'/stats/addStatView.php' );

      }

      break;


  case 'edit':
      $dbObj = new db();

      $sql = "SELECT
                p.id AS player_id, p.jersey_num, p.player_name, p.bat_hand, p.throw_hand,
                g.id AS game_id, g.game_date, g.home_team, g.away_team, g.home_score, g.away_score,
                ps.id AS stat_id, ps.stat_name, pgs.id AS pgs_id, pgs.stat_value
              FROM
                player_game_stats pgs
              JOIN
                players p ON p.id = pgs.player_id
              JOIN
                games g ON g.id = pgs.game_id
              JOIN
                player_stats ps ON ps.id = pgs.stat_id
              WHERE
                pgs.id = ?";

      $dbObj->dbPrepare($sql);
      $dbObj->dbExecute([
        $route->getParams()[2]
      ]);

      $stat = $dbObj->dbFetch("assoc");

      include( APP_VIEW .'/stats/statsSubNav.php' );
      include( APP_VIEW .'/stats/statEditView.php' );
      break;


    case 'list':
        $dbObj = new db();

        $sql = "SELECT
                  p.id AS player_id, p.jersey_num, p.player_name, p.bat_hand, p.throw_hand,
                  g.id AS game_id, g.game_date, g.home_team, g.away_team, g.home_score, g.away_score,
                  ps.id AS stat_id, ps.stat_name, pgs.id AS pgs_id, pgs.stat_value
                FROM
                  player_game_stats pgs
                JOIN
                  players p ON p.id = pgs.player_id
                JOIN
                  games g ON g.id = pgs.game_id
                JOIN
                  player_stats ps ON ps.id = pgs.stat_id
                ORDER BY
                  g.id, p.id";

        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([]);

        include( APP_VIEW .'/stats/statsSubNav.php' );
        include( APP_VIEW .'/stats/statsListView.php' );
        break;


    case 'update':
        $dbObj = new db();

        $sql = "UPDATE
                  player_game_stats
                SET
                  stat_value = ?
                WHERE
                  id = ?";

        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([
          $_POST['statValue'],
          $route->getParams()[2]
        ]);

        $sql = "SELECT
                  p.id AS player_id, p.jersey_num, p.player_name, p.bat_hand, p.throw_hand,
                  g.id AS game_id, g.game_date, g.home_team, g.away_team, g.home_score, g.away_score,
                  ps.id AS stat_id, ps.stat_name, pgs.id AS pgs_id, pgs.stat_value
                FROM
                  player_game_stats pgs
                JOIN
                  players p ON p.id = pgs.player_id
                JOIN
                  games g ON g.id = pgs.game_id
                JOIN
                  player_stats ps ON ps.id = pgs.stat_id
                WHERE
                  pgs.id = ?";

        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([
          $route->getParams()[2]
        ]);

        $stat = $dbObj->dbFetch("assoc");

        include( APP_VIEW .'/stats/statsSubNav.php' );
        include( APP_VIEW .'/stats/statView.php' );
        break;


    case 'view':
        $dbObj = new db();

        $sql = "SELECT
                  p.id AS player_id, p.jersey_num, p.player_name, p.bat_hand, p.throw_hand,
                  g.id AS game_id, g.game_date, g.home_team, g.away_team, g.home_score, g.away_score,
                  ps.id AS stat_id, ps.stat_name, pgs.id AS pgs_id, pgs.stat_value
                FROM
                  player_game_stats pgs
                JOIN
                  players p ON p.id = pgs.player_id
                JOIN
                  games g ON g.id = pgs.game_id
                JOIN
                  player_stats ps ON ps.id = pgs.stat_id
                WHERE
                  pgs.id = ?";

        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([
          $route->getParams()[2]
        ]);

        $stat = $dbObj->dbFetch("assoc");

        include( APP_VIEW .'/stats/statsSubNav.php' );
        include( APP_VIEW .'/stats/statView.php' );
        break;


    default:
        $dbObj = new db();

        $sql = "SELECT
                  p.id AS player_id, p.jersey_num, p.player_name, p.bat_hand, p.throw_hand,
                  g.id AS game_id, g.game_date, g.home_team, g.away_team, g.home_score, g.away_score,
                  ps.id AS stat_id, ps.stat_name, pgs.stat_value
                FROM
                  player_game_stats pgs
                JOIN
                  players p ON p.id = pgs.player_id
                JOIN
                  games g ON g.id = pgs.game_id
                JOIN
                  player_stats ps ON ps.id = pgs.stat_id
                ORDER BY
                  g.id, p.id";

        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([]);

        include( APP_VIEW .'/stats/statsSubNav.php' );
        include( APP_VIEW .'/stats/statsDefaultView.php' );
        break;

}


# Include html footer
include( APP_VIEW . '/footer.php' );
