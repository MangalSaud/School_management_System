<?php
 namespace App\classes;
// use App\classes\Database;
	include("include/config.php");

	class AdminLogin{
		public function adminLogin($data){
			$connect=mysqli_connect("localhost","root","","school management");

			$uname=$data['username'];
			$pass=$data['password'];

			$sql="select * from login where username='$uname' and password='$pass'";
			if(mysqli_query($connect,$sql)){
				
				$queryResult=mysqli_query($connect,$sql);
				
				$admins=mysqli_fetch_assoc($queryResult);
				
				 if($admins){
					session_start();
					$_SESSION['username']=$admins['username'];
					$_SESSION['password']=$admins['password'];
					header("Location: home.php");
				}

				else{
					$massage="Wrong username or password";
					return $massage;
				}
			}
			else{
				die("Query problem".mysqli_error($connect));
			}

		}

		public function adminLogout(){
			session_start();

			unset($_SESSION['username']);
			unset($_SESSION['password']);

			header("Location: login.php");
		}
	}
?>