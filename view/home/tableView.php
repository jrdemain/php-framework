
        <!-- page content -->
        <div class="col-md-9">
          <div class="well pageContent">
            <table class="table-striped table-condensed">
              <thead>
                  <tr>
                    <th>Jersey Number</th>
                    <th>Player Name</th>
                    <th>Batting Hand</th>
                    <th>Throwing Hand</th>
                  </tr>
              </thead>
              <tbody>



<?php
  while($players = $dbObj->dbFetch("assoc")) {
?>
        <tr>
          <td><?php print $players['jersey_num']; ?></td>
          <td>
            <a
              class="playerPopover"
              data-container="body"
              data-toggle="popover"
              data-placement="top"
              data-trigger="hover"
              title="Player Details"
              data-content="Player ID: <?php print $players['id']; ?>"
              href="#"
              tabindex="0">
               <?php print $players['player_name'];  ?>
            </a>
          </td>
          <td><?php print $players['bat_hand']; ?></td>
          <td><?php print $players['throw_hand']; ?></td>
        </tr>

<?php  }  ?>


              </tbody>
            </table>
          </div>
        </div>
        <!-- end page content -->
