<!DOCTYPE html>
<html>
<strong><h1>Docotor's Appointment</h1></strong>
    <header><link rel="stylesheet" href="{{ asset('css/appointment.css') }}"> </header>
    <form action="/api/choose_date" method="post">
        <label class="there2">Patient ID: </label>
        <select class="empty2" type="text" name="user_id">
            @foreach ($patients as $patient)
                <option value="{{$patient->user_id}}">{{$patient->user_id}}</option>
            @endforeach
        </select><br>
        <label class="there2">Date: </label>
        <select class="empty2" type="date" name="date">
            
            @foreach ($dates as $date)
                <option value="{{$date->date}}">{{$date->date}}</option>  
            @endforeach

        <input class="there 2" type="submit" value="Choose Date and Patient">
        </select><br>
    </form>
    <form action="/api/make_appointment" method="post">

        <input type="hidden" name="user_id" value="{{$user_id}}">
        <input type="hidden" name="date" value="{{$d}}">

        <label class="there2">Doctor: </label>
        <select class="slightleft" name="doctor" required>
            @foreach($doctors as $doctor)
                <option value="{{$doctor->doctor}}">{{$doctor->doctor}}</option>
            @endforeach
        </select><br>
        <div class="goup"><label class="there6">Patient Name:</label><input class="empty5" type="text" value="{{$fname}} {{$lname}}" disabled><br></div>
        <div class="fitin"><input class="align3" type="submit" value="Ok">
        <a href="/ahome" class="align4">Cancel</a>
        </form>
        {{-- <form action="/ahome">
            <input class="align4" type="submit" value="Cancel">
        </form> --}}
        </div>
</html>