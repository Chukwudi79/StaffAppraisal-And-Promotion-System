<form method="post" class="form-horizontal">
			<div class="col-md-10 " id="login_cont" style="border-right: 6px solid #8C2318; border-radius: 3px">
				<div class="panel  panel-danger" style="padding: 10px;">
						<?php $classObj->appraisalform(); ?>
					<div class="panel-heading">
						<h1 class="text-center">Fill Appraisal Form</h1>
						<h5 class="text-center"><small class="text-danger ">This form is of two phase click next to complete the form.</small></h5>
					</div>
					<div class="panel-body" id="prev">
						<div class="row" id="target">
							<div class="col-md-6">
									<div class="form-group">
								<select class="form-control opts" name="school">
									<option value="science">Science</option>
									<option value="hod">Engineering</option>
									<option value="comm_hod">Business</option>
								</select>
						</div>
						<div class="form-group">
								<select name="level" class="form-control opts">
								 	<option value="level1">Level 1</option>
								 	<option value="level2">Level 2</option>
								 	<option value="level3">Level 3</option>
								 	<option value="level4">Level 4</option>
								 	<option value="level5">Level 5</option>
								 	<option value="level6">Level 6</option>
								 	<option value="level7">Level 7</option>
								 	<option value="level8">Level 8</option>
								 	<option value="level9">Level 9</option>
								 	<option value="level10">Level 10</option>
								 	<option value="level111">Level 11</option>
								 	<option value="level12">Level 12</option>
								 	<option value="level13">Level 13</option>
								 	<option value="level14">Level 14</option>
								 	<option value="level15">Level 15</option>
								 	<option value="level16">Level 16</option>
								 </select>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<input type="number" name="salary" class="form-control opts" value="<?php //echo $l_name; ?>" placeholder="Present salary " autocomplete="0">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<span class="text-danger"><small >Date of assomption</small></span>
									<input type="date" name="d_o_a" class="form-control opts" value="<?php //echo $l_name; ?>" autocomplete="0">
								</div>
								<div class="col-md-6">
									<span class="text-danger"><small >Date of confirmation</small></span>
									<input type="date" name="d_o_c" class="form-control opts" value="<?php //echo $l_name; ?>" autocomplete="0">
								</div>
							</div>
						</div>
						<div class="form-group">
								<input type="text" name="qualif" class="form-control" value="<?php //echo $pass; ?>" placeholder="Qualification held with class" autocomplete="0">
						</div>
						<div class="form-group">
								<input type="text" name="awards" class="form-control" value="<?php //echo $pass; ?>" placeholder="Professional awards, honours, titles " autocomplete="0">
						</div>
						<div class="form-group">
								<input type="text" name="statusonfapp" class="form-control" value="<?php //echo $pass; ?>" placeholder="Status on first appointment " autocomplete="0">
						</div>
					</div>
						<fieldset class="col-md-6">
							<div class="col-md-12">
								<div class="form-group">
										<input type="text" name="admim_resp" class="form-control" value="<?php //echo $pass; ?>" placeholder="Administrative responsibility " autocomplete="0">
									</div>
                                   <div class="form-group">
                                       <textarea name="comment" id="comment" cols="" rows="4" class="form-control" placeholder="short note on administrative functions" title="Such as (Head of Division/Department/Unit, Chairman of Polytechnic Board/Committee, Secretary Polytechnic Board/Committee etc.)" style="resize:none;"></textarea>
                                   </div>
                                   <div class="form-group">
										<div class="col-md-6">
										<span class="text-danger"><small >Date of promotion if any</small></span>
										<input type="date" name="d_o_a" class="form-control opts" value="<?php //echo $l_name; ?>" autocomplete="0">
									</div>
									<div class="col-md-6">
										<span class="text-danger"><small >Grade to which promoted</small></span>
										<input type="text" name="g_w_p" class="form-control opts" value="<?php //echo $l_name; ?>" autocomplete="0">
									</div>
									</div>
                                   <div class="form-group">
                                       <textarea name="comment2" id="comment" cols="" rows="4" class="form-control" placeholder="Comment by staff hare" style="resize:none;"></textarea>
                                   </div>
                                   <div class="form-group">
										<input type="button" class="btn btn-lg btn-danger form-control next" value="NEXT" name="next" style="color: #fff; background: #8C2318">
									</div>
						</div>
						</fieldset>
				</div>
				<div class="row hidden" id="next">
		<fieldset class="col-md-6">
			
							<div class="col-md-12">
								<div style="border-left: 4px solid #8c2318; padding-left: 7px" class="alert-danger"> <p class="text-danger"> Provide links for proof of publication documents. <br> <small>share links from Google drive</small></p> </div>
								<div class="form-group">
										<label for="link1" class="control-label col-md-2 text-danger">Link1</label>
									<div class="col-md-10">
										<input type="text" name="p_link1" class="form-control" value="<?php //echo $pass; ?>" placeholder="Details of any publication here" autocomplete="0">
									</div>
								</div>
                                <div class="form-group">
										<label for="link2" class="control-label col-md-2 text-danger">Link2</label>
									<div class="col-md-10">
										<input type="text" name="p_link2" class="form-control" value="<?php //echo $pass; ?>" placeholder="Details of any publication here" autocomplete="0">
									</div>
								</div>
                                <div class="form-group">
										<label for="link3" class="control-label col-md-2 text-danger">Link3</label>
									<div class="col-md-10">
										<input type="text" name="p_link3" class="form-control" value="<?php //echo $pass; ?>" placeholder="Details of any publication here" autocomplete="0">
									</div>
								</div>
                                   <div class="form-group">
                                       <textarea name="comment3" id="comment" cols="" rows="4" class="form-control" placeholder="Alternative information on publications" style="resize:none;"></textarea>
                                   </div>
                                   <div class="form-group">
										<input type="button" class="btn btn-lg btn-danger form-control prev" value="PREV" name="prev" style="color: #fff; background: #8C2318">
									</div>
						</div>
						</fieldset>
						
						<fieldset class="col-md-6">
							<div class="col-md-12">
								<div style="border-left: 4px solid #8c2318; padding-left: 7px" class="alert-danger"> <p class="text-danger"> Provide links for proof of Administrative responsibility documents. <br> <small>share links from Google drive</small></p> </div>
								<div class="form-group">
										<label for="link1" class="control-label col-md-2 text-danger">Link1</label>
									<div class="col-md-10">
										<input type="text" name="adm_link1" class="form-control" value="<?php //echo $pass; ?>" placeholder="Proof of any Administrative here" autocomplete="0">
									</div>
								</div>
                                <div class="form-group">
										<label for="link2" class="control-label col-md-2 text-danger">Link2</label>
									<div class="col-md-10">
										<input type="text" name="adm_link2" class="form-control" value="<?php //echo $pass; ?>" placeholder="Proof of any Administrative here" autocomplete="0">
									</div>
								</div>
                                <div class="form-group">
										<label for="link3" class="control-label col-md-2 text-danger">Link3</label>
									<div class="col-md-10">
										<input type="text" name="adm_link3" class="form-control" value="<?php //echo $pass; ?>" placeholder="Proof of any Administrative here" autocomplete="0">
									</div>
								</div>
                                   <div class="form-group">
                                       <textarea name="comment4" id="comment" cols="" rows="4" class="form-control" placeholder="Alternative information on administrative function" style="resize:none;"></textarea>
                                   </div>
						</div>
						<div class="confirm col-md-12">
							<div class="col-md-2"><input type="checkbox" value="" class="form-control"> </div>
							<div class="col-md-10">
								<span class="text-danger" style="padding: 3"><small>I agree that all info provided are valid.  Enable Submit button</small></span> 
							</div>
						</div>
						</fieldset>
	</div>
				<div class="footer">
							<div class="form-group">
								<button class="btn btn-lg btn-danger form-control send" name="submit_app">Submit</button>
							</div>
						</div>
					</div>	
				</div>
			</div>
			</form>