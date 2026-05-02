<!DOCTYPE html>
<html>
<head>
    <title>BITS Techno Enquiry Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }

        .container {
            width: 750px;
            margin: 20px auto;
            padding: 20px;
            border: 3px solid black;
            border-radius: 20px;
            background: #fff;
        }

        .header-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .logo {
            width: 70px;
        }

        h1, h2, h3 {
            text-align: center;
            margin: 5px 0;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold; 
        }

        input[type=text],
        input[type=email],
        input[type=date] {
            width: 95%;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
            padding: 8px;
            margin-top: 5px;
        }

        .row {
            display: flex;
            gap: 10px;
        }

        .row input {
            flex: 1;
        }

        .output {
            width: 750px;
            margin: 20px auto;
            padding: 15px;
            border: 2px solid green;
            background: #eaffea;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header-container">
        <img src="bits.png" class="logo">
        <h1>BITS TECHNO</h1>
    </div>

    <h2>COMPUTER TRAINING INSTITUTE</h2>
    <h3>Office No.7/8, Amatya Towers, Kolhapur</h3>
    <h3> Opp. Yupiter Hospital Dabholkar Corner,</h3>
    <h3> Near CBS,kolhapur-4160013</h3>
    <h4>Enrolled No: _________ &nbsp;&nbsp; Date: _________</h4>


    <form method="post">

        <label>Name</label>
        <div class="row">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="middle_name" placeholder="Middle Name">
            <input type="text" name="surname" placeholder="Surname" required>
        </div>

        <label>Address</label>
        <input type="text" name="address">

        <label>Contact No</label>
        <input type="text" name="contact">

        <label>Parent Contact</label>
        <input type="text" name="parent_contact">

        <label>Email</label>
        <input type="email" name="email">

        <label>Date of Birth</label>
        <input type="date" name="dob">

        <label>Occupation</label>
        <input type="checkbox" name="occupation[]" value="Student"> Student
        <input type="checkbox" name="occupation[]" value="Unemployed"> Unemployed
        <input type="checkbox" name="occupation[]" value="Employed"> Employed
        <input type="checkbox" name="occupation[]" value="Self Employed"> Self Employed

        <label>Education</label>
        <input type="checkbox" name="education[]" value="Graduate"> Graduate
        <input type="checkbox" name="education[]" value="Under graduate"> Under graduate
        <input type="checkbox" name="education[]" value="Post Graduate"> Post Graduate
        <input type="checkbox" name="education[]" value="Diploma"> Diploma

        <label>Stream</label>
        <input type="checkbox" name="stream[]" value="Arts"> Arts
        <input type="checkbox" name="stream[]" value="Commerce"> Commerce
        <input type="checkbox" name="stream[]" value="Science"> Science
        <input type="checkbox" name="stream[]" value="Engineering"> Engineering
        
        <label>Additional Qualification</label>
        <input type="text" name="additional_qualification">


        <label>College Name</label>
        <input type="text" name="college">
 
        <label>Purpose</label>
        <input type="checkbox" name="purpose[]" value="Developing Career"> Developing a career
        <input type="checkbox" name="purpose[]" value="Professional"> Professional Purpose
        <input type="checkbox" name="purpose[]" value="Knowledge"> Gaining Knowledge
        <input type="checkbox" name="purpose[]" value="Academic"> Academic Purpose

        <label>How did you know about us?</label>
        <input type="checkbox" name="reference[]" value="Banner"> Banner
        <input type="checkbox" name="reference[]" value="Newspaper"> Newspaper
        <input type="checkbox" name="reference[]" value="Seminar"> Seminar
        <input type="checkbox" name="reference[]" value="Website"> Website
        <input type="checkbox" name="reference[]" value="Cable TV"> Cable TV
        <input type="checkbox" name="reference[]" value="Friends"> Relatives & Friends
        <input type="checkbox" name="reference[]" value="Event"> Event

        <label>Preferred Batch Timing</label>
        <input type="checkbox" name="batch[]" value="Morning"> Morning
        <input type="checkbox" name="batch[]" value="Afternoon"> Afternoon
        <input type="checkbox" name="batch[]" value="Evening"> Evening
        <input type="checkbox" name="batch[]" value="Late Evening"> Late Evening
        <input type="checkbox" name="batch[]" value="Weekend"> Weekend

        <label>Preferred Job Location</label>
        <input type="checkbox" name="location[]" value="Kolhapur"> Kolhapur
        <input type="checkbox" name="location[]" value="Pune"> Pune
        <input type="checkbox" name="location[]" value="Mumbai"> Mumbai
        <input type="checkbox" name="location[]" value="Other"> Other


        <br><br>
        <input type="submit" name="submit" value="Submit">

    </form>

</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first = $_POST['first_name'] ?? '';
    $middle = $_POST['middle_name'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $address = $_POST['address'] ?? '';
    $contact = $_POST['contact'] ?? '';
    $parent = $_POST['parent_contact'] ?? '';
    $email = $_POST['email'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $college = $_POST['college'] ?? '';

    $occupation = implode(", ", $_POST['occupation'] ?? []);
    $education = implode(", ", $_POST['education'] ?? []);
    $stream = implode(", ", $_POST['stream'] ?? []);

    echo "<div class='output'>";
    echo "<h2>Submitted Data</h2>";

    echo "Name: $first $middle $surname <br>";
    echo "Address: $address <br>";
    echo "Contact: $contact <br>";
    echo "Parent Contact: $parent <br>";
    echo "Email: $email <br>";
    echo "DOB: $dob <br>";
    echo "Occupation: $occupation <br>";
    echo "Education: $education <br>";
    echo "Stream: $stream <br>";
    echo "College: $college <br>";

    echo "</div>";
}
?>