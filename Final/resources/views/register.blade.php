<html>
    <strong><h1>Register</h1></strong>
    <header><link rel="stylesheet" href="{{ asset('css/register.css') }}"> </header>
    <form action="/api/register" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <label class="there2" for="role">Role</label>
        <select class="slightleft" name="role" onchange="showDiv('hidden_div', this)" required>

         @foreach ($roles as $role)
            <option value="{{$role->role_id}}">{{$role->role}}</option>
         @endforeach

        </select><br>
        <label class="there2" for="firstname">firstname</label>
        <input class="empty2" type="text" name="firstName" placeholder="First Name" required><br>
        <label class="there2" for="lastname">lastname</label>
        <input class="empty2" type="text" name="lastName" placeholder="Last Name" required><br>
        <label class="there2" for="email">email</label>
        <input class="empty2" type="email" name="email" placeholder="Email" required><br>
        <label class="there2" for="phone">phone</label>
        <input class="empty2" type="text" name="phone" placeholder="Phone Number" required><br>
        <label class="there2" for="password">Password</label>
        <input class="empty2" type="password" name="password" placeholder="Password" required><br>
<div style="margin-left: 40%; margin-top: -20%">
    <label class="there3" for="date">DOB</label>
        <input class="empty3" type="date" name="DOB" required><br>
        <div id="hidden_div">
            <label class="there3" for="familyCode">Family Code</label>
            <input class="empty3" type="text" name="familyCode" placeholder="Family Code"><br>
            <label class="there3" for="emergencyContact">Emergency Contact</label>
            <input class="empty3" type="text" name="emergencyContact" placeholder="Emergency Contact Number"><br>
            <label class="there3" for="relEmergency">Relation to Emergency Contact</label>
            <div style="margin-top: -4%; margin-left: 15.8%"><input class="empty4" type="text" name="relEmergency" placeholder="Relation to Emergency Contact"></div>
        </div>
        <br>
        <input class="align3" type="submit" value="Ok">
        <a href="/" class="align4">Cancel</a>
    </form>

        {{-- <form action="/">
            <input class="align4" type="submit" value="Cancel">
        </form> --}}
</div>

    <h3>{{ $em_response }}</h3>
</html>

<script type="text/javascript">
    // This function should help hide or show the div whenever we select the patient role
    function showDiv(divId, element) {
        document.getElementById(divId).style.display = element.value == 5 ? 'block' : 'none';
    }
</script>
