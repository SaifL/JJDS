<!DOCTYPE html>
<html>
    <h1>Registration Approval</h1>
    <header><link rel="stylesheet" href="{{ asset('css/approval.css') }}"></header>
    <form>
    <table>
        <tr>
            <th>Name</th>
            <th>Role</th>
        </tr>
    </table>
        <div class="away"><label class="away" for="yes">Yes</label><input type="checkbox" id="yes"><label class="away2" for="no">No</label><input type="checkbox" id="no"><br></div>
    <input class="align15" type="submit" value="Ok">
    <a class="align16" href="/ahome" >Cancel</a>
    </form>
</html>