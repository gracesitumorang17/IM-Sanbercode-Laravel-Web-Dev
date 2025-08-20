<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/kirim" method = "POST">
        @csrf
        <label>First name:</label> <br />
        <br />
        <input type="text" name="firstname" /> <br />
        <br />
        <label>Last name:</label> <br />
        <br />
        <input type="text" name="lastname" /> <br />
        <br />
        <label>Gender:</label> <br />
        <br />
        <input type="radio" name ="gn" value="1" /> Male <br />
        <input type="radio" name ="gn" value="1" /> Female <br />
        <input type="radio" name ="gn" value="1" /> Other <br />
        <br />
        <label >Nationality:</label> <br />
        <br />
        <select name="country">
            <option value="1">Indonesia</option>
            <option value="2">Inggris</option>
            <option value="3">China</option>
            <option value="4">Australia</option>
        </select>
        <br /> <br /> 
        <label>Languange Spoken:</label> <br />
        <br />
        <input type="checkbox" name="ls" value="1" /> Bahasa Indonesia <br />
        <input type="checkbox" name="ls" value="2"  /> English <br />
        <input type="checkbox" name="ls" value="3"  /> Other <br />
        <br />
        <label>Bio:</label> <br />
        <br />
        <textarea name="bio" cols="25" rows="15"></textarea>
        <br />
        <input type="submit" value="Sign Up" />


    </form>
</body>
</html>