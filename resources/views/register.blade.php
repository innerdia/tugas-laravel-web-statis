<!DOCTYPE html>
<html>
    <head>
        <title>Berlatih HTML</title>
    </head>
    <body>
        <div>
            <h1>Buat Account Baru!</h1>
        </div>
        <div>
            <h3>Sign Up Form</h3>
        </div>
        <div>
            <form action="/welcome" method="POST">
                @csrf
                <!-- name -->
                <label for="first_name">First Name:</label><br><br>
                <input type="text" id="first_name" name="first_name">
                <br><br>
                <label for="last_name">Last Name:</label><br><br>
                <input type="text" id="last_name" name="last_name">
                <br><br>
                <!-- gender -->
                <label for="gender">Gender:</label><br><br>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
                <br><br>
                <!-- nationality -->
                <label for="nasionality">Nationality:</label><br><br>
                <select id="nationality" name="nationality">
                    <option value="indo">Indonesian</option>
                    <option value="sgp">Singaporean</option>
                    <option value="mly">Malaysian</option>
                    <option value="aus">Australian</option>
                </select>
                <br><br>
                <!-- language -->
                <label for="language">Language Spoken:</label><br><br>
                <input type="checkbox" id="vehicle1" name="vehicle1" value="ind">
                <label for="vehicle1">Bahasa Indonesia</label><br>
                <input type="checkbox" id="vehicle2" name="vehicle2" value="eng">
                <label for="vehicle2">English</label><br>
                <input type="checkbox" id="vehicle3" name="vehicle3" value="oth">
                <label for="vehicle3">Other</label><br><br>
                <!-- bio -->
                <label for="bio">Bio:</label><br><br>
                <textarea id="review" name="review" rows="10" cols="30"></textarea>
                <br>
                <!-- submit -->
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>