<?php 
	include 'multiuser.php';
	class appraise{
		public $conn, $db_select, $row, $query, $datalookup, $position;
		public $fname,$lname,$oname,$email,$password,$con_password,$phone,$gender,$role,$status,$dept,$date_reg,$cookieName,$get_username,$get_password;
		public $school,$p_post,$salary,$doa,$doc,$qulification,$award,$admin_resp,$s_note,$dop,$gtowp,$s_comment,$u_email,$link1,$link2,$link3,$p_link1,$p_link2,$p_link3,$comment_admin_resp,$comment_publi,$id,$staffdetail;
		function connection(){
			$this->conn = mysqli_connect('localhost', 'root', '');
			$this->db_select = mysqli_select_db($this->conn, 'appraisal');
			if(!$this->conn){
				echo "Error connecting to database contact admim. ";
			}
			//return $this->conn;
		}

		function userReg(){
			if (isset($_POST['signup'])) {
				$this->fname = $_POST['fname'];
				$this->lname = $_POST['lname'];
				$this->oname = $_POST['othname'];
				$this->email = $_POST['email'];
				$this->password = $_POST['password'];
				$this->con_password = $_POST['conf_pass'];
				$this->gender = $_POST['gender'];
				$this->phone = $_POST['phone'];
				$this->role = $_POST['role'];
				$this->status = 'null';
				$this->dept = $_POST['dept'];
				$this->date_reg = date("Y-m-d H:i:s");
				
				if ($this->password == $this->con_password) {											

					$this->query = mysqli_query($this->conn,"
						INSERT INTO users(`fname`,`lname`,`oname`,`email`,`password`,`gender`,`phone`,`role`,`status`,`dept`,`date_reg`) VALUES('$this->fname','$this->lname','$this->oname','$this->email','$this->password','$this->gender','$this->phone','$this->role','$this->status','$this->dept','$this->date_reg');

					");
					echo '<div class="alert alert-success alert-dismissible" role="alert" style="border-radius:3px; border-left:5px solid lightgreen;">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Information!</strong> Register successfully.
		</div>';
				}else{
					echo '<div class="alert alert-info alert-dismissible" role="alert" style="border-radius:3px; border-left:5px solid lightblue;">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Information!</strong> Password miss match.
		</div>';
				}
			}
		} //end of user registration function

		function userLogin(){
			if (isset($_POST['login'])) {
				if (!empty($_POST['email']) && !empty($_POST['password'])) {

					$this->get_username = mysqli_escape_string($this->conn, $_POST['email']);
					$this->get_password = mysqli_escape_string($this->conn, $_POST['password']);

					if ($this->query = mysqli_query($this->conn, "SELECT * FROM `users` WHERE `email` = '$this->get_username' AND `password` = '$this->get_password'")) {
							$getpage = multiusers($this->conn, $this->get_username, $this->get_password);
							if ($this->row = mysqli_fetch_assoc($this->query)) {
								if (mysqli_num_rows($this->query) == 1) {
								$this->cookieName = "user";
								$cookieValue = $this->row['email'];
								setcookie($this->cookieName, $cookieValue, time() + (86400 * 2), "/");
								header("location:".$getpage);

							}else{
								echo "database error";
							}
						}else{
							echo '<div class="alert alert-danger">Incorrect Login Details</div>';
							$email = $_POST['email'];
							$pass = $_POST['password'];
						}
					}

				}else{
					echo '<div class="alert alert-info">Username & Password can\'t be empty.</div>';
				}
			}
		}

  		
		function appraisalform(){
			if (isset($_POST['submit_app'])) {
				$this->school = $_POST['school'];
				$this->p_post = $_POST['level'];
				$this->salary = $_POST['salary'];
				$this->doa = $_POST['d_o_a'];
				$this->doc = $_POST['d_o_c'];
				$this->qulification = $_POST['qualif'];
				$this->award = $_POST['awards'];
				$this->status_on_fapp = $_POST['statusonfapp'];
				$this->admin_resp = $_POST['admim_resp'];
				$this->s_note = $_POST['comment'];
				$this->dop = $_POST['d_o_a'];
				$this->gtowp = $_POST['g_w_p'];
				$this->s_comment = $_POST['comment2'];
				//p_link1 p_link2 p_link3 comment3
				$this->u_email = $_COOKIE['user'];

				$this->p_link1 = $_POST['p_link1'];
				$this->p_link2 = $_POST['p_link2'];
				$this->p_link3 = $_POST['p_link3'];
				$this->comment_publi  = $_POST['comment3'];
				//adm_link1 adm_link2 adm_link3 comment4
				$this->link1 = $_POST['adm_link1'];
				$this->link2 = $_POST['adm_link2'];
				$this->link3 = $_POST['adm_link3'];
				$this->comment_admin_resp = $_POST['comment4'];

				if (!empty($this->school) && !empty($this->dop)) {											
					$this->query = mysqli_query($this->conn,"
						INSERT INTO staffdetail(`school`,`p_post`,`salary`,`doa`,`doc`,`qulification`,`award`,`admin_resp`,`statusonfapp`,`s_note`,`dop`,`gtowp`,`s_comment`,`u_email`) VALUES('$this->school','$this->p_post','$this->salary','$this->doa','$this->doc','$this->qulification','$this->award','$this->admin_resp','$this->status_on_fapp','$this->s_note','$this->dop','$this->gtowp','$this->s_comment','$this->u_email');
							");

						$this->query = mysqli_query($this->conn,"
							INSERT INTO publication(`u_email`,`p_link1`,`p_link2`,`p_link3`,`commet_pub`) VALUES('$this->u_email','$this->p_link1','$this->p_link2','$this->p_link3','$this->comment_publi');
						");

						$this->query = mysqli_query($this->conn,"
							INSERT INTO others(`u_email`,`school`,`link1`,`link2`,`link3`,`comment_admin`) 
										VALUES('$this->u_email','$this->school','$this->link1','$this->link2','$this->link3','$this->comment_admin_resp');
						");

						$this->query = mysqli_query($this->conn,"UPDATE `users` SET `status` = 'waiting' WHERE `users`.`email` = '$this->u_email'");

					echo '<div class="alert alert-success alert-dismissible" role="alert" style="border-radius:3px; border-left:5px solid lightgreen;">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Information!</strong> Applictation submitted successfully.
		</div>';
				}else{
					echo '<div class="alert alert-info alert-dismissible" role="alert" style="border-radius:3px; border-left:5px solid lightblue;">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Information!</strong> Check to fill each form appriopratly.
		</div>';
				}
			}
			return $this->u_email;
		} //end of appraisalform function here 

		function hodView(){
			$this->query = "SELECT * FROM users WHERE status = 'waiting'";
			$this->datalookup = mysqli_query($this->conn, $this->query);
			while($this->row = mysqli_fetch_assoc($this->datalookup)){
				echo ' 
					<tr>
						<td class="text-danger">'.$this->row["id"] .'</td>
						<td class="text-danger">'.$this->row["fname"] .'</td>
						<td class="text-danger">'.$this->row["lname"] .'</td>
						<td class="text-danger">'.$this->row["oname"] .'</td>
						<td class="text-danger">'.$this->row["gender"] .'</td>
						<td class="text-danger">'.$this->row["email"] .'</td>
						<td class="text-danger"><a href="view.php?position='.$this->row["id"].'" class="btn btn-info btn-xs">View</a></td>
						<td class="text-danger"><a href="recommend.php?position='.$this->row["id"].'" class="btn btn-success btn-xs">Recommed</a></td>
						<td class="text-danger"><a href="withhold.php?position='.$this->row["id"].'" class="btn btn-danger btn-xs">Pending</a></td>
					</tr>
				';
			}

			//<a href="delete.php?position='.$this->row["sid"].'" class="btn btn-danger btn-xs">

			// printf($this->row); fname 
		}

		function mgtView(){
			$this->query = "SELECT * FROM users WHERE status = 'recommended'";
			$this->datalookup = mysqli_query($this->conn, $this->query);
			while($this->row = mysqli_fetch_assoc($this->datalookup)){

				echo ' 
					<tr>
						
						<td class="text-danger">'.$this->row["id"] .'</td>
						<td class="text-danger">'.$this->row["fname"] .'</td>
						<td class="text-danger">'.$this->row["lname"] .'</td>
						<td class="text-danger">'.$this->row["oname"] .'</td>
						<td class="text-danger">'.$this->row["gender"] .'</td>
						<td class="text-danger">'.$this->row["email"] .'</td>
						<td class="text-danger"><a href="view.php?position='.$this->row["email"].'" class="btn btn-info btn-xs">View</a></td>
						<td class="text-danger"><a href="approval.php?position='.$this->row["email"].'&level=" class="btn btn-success btn-xs" id="approve">Approve</a></td>						
						<td class="text-danger"><a href="withhold.php?position='.$this->row["email"].'" class="btn btn-danger btn-xs">Pending</a></td>
					</tr>
				';
			}

			// printf($this->row); fname 
		}

		function viewStaffDetails(){
			if (isset($_GET['position'])){
				$position = $_GET['position'];
				$sql = mysqli_query($this->conn, "SELECT * FROM users WHERE id = '$position'");
				$touple = mysqli_fetch_assoc($sql);
				$this->email = $touple['email'];

			$this->query = "SELECT * FROM users,staffdetail,publication,others WHERE users.email = '$this->email' AND users.email = staffdetail.u_email AND staffdetail.u_email = publication.u_email AND staffdetail.u_email = others.u_email";
			$this->datalookup = mysqli_query($this->conn, $this->query);
			$this->row = mysqli_fetch_assoc($this->datalookup);
			$fullname = $this->row['fname'].' '.$this->row['lname'].' '.$this->row['oname'];
			if($this->row == ""){
				echo "sorry nothing was fetched";
			}else{
				echo '
					<div class="row">
								<div class="col-md-4">
									<fieldset>
										<legend class="text-danger">Personal Information</legend>
										<div class="col-md-12">
											<ul style="color: #8C2318; list-style: none;">
												<li>Fullname: '.$fullname.'</li>
												<li>Dept: '.$this->row['dept'].'</li>
												<li>School: '.$this->row['school'].'</li>
												<li>Present_Post: '.$this->row['p_post'].'</li>
												<li>Present_Salary: '.$this->row['salary'].'</li>
												<li>D_of_assumpt: '.$this->row['doa'].'</li>
												<li>D_of_confirm: '.$this->row['doc'].'</li>
												<li>Qualific: '.$this->row['qulification'].'</li>
												<li>Prof_Award: '.$this->row['award'].'</li>
												<li>Status_of_appt: '.$this->row['status'].'</li>
											</ul>
										</div>
									</fieldset>
								</div>
								<div class="col-md-4">
									<fieldset>
										<legend class="text-danger">Administrative Responsibility</legend>
										<div class="col-md-12">
											<ul style="color: #8C2318; list-style: none;">
												<li>Admin_Respons: '.$this->row['admin_resp'].'</li>
												<li>D_of_promotion_if_any: '.$this->row['dop'].'</li>
												<li>G_to_which_promoted: '.$this->row['gtowp'].'</li>
												<li>Note on admin function <span class="btn btn-xs btn-danger" id="adfunct">click</span></li>
												<li>Saff Comment <span class="btn btn-xs btn-danger" id="staffcom">click</span></li>
											</ul>
											<p class="hidden text-justify"  id="adminf" style="background: #7a7a7a; padding: 4px; border-left: 3px solid #8C2318" id="admin">
												<strong class="text-underline"> Note on admin function <br></strong>
												'.$this->row['s_note'].'</p>
											<p class="text-justify" id="staff" style="background: #7a7a7a; padding: 4px; border-left: 3px solid #8C2318" id="staffComt">
												<strong class="text-underline"> Saff Comment <br> </strong>
												'.$this->row['s_comment'].'</p>
										</div>
									</fieldset>
								</div>
								<div class="col-md-4">
									<fieldset>
										<legend class="text-danger">Uploaded Links </legend>
										<div class="col-md-12">
										<div style="border-left: 4px solid #8c2318; padding-left: 7px" class="alert-danger"> <p class="text-danger"> Links for proof of publication <br> <small>share links from Google drive</small></p> </div>
											<ul style="color: #8C2318; list-style: none;">
												<li>Link1 : '.$this->row['p_link1'].'</li>
												<li>Link2 : '.$this->row['p_link2'].'</li>
												<li>Link3 : '.$this->row['p_link3'].'</li> 
											</ul>
											<div style="border-left: 4px solid #8c2318; padding-left: 7px" class="alert-danger"> <p class="text-danger"> Links for proof of other functions <br> <small>share links from Google drive</small></p> </div>
											<ul style="color: #8C2318; list-style: none;">
												<li>Link1 : '.$this->row['link1'].'</li>
												<li>Link2 : '.$this->row['link2'].'</li>
												<li>Link3 : '.$this->row['link3'].'</li> 
											</ul>
										</div>
									</fieldset>
								</div>
							</div>

				';			
			}	
			}	
			return $this->email;

		} //end of viewStaff function 

	} //end of appraisal class
	// $use = new appraise;
	// $use->connection();
	// $use->viewStaff();	
 ?>