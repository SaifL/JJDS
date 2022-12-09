<html>
    <h1>Supervisor Home</h1>
    <header><link rel="stylesheet" href="{{ asset('css/approval.css') }}"></header>
    <form action="/info" method="get">
        <input class="where2" type="submit" value="Addition Patient Info">
    </form>

    <form action="/employee" method="get">
        <input class="where2" type="submit" value="Employee">
    </form>

    <form action="/patients" method="get">
        <input class="where2" type="submit" value="Patients">
    </form>

    <form action="/approval" method="get">
        <input class="where2" type="submit" value="Approval">
    </form>

    <form action="/roster" method="get">
        <input class="where2" type="submit" value="Roster">
    </form>

    <form action="/makeroster" method="get">
        <input class="where2" type="submit" value="Make New Roster">
    </form>

    <form action="/report" method="get">
        <input class="where2" type="submit" value="View Report">
    </form>
</html>