<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Send Mail Using Php</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.css">
		<style>
			label{
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row bg-dark">
				<div class="col-md-12 p-5">
					<h3 class="text-white"> Send Mail Using php in Outlook</h3>
				</div>
			</div>
			<div class="row justify-content-center mt-5">
				<div class="col-md-6">
					<div class="card shadow">
						<div class="card-body">
							<form action="#" method="post">
								<label for="">To:</label>
								<div class="form-group">
									<input type="text" name="name" class="form-control" placeholder="Enter Send to mail" >
								</div>
								<label for="">Subject:</label>
								<div class="form-group">
									<input type="email" name="mail" class="form-control" placeholder="Enter Send to mail" >
								</div>
								<label for="">Massege:</label>
								<div class="form-group">
									<input type="text" name="msg" class="form-control" placeholder="Enter Send to mail" >
								</div>
								<div class="form-group text-right">
									<button type="submit" name="mail" class="btn btn-dark font-weight-bold">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_post['mail']))
{
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';




 $mail = new PHPMailer();

 $mail->isSMTP();
 $mail->Host =" smtp-mail.outlook.com.";
 $mail->SMTPAuth = "true";
 $mail->SMTPSecure ="tls";
 $mail->Port ="587";
 $mail->Username ="saravananrio75@outlook.com";
 $mail->Password="@qwerty9876";
 $mail->Subject="Test email";
 $mail->setFrom("saravananrio75@outlook.com");
 $mail->Body='fhbfsdg';
 $mail->addAddress("bernaldarwin@gmail.com");
 $mail->addReplyTo("alexibus4@gmail.com");
 $mail->send();
 if(!$mail->Send())
			   {
			    ?>
					<script>
						swal("Mail Not Send", "You clicked the button!", "error");
					</script>
                    
		 		<?php
               }
			   else
			   {
			      ?>
			      <script>
			        sweetAlert(
			              {
			                  title: "Thanks for contact us..",
			                  text: "Just wait for the email!",
			                  type: "success"
			              },

			          function () {
			              window.location.href = 'index.php';
			          });
			      </script>
 <?php
 $mail->smtpClose();

                    }
}

?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>