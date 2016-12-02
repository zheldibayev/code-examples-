<?php
		include('dbcon.php');
		session_start();
		$email = $_POST['email'];
		$password = $_POST['password'];

			$query = $conn->query("SELECT * FROM members WHERE email='$email' AND password='$password'");
			$row = $query->fetch();
			$num_row = $query->rowcount();




		if( $num_row > 0 && $row['sex'] == 'manager') {

		$_SESSION['id']=$row['member_id'];
      //    header('Location: home.php');
            echo 'true';
		} elseif( $num_row > 0 && $row['sex'] == 'director'){

            $_SESSION['id']=$row['member_id'];
        //    header('Location: aza.php');
           echo 'tr';
        }

        else{
				echo 'false';
		}	
				
		?>