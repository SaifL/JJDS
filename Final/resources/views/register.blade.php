<html>
    <h1>Signup</h1>

    <form action="/api/register" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <label for="role">Role</label>
        <select name="role" required>
            <option value="1">Admin</option>
            <option value="2">Supervisor</option>
            <option value="3">Doctor</option>
            <option value="4">Caregiver</option>
            <option value="5">Patient</option>
            <option value="6">Patient-Family</option>
        </select>
        <input type="text" name="firstName" placeholder="First Name" >
        <input type="text" name="lastName" placeholder="Last Name" >
        <input type="email" name="email" placeholder="Email" >
        <input type="text" name="phone" placeholder="Phone Number" >
        <input type="password" name="password" placeholder="Password" >
        <input type="date" name="input">
<div>
        <input type="text" name="family_code" placeholder="Family Code">
        <input type="text" name="emergency_contact" placeholder="Emergency Contact Number">
        <input type="text" name="rel_emergency" placeholder="Relation to Emergency Contact">
</div>
    <input type="submit" value="Register">
    </form>
    {{-- I made the three patient related items hidden by default and visible when you click the yes radio button --}}
    Yes
<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck"/>No
<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck"/>
<br>
<div id="ifYes" style="visibility:hidden">
    <input type="text" name="family_code" placeholder="Family Code"/>
    <br>
    <input type="text" name="emergency_contact" placeholder="Emergency Contact Number"/>
    <br>
    <input type="text" name="rel_emergency" placeholder="Relation to Emergency Contact">
</div>
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
