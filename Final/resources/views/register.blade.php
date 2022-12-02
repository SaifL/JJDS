<html>
    <strong><h1>Register</h1></strong>
    <header><link rel="stylesheet" href="{{ asset('css/register.css') }}"> </header>
    <form action="/api/register" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <label class="there2" for="role">Role</label>
        <select class="slightleft" name="role" required>
            <option value="1">Admin</option>
            <option value="2">Supervisor</option>
            <option value="3">Doctor</option>
            <option value="4">Caregiver</option>
            <option value="5">Patient</option>
            <option value="6">Patient-Family</option>

        </select><br>
        <label class="there2" for="firstname">firstname</label>
        <input class="empty2" type="text" name="firstName" placeholder="First Name" ><br>
        <label class="there2" for="lastname">lastname</label>
        <input class="empty2" type="text" name="lastName" placeholder="Last Name" ><br>
        <label class="there2" for="email">email</label>
        <input class="empty2" type="email" name="email" placeholder="Email" ><br>
        <label class="there2" for="phone">phone</label>
        <input class="empty2" type="text" name="phone" placeholder="Phone Number" ><br>
        <label class="there2" for="password">Password</label>
        <input class="empty2" type="password" name="password" placeholder="Password" ><br>
<div style="margin-left: 40%; margin-top: -20%">
    <label class="there3" for="date">DOB</label>
        <input class="empty3" type="date" name="input"><br>
        <label class="there3" for="family_code">Family Code</label>
        <input class="empty3" type="text" name="family_code" placeholder="Family Code"><br>
        <label class="there3" for="emergency_contact">Emergency Contact</label>
        <input class="empty3" type="text" name="emergency_contact" placeholder="Emergency Contact Number"><br>
        <label class="there3" for="rel_emergency">Relation to Emergency Contact</label>
        <div style="margin-top: -4%; margin-left: 15.8%"><input class="empty4" type="text" name="rel_emergency" placeholder="Relation to Emergency Contact"></div><br>
        <input class="align3" type="submit" value="Ok"><form action="" method="get"><input class="align4" type="submit" value="Cancel">
</div>
    {{-- <input type="submit" value="Register">
    </form> --}}

    {{-- I made the three patient related items hidden by default and visible when you click the yes radio button --}}
    {{-- Yes --}}
{{-- <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck"/>No
<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck"/>
<br>
<div id="ifYes" style="visibility:hidden">
    <input type="text" name="family_code" placeholder="Family Code"/>
    <br>
    <input type="text" name="emergency_contact" placeholder="Emergency Contact Number"/>
    <br>
    <input type="text" name="rel_emergency" placeholder="Relation to Emergency Contact">
</div> --}}
</html>
<script type="text/javascript">
function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    } else {
        document.getElementById('ifYes').style.visibility = 'hidden';
    }
}
    </script>
