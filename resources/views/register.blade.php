<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>
        <form method="POST" action="/welcome">
            @csrf
            <label for="first">First name: </label><br>
            <input type="text" id="first" name="fname"><br>

            <label for="last">Last name: </label><br>
            <input type="text" id="last" name="lname"><br>
            
            <label for="">Gender: </label><br>
            <input type="radio" name="gender" id="male"> 
            <label for="male">Male</label><br>
            <input type="radio" name="gender" id="female"> 
            <label for="female">Female</label><br>
            <input type="radio" name="gender" id="other"> 
            <label for="other">Other</label><br>

            <label for="nationality">Nationality:</label><br>
            <select id="nationality" name="nationality">
                <option value="Indonesia">Indonesia</option>
                <option value="Australia">Australia</option>
                <option value="Japan">Japan</option>
                <option value="Korea">Korea</option>
                <option value="Singapore">Singapore</option>
            </select><br>

            <label>Language Spoken: </label><br>
            <input type="checkbox" name="indonesia">
            <label>Bahasa Indonesia</label><br>
            <input type="checkbox" name="english">
            <label>English</label><br>
            <input type="checkbox" name="other">
            <label>Other</label><br>

            <label>Bio:</label><br>
            <textarea cols="30" rows="10"></textarea><br>

            <input type="submit" value="Submit">
        </form>
        

    </body>
</html>
