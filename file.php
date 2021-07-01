
<?php
 echo "<h2>PHP is Fun!</h2>";
?>
<table id="myTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>no</th>
                    <th>host</th>
                    <th>url</th>
                    <th>web server</th>
					<th>fingerprint_sha256</th>
                    <th>response time</th>
					<th>technologies</th>
					<th>open port</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  	  <?php
				  $json = file_get_contents('jsontesting.json');
				  $json_data = json_decode($json,true);
				  //print_r($json_data);
				 // echo $json_data['tls-grab'][7]['tls_version'];
				  $no = 1;
				  foreach($json_data as $row) {
					 ?>
					
					  <td><?= $no ?></td>
					  
					  <td><?= $row['host'] ?></td>
					 
					  <td><?= $row['url'] ?></td>
					  <td><?= $row['webserver'] ?></td>
					  <td><?= $row['a'] ?></td>
				  <td><?= $row['tls-grab']['fingerprint_sha256'] ?></td>
					  <td><?= $row['response-time'] ?></td>
					  <td>
					  <?php
					  foreach($row['technologies'] as $test)
					 /*  if (!empty($test))
					  {
						  
						  echo $test;
					  } */
					 // elseif (empty($test))
					  {
						 
						 // echo $test;
						 ?>
						  <?= $test ?> |
						 
						 <?php
					  } 
					  ?>
					  </td>
					  
						
					 <tr>
					<?
					  $no++;
					}
					?>
                  </tr>
				  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                   <th>no</th>
                    <th>host</th>
                    <th>url</th>
                    <th>web server</th>
					<th>fingerprint_sha256</th>
                    <th>response time</th>
					<th>technologies</th>
						<th>open port</th>
                  </tr>
                  </tfoot>
                </table>