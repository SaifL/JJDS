<!DOCTYPE html>
<html>
    <strong><h1>Payment</h1></strong>
    <header><link rel="stylesheet" href="{{ asset('css/payment.css') }}"> </header>
    <form action="">
        <label class="where">Patient ID: </label>
        <input class="righthere" type="text" name="patient_id">
        <input class="alignnow" type="submit" value='Update'>
    </form>
    <form action="">
        <br><br>
        <label class="where">Total Due: </label>
        <input  class="righthere" type="text"><br><br>
        <label class="where">New Payment</label>
        <input  class="righthere" type="text"><br><br>
        <input class="align15" type="submit" value='Ok'>
        <a href="/home" class="align16">Cancel</a>
    </form><br>
    

</html>