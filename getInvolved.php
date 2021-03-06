<?php include("header.php"); ?>

<!-- CONTENT -->
<div id="contentHolder" class="width100">
	<div id="grayGradientLight"></div>

    <!-- MAIN -->
    <div id="main" class="width1000">

    	<!-- Navigation -->
            <?php include("navigation.php"); ?>

    	<!-- .Navigation -->

        <!-- Content -->
        <div id="content" class="default">

            <h2>Get Involved</h2>

            <div id="getInvolved">

          <form action="javascript:void()" method="post" id="getInvolvedForm">

            	<h4>Contribution amount</h4>
                <p><input type="text" value="*Amount" onFocus="if (this.value == '*Amount') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*Amount'}" name="amount"></p>
                <!-- <p>Get involved with the campaign by giving a donation to help the cause. By law your donation can't exceed $2500.</p>

            	<p class="donation">
                  <label><input type="radio" name="donation" value="radio"> 25</label>
                  <label><input type="radio" name="donation" value="radio"> 50</label>
                  <label><input type="radio" name="donation" value="radio"> 100</label>
                  <label><input type="radio" name="donation" value="radio"> 250</label>
                  <label><input type="radio" name="donation" value="radio"> 500</label>
                  <label><input type="radio" name="donation" value="radio"> 1000</label>
                  <label><input type="radio" name="donation" value="radio"> 2500</label>
                  <label><input type="radio" name="donation" value="radio"> Other</label>
           		</p>
 -->
                <div class="horDashed"></div>

                <h4>Payment info</h4>

                <p><input type="text" value="*PayPal Address" onFocus="if (this.value == '*PayPal Address') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*PayPal Address'}" name="paypal"></p>

                 <!--<p><strong>OR</strong></p>

                <p>
                <input type="text" value="Credit Card" onFocus="if (this.value == 'Credit Card') {this.value = ''}" onBlur="if (this.value == '') {this.value = 'Credit Card'}" name="card">
                <input type="text" value="*Card Number" onFocus="if (this.value == '*Card Number') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*Card Number'}" name="cardNumber">
                </p>

                <p>
                <input type="text" value="*CW" onFocus="if (this.value == '*CW') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*CW'}" name="cw" class="narrow">

                <select name="month" id="month" class="narrow">
                    <option value="0" selected="selected">Month</option>
                	<option value="1">Jan</option>
                	<option value="2">Feb</option>
                	<option value="3">Mar</option>
                	<option value="4">Apr</option>
                	<option value="5">May</option>
                	<option value="6">Jun</option>
                	<option value="7">Jul</option>
                	<option value="8">Aug</option>
                	<option value="9">Sep</option>
                	<option value="10">Oct</option>
                	<option value="11">Nov</option>
                	<option value="12">Dec</option>
                </select>

                <select name="year" id="year" class="narrow">
                    <option value="0" selected="selected">Year</option>
                	<option value="2012">2012</option>
                	<option value="2013">2013</option>
                	<option value="2014">2014</option>
                	<option value="2015">2015</option>
                	<option value="2016">2016</option>
                	<option value="2017">2017</option>
                	<option value="2018">2018</option>
                	<option value="2019">2019</option>
                </select>

                </p> -->

                <div class="horDashed"></div>

                <h4>Personal</h4>

                <p>
                <input type="text" value="*First Name" onFocus="if (this.value == '*First Name') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*First Name'}" name="fname">
                <input type="text" value="*Last Name" onFocus="if (this.value == '*Last Name') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*Last Name'}" name="lname">
                <input type="text" value="*Email Address" onFocus="if (this.value == '*Email Address') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*Email Address'}" name="email">
                </p>

                <p>
                <input type="text" value="*Phone" onFocus="if (this.value == '*Phone') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*Phone'}" name="phone">
                <input type="text" value="*Address" onFocus="if (this.value == '*Address') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*Address'}" name="address" class="wide">
                </p>

                <p>
                <input type="text" value="*City" onFocus="if (this.value == '*City') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*City'}" name="city">

                <select name="state" id="state">
                    <option value="0" selected="selected">Select a State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>

                <input type="text" value="*Zip" onFocus="if (this.value == '*Zip') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*Zip'}" name="zip" class="narrow">
                </p>

                <div class="horDashed"></div>

                <h4>Employement</h4>

                <p>By law you are obligated to provide your employement info. If unemployed type 'none'.</p>

                <p>
                <input type="text" value="*Occupation" onFocus="if (this.value == '*Occupation') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*Occupation'}" name="occupation">
                <input type="text" value="*Employer Name" onFocus="if (this.value == '*Employer Name') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*Employer Name'}" name="employer">
                </p>

                <div class="horDashed"></div>

                <h4>Confirm eligibility</h4>

                <p><input name="citizen" type="checkbox" value="1"> <label for="citizen">I confirm that I am a citizen</label></p>

                <p><input type="submit" class="bigButton roundButtonX" value="Submit"></p>
            </form>

            </div>

        </div>
        <!-- .Content -->

    </div>
    <!-- .MAIN -->

    <!-- CAMPAIGN -->
<?php //include("compaign.php"); ?>

    <!-- .CAMPAIGN -->
</div>
<!-- .CONTENT -->

<!-- FOOTER -->
<?php include("footer.php"); ?>

<!-- .FOOTER -->

</body>
</html>
