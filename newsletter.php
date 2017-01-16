<section class="newsletter none">	
		<section class="internal">
				<div class="container">
					<button class="exit">
						<img src="<?php bloginfo('template_directory'); ?>/images/exit.png" alt="exit button">
						<span class="aural-only">exit</span>
					</button>
					<h1>Sign up for our newsletter</h1>
					<form method="POST" id="newsletter-form" action="http://hjcnm.convio.net/site/Survey" onsubmit="return validateLogin()">
					<div id="error-log" style="font-color: red; font-size: 16px;">
					   <p id="fnameError" class="error" style="display: none;">*Please Enter your First Name</p>
					   <p id="lnameError" class="error" style="display: none;">*Please Enter your Last Name</p>
					   <p id="emailError" class="error" style="display: none;">*Please Enter your Email address</p>
					   <p id="emailValidError" class="error" style="display: none;">*Please enter a valid Email address</p>
					   <p id="provinceError" class="error" style="display: none;">*Please Select your Province</p>
					   <p id="phoneError" class="error" style="display: none;">*Phone Number should be in the following format: 111-111-1111 or 1111111111</p>
					    <p id="volunteerErr" class="error" style="display: none;">*Please select if you've previously volunteered below</p>
					  <p id="describeErr" class="error" style="display: none;">*Please select the option that best describes you below</p>
					  <p id="commErr" class="error" style="display: none;">*Will you need a signed Community Involvement form? Please select below</p>
					  <p id="hearErr" class="error" style="display: none;">*How did you hear about us? Please select below</p>


					 </div>
					<div class="flexed">
						<div class="form-section">
							<input type="hidden" name="cons_info_component" id="cons_info_component" value="t" />
							<label for="cons_first_name" class="aural-only">First Name *</label>
							<input type="text" name="cons_first_name" id="cons_first_name" placeholder="FIRST NAME*" value="" />

							<label for="cons_last_name" class="aural-only">Last Name *</label>
							<input type="text" name="cons_last_name" id="cons_last_name" placeholder="LAST NAME*" />

							<label for="cons_email" class="aural-only">Email *</label>
							<input type="text" name="cons_email" id="cons_email" placeholder="EMAIL*" />
						</div>
						
						<div class="form-section">
							<label for="cons_city" class="aural-only">City</label>
							<input type="text" name="cons_city" id="cons_city" placeholder="CITY" />

							<label for="cons_country" class="aural-only">Country *</label>
								<select name="cons_country" id="cons_country" size="1" >
								<option ></option>
								<option selected="selected" value="Canada" >Canada</option>
								<option value="United States" >United States</option>
								<option value="Afghanistan" >Afghanistan</option>
								<option value="Aland Islands" >Aland Islands</option>
								<option value="Albania" >Albania</option>
								<option value="Algeria" >Algeria</option>
								<option value="American Samoa" >American Samoa</option>
								<option value="Andorra" >Andorra</option>
								<option value="Angola" >Angola</option>
								<option value="Anguilla" >Anguilla</option>
								<option value="Antarctica" >Antarctica</option>
								<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
								<option value="Argentina" >Argentina</option>
								<option value="Armenia" >Armenia</option>
								<option value="Aruba" >Aruba</option>
								<option value="Australia" >Australia</option>
								<option value="Austria" >Austria</option>
								<option value="Azerbaijan" >Azerbaijan</option>
								<option value="Bahamas" >Bahamas</option>
								<option value="Bahrain" >Bahrain</option>
								<option value="Bangladesh" >Bangladesh</option>
								<option value="Barbados" >Barbados</option>
								<option value="Belarus" >Belarus</option>
								<option value="Belgium" >Belgium</option>
								<option value="Belize" >Belize</option>
								<option value="Benin" >Benin</option>
								<option value="Bermuda" >Bermuda</option>
								<option value="Bhutan" >Bhutan</option>
								<option value="Bolivarian Republic of Venezuela" >Bolivarian Republic of Venezuela</option>
								<option value="Bonaire, Sint Eustatios and Saba" >Bonaire, Sint Eustatios and Saba</option>
								<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
								<option value="Botswana" >Botswana</option>
								<option value="Bouvet Island" >Bouvet Island</option>
								<option value="Brazil" >Brazil</option>
								<option value="British Indian Ocean Territory" >British Indian Ocean Territory</option>
								<option value="Brunei Darussalam" >Brunei Darussalam</option>
								<option value="Bulgaria" >Bulgaria</option>
								<option value="Burkina Faso" >Burkina Faso</option>
								<option value="Burundi" >Burundi</option>
								<option value="Cambodia" >Cambodia</option>
								<option value="Cameroon" >Cameroon</option>
								<option value="Cape Verde" >Cape Verde</option>
								<option value="Cayman Islands" >Cayman Islands</option>
								<option value="Central African Republic" >Central African Republic</option>
								<option value="Chad" >Chad</option>
								<option value="Chile" >Chile</option>
								<option value="China" >China</option>
								<option value="Christmas Island" >Christmas Island</option>
								<option value="Cocos (Keeling) Islands" >Cocos (Keeling) Islands</option>
								<option value="Colombia" >Colombia</option>
								<option value="Comoros" >Comoros</option>
								<option value="Congo" >Congo</option>
								<option value="Cook Islands" >Cook Islands</option>
								<option value="Costa Rica" >Costa Rica</option>
								<option value="Cote D'Ivoire" >Cote D'Ivoire</option>
								<option value="Croatia" >Croatia</option>
								<option value="Cuba" >Cuba</option>
								<option value="Curacao" >Curacao</option>
								<option value="Cyprus" >Cyprus</option>
								<option value="Czech Republic" >Czech Republic</option>
								<option value="Democratic People's Republic of Korea" >Democratic People's Republic of Korea</option>
								<option value="The Democratic Republic of the Congo" >The Democratic Republic of the Congo</option>
								<option value="Denmark" >Denmark</option>
								<option value="Djibouti" >Djibouti</option>
								<option value="Dominica" >Dominica</option>
								<option value="Dominican Republic" >Dominican Republic</option>
								<option value="Ecuador" >Ecuador</option>
								<option value="Egypt" >Egypt</option>
								<option value="El Salvador" >El Salvador</option>
								<option value="Equatorial Guinea" >Equatorial Guinea</option>
								<option value="Eritrea" >Eritrea</option>
								<option value="Estonia" >Estonia</option>
								<option value="Ethiopia" >Ethiopia</option>
								<option value="Falkland Islands (Malvinas)" >Falkland Islands (Malvinas)</option>
								<option value="Faroe Islands" >Faroe Islands</option>
								<option value="Federated States of Micronesia" >Federated States of Micronesia</option>
								<option value="Fiji" >Fiji</option>
								<option value="Finland" >Finland</option>
								<option value="The Former Yugoslav Republic of Macedonia" >The Former Yugoslav Republic of Macedonia</option>
								<option value="France" >France</option>
								<option value="French Guiana" >French Guiana</option>
								<option value="French Polynesia" >French Polynesia</option>
								<option value="French Southern Territories" >French Southern Territories</option>
								<option value="Gabon" >Gabon</option>
								<option value="Gambia" >Gambia</option>
								<option value="Georgia" >Georgia</option>
								<option value="Germany" >Germany</option>
								<option value="Ghana" >Ghana</option>
								<option value="Gibraltar" >Gibraltar</option>
								<option value="Greece" >Greece</option>
								<option value="Greenland" >Greenland</option>
								<option value="Grenada" >Grenada</option>
								<option value="Guadeloupe" >Guadeloupe</option>
								<option value="Guam" >Guam</option>
								<option value="Guatemala" >Guatemala</option>
								<option value="Guernsey" >Guernsey</option>
								<option value="Guinea" >Guinea</option>
								<option value="Guinea-Bissau" >Guinea-Bissau</option>
								<option value="Guyana" >Guyana</option>
								<option value="Haiti" >Haiti</option>
								<option value="Heard Island and McDonald Islands" >Heard Island and McDonald Islands</option>
								<option value="Holy See (Vatican City State)" >Holy See (Vatican City State)</option>
								<option value="Honduras" >Honduras</option>
								<option value="Hong Kong" >Hong Kong</option>
								<option value="Hungary" >Hungary</option>
								<option value="Iceland" >Iceland</option>
								<option value="India" >India</option>
								<option value="Indonesia" >Indonesia</option>
								<option value="Iraq" >Iraq</option>
								<option value="Ireland" >Ireland</option>
								<option value="Islamic Republic of Iran" >Islamic Republic of Iran</option>
								<option value="Isle of Man" >Isle of Man</option>
								<option value="Israel" >Israel</option>
								<option value="Italy" >Italy</option>
								<option value="Jamaica" >Jamaica</option>
								<option value="Japan" >Japan</option>
								<option value="Jersey" >Jersey</option>
								<option value="Jordan" >Jordan</option>
								<option value="Kazakhstan" >Kazakhstan</option>
								<option value="Kenya" >Kenya</option>
								<option value="Kiribati" >Kiribati</option>
								<option value="Kuwait" >Kuwait</option>
								<option value="Kyrgyzstan" >Kyrgyzstan</option>
								<option value="Lao People's Democratic Republic" >Lao People's Democratic Republic</option>
								<option value="Latvia" >Latvia</option>
								<option value="Lebanon" >Lebanon</option>
								<option value="Lesotho" >Lesotho</option>
								<option value="Liberia" >Liberia</option>
								<option value="Libya" >Libya</option>
								<option value="Liechtenstein" >Liechtenstein</option>
								<option value="Lithuania" >Lithuania</option>
								<option value="Luxembourg" >Luxembourg</option>
								<option value="Macao" >Macao</option>
								<option value="Madagascar" >Madagascar</option>
								<option value="Malawi" >Malawi</option>
								<option value="Malaysia" >Malaysia</option>
								<option value="Maldives" >Maldives</option>
								<option value="Mali" >Mali</option>
								<option value="Malta" >Malta</option>
								<option value="Marshall Islands" >Marshall Islands</option>
								<option value="Martinique" >Martinique</option>
								<option value="Mauritania" >Mauritania</option>
								<option value="Mauritius" >Mauritius</option>
								<option value="Mayotte" >Mayotte</option>
								<option value="Mexico" >Mexico</option>
								<option value="Monaco" >Monaco</option>
								<option value="Mongolia" >Mongolia</option>
								<option value="Montenegro" >Montenegro</option>
								<option value="Montserrat" >Montserrat</option>
								<option value="Morocco" >Morocco</option>
								<option value="Mozambique" >Mozambique</option>
								<option value="Myanmar" >Myanmar</option>
								<option value="Namibia" >Namibia</option>
								<option value="Nauru" >Nauru</option>
								<option value="Nepal" >Nepal</option>
								<option value="Netherlands" >Netherlands</option>
								<option value="New Caledonia" >New Caledonia</option>
								<option value="New Zealand" >New Zealand</option>
								<option value="Nicaragua" >Nicaragua</option>
								<option value="Niger" >Niger</option>
								<option value="Nigeria" >Nigeria</option>
								<option value="Niue" >Niue</option>
								<option value="Norfolk Island" >Norfolk Island</option>
								<option value="Northern Mariana Islands" >Northern Mariana Islands</option>
								<option value="Norway" >Norway</option>
								<option value="Oman" >Oman</option>
								<option value="Pakistan" >Pakistan</option>
								<option value="Palau" >Palau</option>
								<option value="Palestinian Territory, Occupied" >Palestinian Territory, Occupied</option>
								<option value="Panama" >Panama</option>
								<option value="Papua New Guinea" >Papua New Guinea</option>
								<option value="Paraguay" >Paraguay</option>
								<option value="Peru" >Peru</option>
								<option value="Philippines" >Philippines</option>
								<option value="Pitcairn" >Pitcairn</option>
								<option value="Plurinational State of Bolivia" >Plurinational State of Bolivia</option>
								<option value="Poland" >Poland</option>
								<option value="Portugal" >Portugal</option>
								<option value="Puerto Rico" >Puerto Rico</option>
								<option value="Qatar" >Qatar</option>
								<option value="Republic of Korea" >Republic of Korea</option>
								<option value="Republic of Moldova" >Republic of Moldova</option>
								<option value="Reunion" >Reunion</option>
								<option value="Romania" >Romania</option>
								<option value="Russian Federation" >Russian Federation</option>
								<option value="Rwanda" >Rwanda</option>
								<option value="Saint Barthelemy" >Saint Barthelemy</option>
								<option value="Saint Helena, Ascension and Tristan da Cunha" >Saint Helena, Ascension and Tristan da Cunha</option>
								<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
								<option value="Saint Lucia" >Saint Lucia</option>
								<option value="Saint Martin (French)" >Saint Martin (French)</option>
								<option value="Saint Pierre and Miquelon" >Saint Pierre and Miquelon</option>
								<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
								<option value="Samoa" >Samoa</option>
								<option value="San Marino" >San Marino</option>
								<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
								<option value="Saudi Arabia" >Saudi Arabia</option>
								<option value="Senegal" >Senegal</option>
								<option value="Serbia" >Serbia</option>
								<option value="Seychelles" >Seychelles</option>
								<option value="S. Georgia &amp; S. Sandwich Isls." >S. Georgia &amp; S. Sandwich Isls.</option>
								<option value="Sierra Leone" >Sierra Leone</option>
								<option value="Singapore" >Singapore</option>
								<option value="Sint Maarten (Dutch)" >Sint Maarten (Dutch)</option>
								<option value="Slovakia" >Slovakia</option>
								<option value="Slovenia" >Slovenia</option>
								<option value="Solomon Islands" >Solomon Islands</option>
								<option value="Somalia" >Somalia</option>
								<option value="South Africa" >South Africa</option>
								<option value="South Sudan" >South Sudan</option>
								<option value="Spain" >Spain</option>
								<option value="Sri Lanka" >Sri Lanka</option>
								<option value="Sudan" >Sudan</option>
								<option value="Suriname" >Suriname</option>
								<option value="Svalbard and Jan Mayen" >Svalbard and Jan Mayen</option>
								<option value="Swaziland" >Swaziland</option>
								<option value="Sweden" >Sweden</option>
								<option value="Switzerland" >Switzerland</option>
								<option value="Syrian Arab Republic" >Syrian Arab Republic</option>
								<option value="Taiwan, Province of China" >Taiwan, Province of China</option>
								<option value="Tajikistan" >Tajikistan</option>
								<option value="Thailand" >Thailand</option>
								<option value="Timor-Leste" >Timor-Leste</option>
								<option value="Togo" >Togo</option>
								<option value="Tokelau" >Tokelau</option>
								<option value="Tonga" >Tonga</option>
								<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
								<option value="Tunisia" >Tunisia</option>
								<option value="Turkey" >Turkey</option>
								<option value="Turkmenistan" >Turkmenistan</option>
								<option value="Turks and Caicos Islands" >Turks and Caicos Islands</option>
								<option value="Tuvalu" >Tuvalu</option>
								<option value="Uganda" >Uganda</option>
								<option value="Ukraine" >Ukraine</option>
								<option value="United Arab Emirates" >United Arab Emirates</option>
								<option value="United Kingdom" >United Kingdom</option>
								<option value="United Republic of Tanzania" >United Republic of Tanzania</option>
								<option value="Uruguay" >Uruguay</option>
								<option value="USA Minor Outlying Islands" >USA Minor Outlying Islands</option>
								<option value="Uzbekistan" >Uzbekistan</option>
								<option value="Vanuatu" >Vanuatu</option>
								<option value="Viet Nam" >Viet Nam</option>
								<option value="Virgin Islands (British)" >Virgin Islands (British)</option>
								<option value="Virgin Islands (USA)" >Virgin Islands (USA)</option>
								<option value="Wallis and Futuna" >Wallis and Futuna</option>
								<option value="Western Sahara" >Western Sahara</option>
								<option value="Yemen" >Yemen</option>
								<option value="Zambia" >Zambia</option>
								<option value="Zimbabwe" >Zimbabwe</option>
							</select>
							
							<label for="cons_employer" class="aural-only">Organization </label>
							<input type="text" name="cons_employer" id="cons_employer" placeholder="ORGANIZATION" />

							<input type="hidden" name="cons_mail_opt_in" id="cons_mail_opt_in" value="t" />

							<div style="display:none">
							<label for="denySubmit">Spam Control Text:</label>&nbsp;
							<input type="text" name="denySubmit" id="denySubmit" value="" alt="This field is used to prevent form submission by scripts." />&nbsp;Please leave this field empty
							</div>	
								
							<input type="submit" name="ACTION_SUBMIT_SURVEY_RESPONSE" id="ACTION_SUBMIT_SURVEY_RESPONSE" value="Sign Up" class="Button" />

							<input type="hidden" name="SURVEY_ID" id="SURVEY_ID" value="3200" />
							</div>
					</div>
					</form>
				</div>

		</section>
</section>