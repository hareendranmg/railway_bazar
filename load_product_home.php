<?php
include 'connection.php';
$x=$_GET['x'];
$selt=mysql_query("select * from add_product where  loc like '%$x%' and st='0'");
if(mysql_num_rows($sel_district)>0)
{

while($r_district=mysql_fetch_row($sel_district))
{
    ?>

<div class="col-md-3">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
							
								</div>
								<div class="agile_top_brand_left_grid_pos">
									
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
                                                                                          
                                                                                            <p align="center" style="padding-top:15px;"> <a href=""><img style="width: 200px; height: 230px;" src="cover/<?php echo $r_district[5] ?>" width="80px" height="10px"alt=" " class="img-responsive"></a></p>  
                                                                                            <p align="center" style="color: #FC2B5F"><?php echo strtoupper($sel_district[1]) ?></p>
                                                                                                    
                                                                                                <p align="center">Author :<?php echo $r_district[2] ?></p>
                                                                                                 <p align="center">Category :
                                                                                                  <?php
                                $sel24=  mysql_query("select * from book_cat where id='$r_district[11]'");
                                $r3=  mysql_fetch_row($sel24);
                                        echo $r3[1];
                                ?>
                                                                                                 
                                                                                                 </p>
                                                                                                  <p align="center">Type :
                                                                                                                <?php
                                                                                                                 $sel24=  mysql_query("select * from book_typ where id='$r_district[12]'");
                                $r3=  mysql_fetch_row($sel24);
                                        echo $r3[1];
                                ?>
                                     
                                                                                                               
                                                                                                  
                                                                                                  </p>
                                                                                                  <p align="center"><a href="view_book_admin.php?b=<?php echo $r_district[0]?>"><span class="btn btn-danger">view more</span></a></p>
                                                                                                 
                                                                                                 
											</div>
											
										
                                                                                        
											</div>
									
									</figure>
								</div>
							</div>
						</div>
					</div>  
<?php
}

}
 else {
?>

<div  style="font-family: serif;color: #FC2B5F"><h1 align="center">SORRY NO BOOKS FOUNT</h1></div>
<?php
}
?>