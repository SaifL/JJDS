<html>
    <h1>Signup</h1>

    <form action="" method="post">
        <label for="role">Role</label>
        <select name="role" required>
            <option value="Admin">Admin</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Doctor">Doctor</option>
            <option value="Caregiver">Caregiver</option>
            <option value="Patient">Patient</option>
            <option value="Patient-Family">Patient-Family</option>
        </select>
        <input type="text" name="firstName" placeholder="Fist Name" required>
        <input type="text" name="lastName" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="date" name="DOB" placeholder="Date of Birth" required>
        <input type="text" name="family_code" placeholder="Family Code">
        <input type="text" name="emergency_contact" placeholder="Emergency Contact Number">
        <input type="text" name="rel_emergency" placeholder="Relation to Emergency Contact">


    </form>
</html>