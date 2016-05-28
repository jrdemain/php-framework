
        <!-- page content -->
        <div class="col-md-9">
          <div class="pageContent">
            <h3>Edit Stat</h3>
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

            <form method="post" action="<?php print APP_DOC_ROOT . '/stats/update/' . $stat['pgs_id']; ?>">
              <div class="row">
                <div class="col-md-2"><label for="name"><?php print $stat['stat_name']; ?></label></div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="statValue" name="statValue" placeholder="Stat" value="<?php print $stat['stat_value']; ?>">
                </div>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>

          </div>
        </div>
        <!-- end page content -->
