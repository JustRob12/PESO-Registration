<?php include '../assets/index/header.php'; ?>
<?php include '../assets/index/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../style/registration.css"> 
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/style.css">  <!-- Link to your CSS file -->
</head>
<body>

<h1>Registration</h1>

<form action="../assets/save_to_excel.php" method="POST" class="registration-form">
    <div class="form-group">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required>
    </div>

    <div class="form-group">
        <label for="middlename">Middle Name:</label>
        <input type="text" id="middlename" name="middlename">
    </div>

    <div class="form-group">
        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required>
    </div>

    <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
    </div>

    <div class="form-group">
        <label for="contact_number">Contact Number:</label>
        <input type="text" id="contact_number" name="contact_number">
    </div>

    <div class="form-group">
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday">
    </div>

    <div class="form-group">
        <label for="date_registered">Date Registered:</label>
        <input type="date" id="date_registered" name="date_registered" required>
    </div>

    <div class="form-group">
        <label for="religion">Religion:</label>
        <input type="text" id="religion" name="religion">
    </div>

    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address">
    </div>

    <div class="form-group">
        <label for="course">Course (optional):</label>
        <input type="text" id="course" name="course">
    </div>

    <div class="form-group">
        <label for="province">Province:</label>
        <input type="text" id="province" name="province">
    </div>

    <div class="form-group">
        <label for="purpose">Purpose:</label>
        <textarea id="purpose" name="purpose"></textarea>
    </div>

    <button type="submit" class="submit-btn">Save to Excel</button>
</form>

</body>
</html>
