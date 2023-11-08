			    <script language = "php">
					$server ="localhost";
					$login = "root";
					$pass = "";
					$name = "Events";

					$link = mysqli_connect($server,$login,$pass,$name);
					if($link == False)
					{
						echo "ERROR!!!";
					}

					$result = mysqli_query($link,"SELECT * FROM `Events52`");
					$goods = mysqli_fetch_assoc($result);
						
					while($goods = mysqli_fetch_assoc($result))
					{
		    	<div class="honeycomb">
		    		<div class="honey">
		    			<div class="honey_left">
		    			    <p>
							<?php   echo $goods['tilte'];echo "\n\n";echo $goods['OPI']; ?>
		    			    </p>
		    			</div>
		    			<div class="honey_right">
					    <?php   echo $goods['time']; ?>
		    			</div>
		    		</div>
		    		<a href="osnova.html">
		    		    <button type="submit" class="comb">
                    	    <p style="color: black">
                                Записаться
                            </p>
                        </button>
                    </a>
		    	</div>
		            }
				</script>