<?php 
require_once FILE_ACCESS_CORE_CODE.'/Modules/Database/starfishDatabase.php';
require_once 'route.php';

class routes
{
	private $array_of_routes;
	private $page_id;
	
//-------------------------------------------------------------------------------------------------	

	public function __get($field)
	{
//-------------------------------------------------------------------------------------------------	
			$sql = "SELECT
			foreach($results as $result)
				$this->array_of_routes[] = $route;
		}
		catch(PDOException $pdoe)
		{
			throw new Exception($pdoe);
		}
	}
	
//-------------------------------------------------------------------------------------------------

	public function selectByPageID()
	{
		try
		{
			$pdo_connection = starfishDatabase::getConnection();
				
			$sql = "SELECT
						*
					FROM
						routes r
					WHERE
						page_id = :page_id
					";
				
			$pdo_statement = $pdo_connection->prepare($sql);
			$pdo_statement->bindParam(':page_id', $this->page_id, PDO::PARAM_STR);
			$pdo_statement->execute();
			
			foreach($results as $result)
			{
				$route = new route();
				
				$route->__set('route_id', $result['route_id']);
				$route->__set('permalink', $result['permalink']);
				$route->__set('page_id',  $result['page_id']);
				
				$this->array_of_routes[] = $route;
			}
		}
		catch(PDOException $pdoe)
		{
			throw new Exception($pdoe);
		}
	}
}
?>