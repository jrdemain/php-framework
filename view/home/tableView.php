
        <!-- page content -->
        <div class="col-md-9">
          <div class="well pageContent">
            <table class="table-striped table-condensed">
              <thead>
                  <tr>
                    <th>Number</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Batting R/L/Switch</th>
                    <th>Throwing Hand R/L</th>
                  </tr>
              </thead>
              <tbody>



<?php
  while($players = $dbObj->dbFetch("assoc")) { 
?>
        <tr>
          <td><?php print $players['jersey_num']; ?></td>
          <td><?php print $players['last_name'];  ?></td>
          <td><?php print $players['first_name']; ?></td>
          <td><?php print $players['bat_hand']; ?></td>
          <td><?php print $players['throw_hand']; ?></td>
        </tr>

<?php  }  ?>


              </tbody>
            </table>
          </div>
        </div>
        <!-- end page content -->
