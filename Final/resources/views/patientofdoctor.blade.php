<!DOCTYPE html>
<html>
    <h1>Patient Of Doctor</h1>
    <header><link rel="stylesheet" href="{{ asset('css/PofD.css') }}"></header>
    <table>
        <th>Date</th>
        <th>Comment</th>
        <th>Morning Med</th>
        <th>Afternoon Med</th>
        <th>Night Med</th>
    </table><br>
    <form action="">
    <label class="where">New Prescription</label>
    <table>
        <th>Comment</th>
        <th>Morning Med</th>
        <th>Afternoon Med</th>
        <th>Night Med</th>
    </table>
    <input type="submit" value="Ok">
    <a href="/dhome">Cancel</a>
    </form>

</html>