<?php 

class User
{
	   private $conn;
	 
	   public function __construct($connectionObject)
			{
				$this->conn = $connectionObject;
			}
	 
	   public function ForgotPassword($email)
	    {
	       try
	       {
	       	  $activationcode = $this->ActivationCode(62);
	          $q = $this->conn->prepare("SELECT * FROM users WHERE Email=:email LIMIT 1");
	          $q->execute(array(':email'=>$email));
	          $prow = $q->fetch(PDO::FETCH_ASSOC);
	          if($q->rowCount() > 0)
	          {
	          	 $q = $this->conn->prepare("UPDATE users SET ActivationCode=:activationcode WHERE Email=:email");
	          	 $q->execute(array(':activationcode'=>$activationcode, 
				   					':email'=>$email));

				  $acclev = $prow["AccessLevel"];
				  $fname = $prow["Fname"];
				  $id = $prow["ID"];

	             return $activationcode."&xid=".$id."&name=".$fname;
	          }
	          else
	          {
	          	return False;
	          }
	       }
	       catch(PDOException $e)
	       {
	           echo $e->getMessage();
	       }
	   }


	      public function ActivateUser($email, $userconfirm)
	    {
	       try
	       {
	       	  $activationcode = $this->ActivationCode(30);
	          $q = $this->conn->prepare("SELECT * FROM users WHERE Email =:email && ActivationCode=:userconfirm  LIMIT 1");
	          $q->execute(array(':email'=>$email,':userconfirm'=>$userconfirm));
	          $userRow=$q->fetch(PDO::FETCH_ASSOC);
	          if($q->rowCount() > 0)
	          {

	          	 $q = $this->conn->prepare("UPDATE users SET ActiveStatus = '2', ActivatedOn=:activatedon, 
	          	 	IPAddress =:ipaddress WHERE Email=:email");
	          	 $q->execute(array(':activatedon'=>date("Y-m-d G:i:s"),
	          	 					':email'=>$email,
	          	 					':ipaddress'=>$_SERVER["REMOTE_ADDR"]));
	             return true;
	          }
	          else
	          {
	          	return false;
	          }
	       }
	       catch(PDOException $e)
	       {
	           echo $e->getMessage();
	       }
	   }


	   public function ActivationCode($len)
	   {
		  $result = "";
		    $pickfrom = "1234567890abscefghijklmnopqrstuvwxyzABCDEFGHIJKMNOPQRSTUVWXYZ";
		    $charArray = str_split($pickfrom);
		    for($i = 0; $i < $len; $i++){
		    $randItem = array_rand($charArray);
		      $result .= "".$charArray[$randItem];
		    }
		    return $result;
		}
	 
	   public function isLoggedin()
	   {
	      if(isset($_SESSION['duid']))
	      {
	         return true;
	      }
	   }

	 
	   public function redirect($url)
	   {
	       header("Location: $url");
	   }

	 
	   public function logout()
	   {
	        session_destroy();
	        unset($_SESSION['duid']);
	        return true;
	   }
}

?>