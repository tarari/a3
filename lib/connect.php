<?php
	// PDO Abstraction layer

	function connectDB($dsn,$usr,$pass){

		try{
			$db=new PDO($dsn,$usr,$pass);
			}
			catch(PDOException $e){
				$errors[]=$e->getMessage();
				echo $e->getMessage();
				$db=null;
			}
		return $db;
	}
	//query($d,'SELECT  * FROM user WHERE email=:email AND pass=:pass',[':email'=>$email,':pass'=>$pass])
	function query($db,$sql,$params){
		$stmt=$db->prepare($sql);
		if($params){
			$res=$stmt->execute($params);
		}else{
			$res=$stmt->execute();
		}
		return $stmt;	
	}
	/**
	*  returns array results
	* 	$stmt object
	*/
	function row_extract($stmt){
		//after query please
		$rows=$stm->fetchAll();
		return $rows;
	}