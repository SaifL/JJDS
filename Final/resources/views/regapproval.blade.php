<!DOCTYPE html>
<html>
    <h1>Registration Approval</h1>
    <header><link rel="stylesheet" href="{{ asset('css/approval.css') }}"></header>
    <table>
        <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Lemonade</th>
        </tr>
        @foreach ($users as $user)
            
            <form action="/api/approval" method="post">
                <input type="hidden" name="appId" value="{{$user->app_id}}">
                <tr>
                    <td>{{$user->first_name}} {{$user->last_name}}</td>
                    <td>Patient</td>
                    <td>
                        <input type="radio" id="yes" name="choice" value="1">
                        <label for="yes">Yes</label>
                        <input type="radio" id="no" name="choice" value="2">
                        <label for="no">No</label>
                        <input type="submit" value="Ok">
                    </td>
                </tr>
            </form>
        
        @endforeach
    </table>
        {{-- <div class="away"><label class="away" for="yes">Yes</label><input type="checkbox" id="yes"><label class="away2" for="no">No</label><input type="checkbox" id="no"><br></div> --}}
    <input class="align15" type="submit" value="Ok">
    <a class="align16" href="/ahome" >Cancel</a>
</html>