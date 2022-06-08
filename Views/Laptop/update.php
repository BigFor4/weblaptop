<?php require_once('./Views/header.php');?>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card" style="margin-top:100px;">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Create Laptop</h4>
                 
                </div>
                <div class="wrapper wrapper--w680">
            <div class="">
                <div class="card-body">
                    
                    <form method="POST" id="create">
                       	<div class="row" >
                        	<div class="col-md-6">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">Name<span class="text-danger">*</span></label>
                                  <input id="name"  type="text" class="form-control" name="name"  value="<?=$listLaptop[0]['name']?>" >
                               </div>
                        	</div>
                        	<div class="col-md-3">
                                 <div class="form-group">
                                     <label style="font-size:20px;color:black;">Type<span class="text-danger">*</span></label>
                                     <select name="type" id="type" class="form-control">
                                     	  <?php 
                                         foreach($listType as $ls)
                                             if($listLaptop[0]['type'] == $ls['id'])
                                             {
                                                 echo '<option value = "'.$ls['id'].'">'.$ls['name'].'</option>';
                                             }
                                             
                                         ?>
                                         <?php 
                                         foreach($listType as $ls)
                                             echo '<option value = "'.$ls['id'].'">'.$ls['name'].'</option>';
                                         ?>
                                        
                                       </select>
                                 </div>
                 		  </div>
                        	<div class="col-md-3">
                                 <div class="form-group">
                                     <label style="font-size:20px;color:black;">Ram<span class="text-danger">*</span></label>
                                     <select name="ram" id="ram" class="form-control" >
                                     	 <option value="<?=$listLaptop[0]['ram']?>"><?=$listLaptop[0]['ram']?></option>
                                         <option value="4GB">4GB</option>
                                         <option value="8GB">8GB</option>
                                         <option value="16GB">16GB</option>
                                         <option value="32GB">32GB</option>
                                         <option value="64GB">64GB</option>
                                         <option value="128GB">128GB</option>
                                        
                                       </select>
                                 </div>
                 		  </div>
                        	<div class="col-md-3">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">CPU<span class="text-danger">*</span></label>
                                  <input id="cpu"  type="text" class="form-control" name="cpu"  value="<?=$listLaptop[0]['cpu']?>" >
                               </div>
                        	</div>
                        	<div class="col-md-3">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">Màn Hình<span class="text-danger">*</span></label>
                                  <input id="manhinh"  type="text" class="form-control" name="manhinh"   value="<?=$listLaptop[0]['manhinh']?>">
                               </div>
                        	</div>       
                        	<div class="col-md-3">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">Card<span class="text-danger">*</span></label>
                                  <input id="card"  type="text" class="form-control" name="card"   value="<?=$listLaptop[0]['card']?>" >
                               </div>
                        	</div>
                        	<div class="col-md-3">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">Trọng lượng<span class="text-danger">*</span></label>
                                  <input id="trongluong"  type="text" class="form-control" name="trongluong"   value="<?=$listLaptop[0]['trongluong']?>">
                               </div>
                        	</div>        
                        	 <div class="col-md-3">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">Kich thuoc<span class="text-danger">*</span></label>
                                  <input id="kichthuoc"  type="text" class="form-control" name="kichthuoc"   value="<?=$listLaptop[0]['kichthuoc']?>">
                               </div>
                        	</div>     
                        	<div class="col-md-3">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">Bảo Hành<span class="text-danger">*</span></label>
                                 <select name="baohanh" id="baohanh" class="form-control">
                                 	 <option value="<?=$listLaptop[0]['baohanh']?>"><?=$listLaptop[0]['baohanh']?></option>
                                     <option value="6">6 tháng</option>
                                     <option value="7">7 tháng</option>
                                     <option value="8">8 tháng</option>
                                     <option value="9">9 tháng</option>
                                     <option value="10">10 tháng</option>
                                     <option value="11">11 tháng</option>
                                     <option value="12">12 tháng</option>
                                     <option value="13">13 tháng</option>
                                     <option value="14">14 tháng</option>
                                     <option value="15">15 tháng</option>
                                     <option value="16">16 tháng</option>
                                     <option value="17">17 tháng</option>
                                     <option value="18">18 tháng</option>
                                 </select>
                               </div>
                        	</div>     
                        	<div class="col-md-6">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">Xuất Xứ<span class="text-danger">*</span></label>
                                 <select name="xuatxu" id="xuatxu" class="form-control">
                                 		<option value="<?=$listLaptop[0]['xuatxu']?>"><?=$listLaptop[0]['xuatxu']?></option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antartica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo">Congo, the Democratic Republic of the</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                        <option value="Croatia">Croatia (Hrvatska)</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="France Metropolitan">France, Metropolitan</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                        <option value="Holy See">Holy See (Vatican City State)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran (Islamic Republic of)</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao">Lao People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia, Federated States of</option>
                                        <option value="Moldova">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                        <option value="Saint LUCIA">Saint LUCIA</option>
                                        <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                        <option value="Span">Spain</option>
                                        <option value="SriLanka">Sri Lanka</option>
                                        <option value="St. Helena">St. Helena</option>
                                        <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syrian Arab Republic</option>
                                        <option value="Taiwan">Taiwan, Province of China</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Viet Nam</option>
                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                        <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                        <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Zambia">Zambia</option>
                           				<option value="Zimbabwe">Zimbabwe</option>
                                 </select>
                               </div>
                        	</div>     
                       		<div class="col-md-3">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">Hệ điều hành<span class="text-danger">*</span></label>
                                 <select name="hedieuhanh" id="hedieuhanh" class="form-control">
                                 	 <option value="<?=$listLaptop[0]['hedieuhanh']?>"><?=$listLaptop[0]['hedieuhanh']?></option>
                                     <option value="Window 10">Window 10</option>
                                     <option value="Window 8">Window 8</option>
                                     <option value="Windows 7">Windows 7</option>
                                     <option value="Window XP">Window XP/option>
                                     <option value="Apple OS/Macintosh">Apple OS/Macintosh</option>
                                     <option value="Linux">Linux</option>
                                 </select>
                               </div>
                        	</div>   
                        	 <div class="col-md-3">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">Giá Tiền<span class="text-danger">*</span></label>
                                  <input id="price"  type="text" class="form-control" name="price"  value="<?=$listLaptop[0]['price']?>">
                               </div>
                        	</div>      
                          <div class="col-md-3">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">Giảm giá<span class="text-danger">*</span></label>
                                  <input id="giamgia"  type="text" class="form-control" name="giamgia"  value="<?=$listLaptop[0]['giamgia']?>">
                               </div>
                        	</div>      
                        
                        	 <div class="col-md-3">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">Showmenu</label>
										                  <select name="showmenu" id="showmenu" class="form-control">
                                         	 <option value="<?=$listLaptop[0]['showmenu']?>">
                                         	 <?php
                                         	     if($listLaptop[0]['showmenu'] == 0)
                                             	 {
                                             	     echo "Not Show";
                                             	 }
                                             	 else {
                                             	     echo "Show";
                                             	 }
                                             ?>
                                         	 </option>
                                             <option value="0">Not Show</option>
                                             <option value="1">Show</option>    
                             		    </select>    
                             	  </div>
                        	</div>
                         
                          <div class="col-md-3">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">Status</label>
										                  <select name="status" id="status" class="form-control">
                                         	 <option value="<?=$listLaptop[0]['status']?>">
                                         	 <?php
                                         	     if($listLaptop[0]['status'] == 0)
                                             	 {
                                             	     echo "Hot";
                                             	 }
                                             	 else if ($listLaptop[0]['status'] == 1) {
                                             	     echo "New";
                                             	}
                                               else{
                                                 echo "Old";
                                              }
                                             ?>
                                         	 </option>
                                             <option value="0">Hot</option>
                                             <option value="1">New</option>  
                                             <option value="2">Old</option>   
                             		    </select>    
                             	  </div>
                        	</div>
                         
                          <div class="col-md-3">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">Ổ cứng:</label>
                                  <input id="thongtinkhac"  type="text" class="form-control" name="thongtinkhac" value= "<?=$listLaptop[0]['thongtinkhac']?> " >
                               </div>
                        	</div>
                          <div class="col-md-3">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">Tin Tức</label>
										                  <select name="tintuc" id="tintuc" class="form-control">
                                         	 <option value="<?=$listLaptop[0]['tintuc']?>">
                                         	 <?php
                                         	     if($listLaptop[0]['tintuc'] == 0)
                                             	 {
                                             	     echo "Not Show";
                                             	 }
                                             	 else {
                                             	     echo "Show";
                                             	 }
                                             ?>
                                         	 </option>
                                             <option value="0">Not Show</option>
                                             <option value="1">Show</option>    
                             		    </select>    
                             	  </div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">Image<span class="text-danger">*</span></label>
                                  <input id="image"  type="file" class="form-control" name="image"  placeholder="Enter image" value="<?=$listLaptop[0]['image']?>">
                               </div>
                        	</div>
                          <div class="col-md-6">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">Mô tả tin tức<span class="text-danger">*</span></label>
                                  <textarea id="motatintuc"  type="text" class="form-control" name="motatintuc"   ><?=$listLaptop[0]['motatintuc']?></textarea>
                               </div>
                        	</div>
                        </div>	       
                       
                        	    
                        <div id="alert"></div>             
                        <button class="btn btn-success" >Save &nbsp;<i class="fa fa-save"></i></button>
                    </form>
                </div>
            </div>
        </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php require_once('./Views/footer.php');?>
