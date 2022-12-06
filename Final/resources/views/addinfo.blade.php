<!DOCTYPE html>
<html>
    <strong><h1>Additonal Information of Patient</h1></strong>
    <header><link rel="stylesheet" href="{{ asset('css/info.css') }}"> </header>
    <form action="/api/add_info" method="post">
        <label class="there5">Patient ID:</label>
        <input class="empty5" type="text" name="patient_id"><br><br>
        <label class="there5">Group:</label>
        <input class="empty5" type="text" value="{{$group}}" disabled><br><br>
        <label class="there5">Admission Date:</label>
        <input class="empty5" type="text" value="{{$admission_date}}" disabled><br><br>
        <div class="goup"><label class="there6">Patient Name:</label><input value="{{$first_name}} {{$last_name}}" class="empty5" type="text" disabled><br></div>


        <div class="fitin"><input class="align5" type="submit" value="Ok">        
    </form>
    <form action="/dhome">
        <input class="align6" type="submit" value="Cancel">
    </form>
</div>
</html>