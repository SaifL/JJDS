<html>
    <h1>Admin Home</h1>
    <header><link rel="stylesheet" href="{{ asset('css/roster.css') }}"></header>
    <form action="/info" method="get">
        <input class="where" type="submit" value="Addition Patient Info">
    </form>

    <form action="/appointment" method="get">
        <input class="where" type="submit" value="Doctor's Appointments">
    </form>

    <form action="/role" method="get">
        <input class="where" type="submit" value="Roles">
    </form>

    <form action="/employee" method="get">
        <input class="where" type="submit" value="Employee">
    </form>

    <form action="/patients" method="get">
        <input class="where" type="submit" value="Patients">
    </form>

    <form action="/approval" method="get">
        <input class="where" type="submit" value="Approval">
    </form>

    <form action="/roster" method="get">
        <input class="where" type="submit" value="Roster">
    </form>

    <form action="/makeroster" method="get">
        <input class="where" type="submit" value="Make New Roster">
    </form>

    <form action="/report" method="get">
        <input class="where" type="submit" value="View Report">
    </form>
    
    <form action="/payment" method="get">
        <input class="where" type="submit" value="Payments">
    </form>
</html>