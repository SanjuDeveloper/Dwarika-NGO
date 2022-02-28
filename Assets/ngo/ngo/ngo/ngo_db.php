	<?php
			//echo "no syntex error";
		//date_default_timezone_set("Etc/GMT");
		//define('HOST',"160.153.129.34");
		define('DBUSER', "root");
		define('DBPASSWORD',"");
		define('HOST',"localhost");
		define('DBNAME',"ngo_db");
		
		define('URL', 'http://192.168.1.202/'); // constant keyword
		define('URLADMIN', 'http://192.168.1.202/admin/');
		define('URLADVERTISER', URL.'advertiser/');
		define('URLPUBLISHER', URL.'publisher/');
		class  ngo
		{
			protected $connection = null;			
			function __construct() 
			{
				$this->connection = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";",DBUSER, DBPASSWORD);
				 $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}			
			function __destruct() {
				$this->connection = null;
			}
			/*public function Connect()
			{		
				$this->connection = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";",DBUSER, DBPASSWORD);
				$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);				
			}*/
			public function Connect()
			{
				 $host="localhost";
				 //$host="160.153.129.34";
				 $dbname="ngo_db";
				 $username="root";
				 $password="";
				$this->connection = new PDO("mysql:host=$host;dbname=$dbname;",$username, $password);
				 $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			public function Close()
			{
				$this->connection = null;
			}	
			public function Get_User($filters="")
			{
				try
				{
					//$this->Connect();
					$query = $this->connection->prepare("SELECT * FROM user $filters");
					$query->execute();
					return $query;
				}catch(PDOException $e)
				{
					return $e;
				}
			}
			
			public function Get_Event($filters="")
			{
				try
				{
					//$this->Connect();
					$query = $this->connection->prepare("SELECT * FROM event $filters");
					$query->execute();
					return $query;
				}catch(PDOException $e)
				{
					return $e;
				}
			}
			
			public function Get_Gllery($filters="")
			{
				try
				{
					//$this->Connect();
					$query = $this->connection->prepare("SELECT * FROM gallery $filters");
					$query->execute();
					return $query;
				}catch(PDOException $e)
				{
					return $e;
				}
			}
			public function Create_Event($event_title,$event_description,$event_location,$event_date,$event_time,$event_image,$timestamp) 
			{
				//$this->Connect();
				try
				{
					$query = $this->connection->prepare("INSERT INTO event(event_title,event_description,event_location,event_date,event_time,event_image,timestamp) 
					VALUES (:event_title,:event_description,:event_location,:event_date,:event_time,:event_image,:timestamp)");
				
					
					$query->bindParam(':event_title',$event_title);
					$query->bindParam(':event_description',$event_description);
					$query->bindParam(':event_location',$event_location);
					$query->bindParam(':event_date',$event_date);
					$query->bindParam(':event_time',$event_time);
					$query->bindParam(':event_image',$event_image);
					$query->bindParam(':timestamp',$timestamp);
					$query->execute();
					$last_id = $this->connection->lastInsertId();
					return $last_id;

				}catch(PDOException $e)
				{
					return $e;
				}
			}
			
			public function Create_Gallery($image_one,$image_two,$image_three,$timestamp) 
			{
				//$this->Connect();
				try
				{
					$query = $this->connection->prepare("INSERT INTO gallery(image_one,image_two,image_three,timestamp) VALUES (:image_one,:image_two,:image_three,:timestamp)");
				
					
					$query->bindParam(':image_one',$image_one);
					$query->bindParam(':image_two',$image_two);
					$query->bindParam(':image_three',$image_three);
					$query->bindParam(':timestamp',$timestamp);
					
					$query->execute();
					$last_id = $this->connection->lastInsertId();
					return $last_id;

				}catch(PDOException $e)
				{
					return $e;
				}
			}
			
			
			
			public function Delete_Event($filter)// -----------  new  function ---------
			{
				try
				{
					$query = $this->connection->prepare("DELETE  FROM event $filter");
					$query->execute();
					return true;
				}
				catch(PDOException $e)
				{
					return $e;
				}
			}
			
			public function Update_Property($p_id,$product_variant,$primary_varient)
			{
				
				try
				{
					$query = $this->connection->prepare("UPDATE property SET product_variant='".$product_variant."',primary_varient='".$primary_varient."' WHERE  p_id='".$p_id."'");
					$query->execute();
					return true;
			
				}
				catch(PDOException $e)
				{
					return $e;
				}
			}
			
			
		   /* 
		   public function Update_Buyer_Revenue($c_id,$rest_revenue,$total_revenue)
			{
				//$this->Connect();
				try
				{
					$query = $this->connection->prepare("UPDATE campaign SET total_revenue=".$total_revenue.",rest_revenue=".$rest_revenue." WHERE c_id='".$c_id."'");
					$query->execute();
					return true;
				}
				catch(PDOException $e)
				{
					return $e;
				}
				
			}
			
		 */
		}
		
		?>