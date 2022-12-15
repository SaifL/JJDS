<!DOCTYPE html>
<?php
date_default_timezone_set('America/New_York');
$date = date('Y/m/d');
?>
<html>
    <header><link rel="stylesheet" href="{{ asset('css/report.css') }}"></header>
    <form action="/api/adminreport" method="get">
        <label class="where">Date: </label>
        <select name="date" class="righthere">
            @foreach ($reportdates as $reportdate)
                <option value="{{$reportdate->date}}">{{$reportdate->date}}</option>
            @endforeach
        </select>
        <br>
        <br>
        <input class="align2" type="submit" value="Missed Patient Activity">
    </form>
    <table>
        <tr>
            <th>Patient's Name<br></th>
            <th>Doctor's Name<br></th>
            <th>Doctor's Appointment<br></th>
            <th>Caregiver's Name<br></th>
            <th>Morning Medicine<br></th>
            <th>Afternoon Medicine<br></th>
            <th>Night Medicine<br></th>
            <th>Breakfast<br></th>
            <th>Lunch<br></th>
            <th>Dinner<br></th>
        </tr>


        @foreach ($patients as $patient)

        <tr>
            <th>{{$patient->first_name}} {{$patient->last_name}}</th>
            <th>{{$doctor}}</th>
                <?php 
                    $appointment = DB::table('appointment')
                    ->where('patient_id', '=', $patient->user_id)
                    ->where('app_date', '=', $inputdate)->first();
                    // dd($appointment);
                    if($appointment != null){
                        echo '<th><br><input name="appointment" class="checkbox" type="checkbox" checked disabled></th>';
                    }
                    else {
                        echo '<th><br><input name="appointment" class="checkbox" type="checkbox" disabled></th>';
                    }
                ?>

            <th>
               
                 <?php
                    if($patient->group_no == 1){
                        echo $caregiver1;
                    }
                    else if($patient->group_no == 2){
                        echo $caregiver2;
                    }
                    else if($patient->group_no == 3){
                        echo $caregiver3;
                    }
                    else {
                        echo $caregiver4;
                    }
                    ?>
            </th>
            <?php
                if($patient->morning_med == 1){
                    echo '<th><br><input name="morningmed" class="checkbox" type="checkbox" checked disabled></th>';
                }
                else {
                    echo '<th><br><input name="morningmed" class="checkbox" type="checkbox" disabled></th>';
                }
                if($patient->afternoon_med == 1){
                    echo '<th><br><input name="afternoonmed" class="checkbox" type="checkbox" checked disabled></th>';
                }
                else{
                    echo '<th><br><input name="afternoonmed" class="checkbox" type="checkbox" disabled></th>';
                }
                if($patient->night_med == 1){
                    echo '<th><br><input name="nightmed" class="checkbox" type="checkbox" checked disabled></th>';
                }
                else{
                    echo '<th><br><input name="nightmed" class="checkbox" type="checkbox" disabled></th>';
                }
                if($patient->breakfast == 1){
                    echo '<th><br><input name="breakfast" class="checkbox" type="checkbox" checked disabled></th>';
                }
                else{
                    echo '<th><br><input name="breakfast" class="checkbox" type="checkbox" disabled></th>';
                }
                if($patient->lunch == 1){
                    echo '<th><br><input name="lunch" class="checkbox" type="checkbox" checked disabled></th>';
                }
                else{
                    echo '<th><br><input name="lunch" class="checkbox" type="checkbox" disabled></th>';
                }
                if($patient->dinner == 1){
                    echo '<th><br><input name="dinner" class="checkbox" type="checkbox" checked disabled></th>';
                }
                else{
                    echo '<th><br><input name="dinner" class="checkbox" type="checkbox" disabled></th>';
                }
            ?>
        </tr>

        @endforeach
    </table>
</html>