<script type="text/javascript">
		$("#create").submit(function(e){
			e.preventDefault();
			let name = $("input[name='name']").val();
			let type = $("select[name='type']").val();
			let ram = $("select[name='ram']").val();
			let cpu = $("input[name='cpu']").val();
			let manhinh = $("input[name='manhinh']").val();
			let card = $("input[name='card']").val();
			let trongluong = $("input[name='trongluong']").val();
			let kichthuoc = $("input[name='kichthuoc']").val();
			let baohanh = $("select[name='baohanh']").val();
			let xuatxu = $("select[name='xuatxu']").val();
			let hedieuhanh = $("select[name='hedieuhanh']").val();
			let price = $("input[name='price']").val();
			let thongtinkhac = $("input[name='thongtinkhac']").val();
			let images = $("input[name='image']").val();
			
			let showmenu = $("select[name='showmenu']").val();
			if(name == null || name == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid Name</strong>'); 
				$("input[name='name']").focus();
				return;
			}
			else if(name.length  < 5)
			{
				$("#alert").html('<strong class="text-danger">the length of the name i am missing is 5 characters</strong>'); 
				$("input[name='name']").focus();
				return;
			}
			else if(cpu == null || cpu == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid CPU</strong>'); 
				$("input[name='cpu']").focus();
				return;
			}
			else if(manhinh == null || manhinh == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid manhinh</strong>'); 
				$("input[name='manhinh']").focus();
				return;
			}
			else if(card == null || card == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid card</strong>'); 
				$("input[name='card']").focus();
				return;
			}
			else if(trongluong == null || trongluong == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid trongluong</strong>'); 
				$("input[name='trongluong']").focus();
				return;
			}
			else if(kichthuoc == null || kichthuoc == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid kichthuoc</strong>'); 
				$("input[name='kichthuoc']").focus();
				return;
			}
			else if(price == null || price == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid price</strong>'); 
				$("input[name='price']").focus();
				return;
			}
			else if(thongtinkhac == null || thongtinkhac == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid thongtinkhac</strong>'); 
				$("input[name='thongtinkhac']").focus();
				return;
			}
			
			else
			{
				$("#alert").html('<strong class="text-success">successfully</strong>'); 
				
			}
						const url = $(this).attr("action");
            const formData = new FormData(this);
			    		$.ajax({		        
    				        url,
    				        method: "POST",
                    data: formData,
                    dataType: 'html',
                    processData: false,
                    contentType: false,
                    success: function (data) {
                      alert("Update successfully"); 
                      location.reload();  
				        	
				        },
				   		});		   		    
		});

    </script>