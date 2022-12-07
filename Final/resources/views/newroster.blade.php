<!DOCTYPE html>
<html>
    <strong><h1>New Roster</h1></strong>
    <header><link rel="stylesheet" href="{{ asset('css/newroster.css') }}"> </header>
    <form action="/api/send_new_roster" method="post">
        <label class="where" for="Date">Date</label>
        <input class="slightleft" type="date" name="Date" ><br><br>
        <label class="where" for="Supervisor">Supervisor</label>
        <select class="slightleft" type="text" name="Supervisor" placeholder="SuperVisor" >
            @foreach ($supervisors as $supervisor)
                <option value="{{$supervisor->first_name}} {{$supervisor->last_name}}">{{$supervisor->first_name}} {{$supervisor->last_name}}</option>
            @endforeach
        </select><br><br>
        <label class="where" for="Doctor">Docotor</label>
        <select class="slightleft" type="text" name="Doctor" placeholder="Doctor" >
            @foreach ($doctors as $doctor)
                <option value="{{$doctor->first_name}} {{$doctor->last_name}}">{{$doctor->first_name}} {{$doctor->last_name}}</option>
            @endforeach
        </select><br><br>
        <label class="where" for="Caregiver1">Caregiver1</label>
        <select class="slightleft" type="text" name="Caregiver1" placeholder="Caregiver1" >
            @foreach ($caregivers as $caregiver)
                <option value="{{$caregiver->first_name}} {{$caregiver->last_name}}">{{$caregiver->first_name}} {{$caregiver->last_name}}</option>
            @endforeach
        </select><br><br>
        <label class="where" for="Caregiver1">Caregiver2</label>
        <select class="slightleft" type="text" name="Caregiver2" placeholder="Caregiver2" >
            @foreach ($caregivers as $caregiver)
                <option value="{{$caregiver->first_name}} {{$caregiver->last_name}}">{{$caregiver->first_name}} {{$caregiver->last_name}}</option>
            @endforeach
        </select><br><br>
        <label class="where" for="Caregiver3">Caregiver3</label>
        <select class="slightleft" type="Caregiver3" name="Caregiver3" placeholder="Caregiver3" >
            @foreach ($caregivers as $caregiver)
                <option value="{{$caregiver->first_name}} {{$caregiver->last_name}}">{{$caregiver->first_name}} {{$caregiver->last_name}}</option>
            @endforeach
        </select><br><br>
        <label class="where" for="Caregiver1">Caregiver4</label>

        <select class="slightleft" type="text" name="Caregiver4" placeholder="Caregiver4" >
            @foreach ($caregivers as $caregiver)
                <option value="{{$caregiver->first_name}} {{$caregiver->last_name}}">{{$caregiver->first_name}} {{$caregiver->last_name}}</option>
            @endforeach
        </select><br><br>
        <div class="fitin"><input class="align15" type="submit" value="Ok">
        <a href="/ahome" class="align16">Cancel</a>
    </form>
     {{-- <form action="/ahome">
            <input class="align16" type="submit" value="Cancel"></div>
        </form> --}}

</html>