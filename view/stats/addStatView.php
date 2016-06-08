
        <!-- page content -->
        <div class="col-md-9">
          <div class="well pageContent">
           <form method="post" action="<?php print APP_DOC_ROOT . '/stats/newStat'; ?>">
            <div class="form-group">
              <label for="">Game Number</label>
              <input type="text" class="form-control" id="game_id" name = "game_id" placeholder="Enter the game id #">
            </div><div class="form-group">
              <label for="">Player</label>
              <input type="text" class="form-control" id="player_id" name = "player_id" placeholder="Enter the players id #">
            </div>
            <div class="form-group">
              <label for="">Stat Name</label>
              <input type="text" class="form-control" id="stat_id" name = "stat_id" placeholder="Enter the Stat ID #">
            </div>
            <div class="form-group">
              <label for="">Value</label>
              <input type="text" class="form-control" id="stat_value" name = "stat_value" placeholder="Enter the Stat Value">
            </div>

            <button type="submit" name = "submit" class="btn btn-default">Submit</button>
          </form>


          </div>
        </div>
        <!-- end page content -->
