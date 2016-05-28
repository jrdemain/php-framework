
        <!-- page content -->
        <div class="col-md-9">
          <div class="pageContent">
            <h3>View Stat</h3>
            <hr>

            <div class="row">
              <div class="col-md-2">Game</div>
              <div class="col-md-4"><?php print $stat['away_team'] . ' vs. ' . $stat['home_team'] . ' : ' . $stat['game_date']; ?></div>
            </div>

            <div class="row">
              <div class="col-md-2">Score</div>
              <div class="col-md-4"><?php print $stat['away_score'] . ' - ' . $stat['home_score']; ?></div>
            </div>

            <div class="row">
              <div class="col-md-2">Player</div>
              <div class="col-md-4"><?php print $stat['player_name']; ?></div>
            </div>

            <div class="row">
              <div class="col-md-2">Jersey Number</div>
              <div class="col-md-4"><?php print $stat['jersey_num']; ?></div>
            </div>

            <div class="row">
              <div class="col-md-2">Stat</div>
              <div class="col-md-4"><?php print $stat['stat_name'] . ' : ' . $stat['stat_value']; ?></div>
            </div>

            <br>

            <a class="btn btn-primary" href="<?php print APP_DOC_ROOT . '/stats/edit/' . $stat['pgs_id']; ?>">Edit</a>

          </div>
        </div>
        <!-- end page content -->
