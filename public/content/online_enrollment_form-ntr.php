<style>
.margin-l-5px{
	margin-left:20px;
	}

</style>

<script type="text/javascript">
            $(function () {
                $('#datetimepicker2').datetimepicker({
                    locale: 'ru'
                });
            });
        </script>

 <div class="container">
  <div class="col-sm-10">
<form  role="form" name="contact" method="post" action="public/content/online_enrollment_handler.php">
					<table class="table">
                    
                    	 <tr>
                         <td valign="top"><label for="level">Level *</label></td>
                           <td> 
                          
                             	<select name="level">
                                     <option value="Nursery">Nursery</option>
                                     <option value="Kinder">Kinder</option>
                                     <option value="Grade 1">Grade 1</option>
                                     <option value="Grade 2">Grade 2</option>
                                     <option value="Grade 3">Grade 3</option>
                                     <option value="Grade 4">Grade 4</option>
                                     <option value="Grade 5">Grade 5</option>
                                     <option value="Grade 6">Grade 6</option>
                                     <option value="Grade 7">Grade 7</option>
                                     <option value="Grade 8">Grade 8</option>
                                     <option value="Grade 9">Grade 9</option>
                                     <option value="Grade 10">Grade 10</option>
                                     <option value="Grade 11">Grade 11</option>
                                     
                                     
  								</select>
                            </td>
 						</tr>
                    
                        <tr>
                            <td valign="top"><label for="first_name">First Name *</label></td>
                            <td valign="top"><input  type="text" name="first_name" maxlength="50" size="30"></td>
 						</tr>
                        
                        <tr>
 							<td valign="top"><label for="middle_name">Middle Name*</label></td>
 							<td valign="top"><input  type="text" name="middle_name" maxlength="50" size="30"></td>
 						</tr>
 
						<tr>
 							<td valign="top"><label for="last_name">Last Name *</label></td>
 							<td valign="top"><input  type="text" name="last_name" maxlength="50" size="30"></td>
 						</tr>
                        
                        
                        
                        
                        
                        
                        <tr>
                        	<td valign="top"><label for="date_of_birth">Date of Birth *</label></td>
                            <td valign="top">
                            	Month:
                            	<select name="month">
                                     <option value="January">January</option>
                                     <option value="February">February</option>
                                     <option value="March">March</option>
                                     <option value="April">April</option>
                                     <option value="May">May</option>
                                     <option value="June">June</option>
                                     <option value="July">July</option>
                                     <option value="August">August</option>
                                     <option value="September">September</option>
                                     <option value="October">October</option>
                                     <option value="November">November</option>
                                     <option value="December">December</option>
  								</select> 
                                Day:
                                <select name="day">
                                     <option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option>
                                     <option value="4">4</option>
                                     <option value="5">5</option>
                                     <option value="6">6</option>
                                     <option value="7">7</option>
                                     <option value="8">8</option>
                                     <option value="9">9</option>
                                     <option value="10">10</option>
                                     <option value="11">11</option>
                                     <option value="12">12</option>
                                     <option value="13">13</option>
                                     <option value="14">14</option>
                                     <option value="15">15</option>
                                     <option value="16">16</option>
                                     <option value="17">17</option>
                                     <option value="18">18</option>
                                     <option value="19">19</option>
                                     <option value="20">20</option>
                                     <option value="21">21</option>
                                     <option value="22">22</option>
                                     <option value="23">23</option>
                                     <option value="24">24</option>
                                     <option value="25">25</option>
                                     <option value="26">26</option>
                                     <option value="27">27</option>
                                     <option value="28">28</option>
                                     <option value="29">29</option>
                                     <option value="30">30</option>
                                     <option value="32">31</option> 
  								</select>
                                
                                
                                
                                
                                 Day:
                                <select name="year">
                                     <option value="1980">1980</option>
                                     <option value="1981">1981</option>
                                     <option value="1982">1982</option>
                                     <option value="1983">1983</option>
                                     <option value="1984">1984</option>
                                     <option value="1985">1985</option>
                                     <option value="1986">1986</option>
                                     <option value="1987">1987</option>
                                     <option value="1988">1988</option>
                                     <option value="1989">1989</option>
                                     <option value="1990">1990</option>
                                     <option value="1991">1991</option>
                                     <option value="1992">1992</option>
                                     <option value="1993">1993</option>
                                     <option value="1994">1994</option>
                                     <option value="1995">1995</option>
                                     <option value="1996">1996</option>
                                     <option value="1997">1997</option>
                                     <option value="1998">1998</option>
                                     <option value="1999">1999</option>
                                     <option value="2000">2000</option>
                                     <option value="2001">2001</option>
                                     <option value="2002">2002</option>
                                     <option value="2003">2003</option>
                                     <option value="2004">2004</option>
                                     <option value="2005">2005</option>
                                     <option value="2006">2006</option>
                                     <option value="2007">2007</option>
                                     <option value="2008">2008</option>
                                     <option value="2009r">2009</option>
                                     <option value="2010">2010</option>
                                     <option value="2011">2011</option>
                                     <option value="2012">2012</option>    
  								</select>
                                
                                </td>
                                </tr>
                        <tr>
                        	<td valign="top"><label for="age">Age *</label></td>
                            <td valign="top"><input  type="text" name="age" maxlength="2" size="1"></td>
                            
                        </tr>
         
        				 <tr>
                        	<td valign="top"><label for="place_of_birth">Place of Birth *</label></td>
                            <td valign="top"><input  type="text" name="place_of_birth" maxlength="300" size="80"></td>
                            
                        </tr>
                        
                         <tr>
                        	<td valign="top"><label for="nationlity">Nationality *</label></td>
                            <td valign="top"><input  type="text" name="nationality" maxlength="50" size="30"></td>
                            
                        </tr>
                        
                        
                                    <tr>
                        	<td valign="top"><label for="mother_tongue">Mother Tounge *</label></td>
                            <td valign="top">
                            	<select name="mother_tongue">
                                	<option>Cebuano</option>
                                    <option>English</option>
                                    <option>Tagalog</option>
                                    <option>Other></option>
                                </select> &nbsp;&nbsp;&nbsp;
                                
                                <label for="other_tongue"> Other </label> 
                                <input type="text" name="other_tongue" maxlength="50" size="30">
                            </td>
                        
                        </tr>
                        
                        
                        
                         <tr>
                        	<td valign="top"><label for="ethnic_group">Ethnic Group *</label></td>
                            <td valign="top">
                            	<select name="ethnic_group">
                                	<option>Bisaya</option>
                                    <option>Maranao</option>
                                    <option>Tagalog</option>
                                    <option>Other></option>
                                </select> &nbsp;&nbsp;&nbsp;
                                
                                <label for="other_ethnic"> Other </label> 
                                <input type="text" name="other_ethnic" maxlength="50" size="30">
                            </td>
                            </tr>
                            
                            <tr>
                                <td valign="top"><label for="present_address">Present Address *</label></td>
                                <td><input type="text" name="present_address" maxlength="300" size="80"></td>
            
                 			 </tr>
                             
                              <tr>
                                <td valign="top"><label for="incase_of_emergency">INCASE OF EMERGENCY</label></td>
                                <td></td>
                 			 </tr>
                             <tr>
                                <td valign="top"><label for="fathers_name">Father's Name</label></td>
                                <td>
                                    <input type="text" name="fathers_name" maxlength="50" size="30">
                                    &nbsp;&nbsp;&nbsp;<label for="occupation_father">Occupation:</label>
                                    <input type="text" name="occupation_father" maxlength="50" size="30">
                                </td>
                                
                 			 </tr>
                             
                              <tr>
                               	<td> <label for="mothers_name">Mother's Name</label></td>
                             	<td> 
                                  	<input type="text" name="mothers_name" maxlength="50" size="30">
                                  	&nbsp;&nbsp;&nbsp;<label for="occupation_mother">Occupation:</label>
                                  	<input type="text" name="occupation_mother" maxlength="50" size="30">
                              	</td>
                 			 </tr>
                             
                             
                             
                              <tr>
                                <td> <label for="maiden">Mother's Maiden</label></td>
                             	<td> 
                                  <input type="text" name="maiden" maxlength="50" size="30">
                              	</td>
                 			 </tr>
                             
                             
                          <tr>
                        	<td valign="top"><label for="telephone">Contact No *</label></td>
                            <td ><input  type="text" name="telephone" maxlength="50" size="30"></td>
                        </tr>
                        
                         <tr>
                        	<td valign="top"><label for="email">Email *</label></td>
                            <td ><input  type="text" name="email" maxlength="50" size="30"></td>
                        </tr>
                             
                        <tr>
                        	<td valign="top"><label for="parents_status">Parents Status *</label></td>
                            <td >
                            Living Together: <input type="radio" name="parents_status" value="Living Together" checked>&nbsp;&nbsp;&nbsp;
                            Separated: <input type="radio" name="parents_status" value="Living Together" >&nbsp;&nbsp;&nbsp;
                            Single Parent: <input type="radio" name="parents_status" value="Single Parent" >
                            </td>
                        </tr>
                        
                        
                          <tr>
                        	<td valign="top"><label for="child_living_status">Child Livig Status *</label></td>
                            <td >
                           	 	Living with Parents: <input type="radio" name="child_status" value="Living with Parents" checked>&nbsp;&nbsp;&nbsp;
                           		Living with Guardians: <input type="radio" name="child_status" value="Living with Guardians" >&nbsp;&nbsp;&nbsp;
                            	Living with Relatives: <input type="radio" name="child_status" value="Living with Relatives" >
                            </td>
                        </tr>
                          
                           <tr>
                                <td valign="top"><label for="prev_school">Previous School Attended *</label></td>
                                <td><input type="text" name="prev_school" maxlength="300" size="80"></td>
            
                 			 </tr>
                         
                        <tr>
                        	<td colspan="2" style="text-align:center"><input type="submit" value="Submit">&nbsp;&nbsp;&nbsp; <button type="reset" value="Reset">Reset</button></td>
                        </tr>
                         <tr>
                        	<td colspan="2" style="text-align:center"></td>
                        </tr>
                   	</table>
         		</form>
                </div><!--/col 8-->
                </div>