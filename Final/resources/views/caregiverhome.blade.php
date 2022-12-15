<!DOCTYPE html>
<html>
    <h1>Caregiver's Home</h1>
    <header><link rel="stylesheet" href="{{ asset('css/chome.css') }}"></header>
<table>
    <input class="where" type="submit" value="List of Patients today">
    <tr>
        <th>Name</th>
        <th>Morning Medicine<br></th>
        <th>Afternoon Medicine<br></th>
        <th>Night Medicine<br></th>
        <th>Breakfast<br></th>
        <th>Lunch<br></th>
        <th>Dinner<br></th>
        <th>Submission</th>
    </tr>
    @foreach ($patients as $patient)
    
<form action="/api/caregiverupdate" method="post">
    <tr>
        <input type="hidden" name="userId" value="{{$patient->user_id}}">
        <th>{{$patient->first_name}}</th>
        <?php 
            if($patient->morning_med == 1){
                echo '<th><br><input name="morningmed" class="checkbox" type="checkbox" checked></th>';
            }
            else {
                echo '<th><br><input name="morningmed" class="checkbox" type="checkbox"></th>';
            }
            if($patient->afternoon_med == 1){
                echo '<th><br><input name="afternoonmed" class="checkbox" type="checkbox" checked></th>';
            }
            else{
                echo '<th><br><input name="afternoonmed" class="checkbox" type="checkbox"></th>';
            }
            if($patient->night_med == 1){
                echo '<th><br><input name="nightmed" class="checkbox" type="checkbox" checked></th>';
            }
            else{
                echo '<th><br><input name="nightmed" class="checkbox" type="checkbox"></th>';
            }
            if($patient->breakfast == 1){
                echo '<th><br><input name="breakfast" class="checkbox" type="checkbox" checked></th>';
            }
            else{
                echo '<th><br><input name="breakfast" class="checkbox" type="checkbox"></th>';
            }
            if($patient->lunch == 1){
                echo '<th><br><input name="lunch" class="checkbox" type="checkbox" checked></th>';
            }
            else{
                echo '<th><br><input name="lunch" class="checkbox" type="checkbox"></th>';
            }
            if($patient->dinner == 1){
                echo '<th><br><input name="dinner" class="checkbox" type="checkbox" checked></th>';
            }
            else{
                echo '<th><br><input name="dinner" class="checkbox" type="checkbox"></th>';
            }
            ?>
            <th><input type="submit" value="ok"></th>
    </tr>
</form>
    @endforeach
</table>
<form action="">
    <input class="align15" type="submit" value="Ok">
    <a class="align16" href="/home">Cancel</a>
</form>
</html>