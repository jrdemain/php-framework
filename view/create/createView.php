
        <!-- page content -->
        <div class="col-md-9">
          <div class="well pageContent">
           <form method="post" action="<?php print APP_DOC_ROOT . '/home/newPlayer'; ?>">
            <div class="form-group">
              <label for="">Jersey Number</label>
              <input type="text" class="form-control" id="jersey_num" name = "jersey_num" placeholder="Enter a number 1 to 100">
            </div><div class="form-group">
              <label for="">Player Name</label>
              <input type="text" class="form-control" id="player_name" name = "player_name" placeholder="Enter the players first name">
            </div>
            <div class="form-group">
              <label for="">Batting Hand</label>
              <input type="text" class="form-control" id="bat_hand" name = "bat_hand" placeholder="Enter R, L, or SW">
            </div>
            <div class="form-group">
              <label for="">Throwing Hand</label>
              <input type="text" class="form-control" id="throw_hand" name = "throw_hand" placeholder="Enter R, L, or SW">
            </div>

            <button type="submit" name = "submit" class="btn btn-default">Submit</button>
          </form>


          </div>
        </div>
        <!-- end page content -->
