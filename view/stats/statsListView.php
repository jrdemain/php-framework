
        <!-- page content -->
        <div class="col-md-9">
          <div class="pageContent">
            <h3>Player Stats</h3>
            <table class="table table-striped table-condensed">
              <thead>
                  <tr>
                    <th>Action</th>
                    <th>Game</th>
                    <th>Player</th>
                  <!--  <th>Jersey No</th> -->
                    <th>Stat Name</th>
                    <th>Stat Value</th>
                  </tr>
              </thead>
              <tbody>



<?php
  while($stats = $dbObj->dbFetch("assoc")) {
?>
        <tr>
          <td>
            <a class="btn btn-default btn-xs" href="<?php print APP_DOC_ROOT . '/stats/view/' . $stats['pgs_id']; ?>">View</a>
            <a class="btn btn-default btn-xs" href="<?php print APP_DOC_ROOT . '/stats/edit/' . $stats['pgs_id']; ?>">Edit</a>
          </td>
          <td>
            <a
              class="playerPopover"
              data-container="body"
              data-toggle="popover"
              data-placement="bottom"
              data-trigger="hover"
              title="Game Details"
              data-content="Game #: <?php print $stats['game_id']; ?> . Away: <?php print $stats['away_score']; ?> . Home: <?php print $stats['home_score']; ?>"
              href="#"
              tabindex="0">
                <?php print $stats['game_date']; ?>
            </a>
          </td>
          <td>
            <a
              class="playerPopover"
              data-container="body"
              data-toggle="popover"
              data-placement="bottom"
              data-trigger="hover"
              title="Player Details"
              data-content="Jersey Number: <?php print $stats['jersey_num']; ?> . Player ID: <?php print $stats['player_id']; ?>"
              href="#"
              tabindex="0">
                <?php print $stats['player_name'];  ?>
            </a>
          </td>
        <!--  <td><?php print $stats['jersey_num']; ?></td> -->
          <td>
            <a
              class="playerPopover"
              data-container="body"
              data-toggle="popover"
              data-placement="bottom"
              data-trigger="hover"
              title="Stat ID#"
              data-content="<?php print $stats['stat_id']; ?>"
              href="#"
              tabindex="0">
                  <?php print $stats['stat_name']; ?>
            </a>
        </td>
          <td><?php print $stats['stat_value']; ?></td>
        </tr>

<?php  }  ?>
              </tbody>
            </table>
          </div>
        </div>

        <!-- end page content -->
