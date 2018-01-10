						<?php include("../connection.php");
						
						
						$result = mysql_query($query);
						$row = mysql_fetch_array($result);
						
						$rowCount = $row[0];
						
						$rowsPerPage = 6;
						
						$pageCount = ceil($rowCount/$rowsPerPage);
						
						if ($pageCount < 1) {$pageCount = 1;}
						
						$currentPage = 1;
						
						if (isset($_GET['pn']))
						{$currentPage = preg_replace ('%\D%','',$_GET['pn']);}
						
						if ($currentPage < 1) {$currentPage = 1;}
						else if ($currentPage > $pageCount) {$currentPage = $pageCount;}
						
						$limit = 'LIMIT' . ' ' . ($currentPage - 1)*$rowsPerPage . ',' . $rowsPerPage;
						?>