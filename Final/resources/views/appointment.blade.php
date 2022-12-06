<!DOCTYPE html>
<html>
<strong><h1>Docotor's Appointment</h1></strong>
    <header><link rel="stylesheet" href="{{ asset('css/appointment.css') }}"> </header>
    <form action="">
        <label class="there2">Patient ID: </label>
        <input class="empty2" type="text"><br>
        <label class="there2">Date: </label>
        <input class="empty2" type="date"><br>
        <label class="there2">Doctor: </label>
        <select class="slightleft" name="role" required></select><br>
        <div class="goup"><label class="there6">Patient Name:</label><input class="empty5" type="text"><br></div>
        <div class="fitin"><input class="align3" type="submit" value="Ok">
        </form>
        <form action="ahome">
            <input class="align4" type="submit" value="Cancel">
        </form>
        </div>
</html>