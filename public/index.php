<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
    <link   rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
    <img src="../images/mylogo.jpg" id="logo" onclick="goHome()">
    <button onclick="showSection('create')">Create</button>
    <button onclick="showSection('read')">Read</button>
    <button onclick="showSection('update')">Update</button>
    <button onclick="showSection('delete')">Delete</button>
</nav>

<!-- HOME -->
<section id="home" class="homecontent"> 
    <h1 class="splash">Welcome to Student Management System</h1>
    <h2 class="splash">A Project in Integrative Programming Technologies</h2>
</section>

<!-- CREATE -->
<section id="create" class="content">
    <h1 class="contenttitle">Insert New Student</h1>

    <form action="../includes/insert.php" method="POST">
        <label>Surname</label>
        <input type="text" name="surname" required><br/>

        <label>Name</label>
        <input type="text" name="name" required><br/>

        <label>Middle name</label>
        <input type="text" name="middlename"><br/>

        <label>Address</label>
        <input type="text" name="address"><br/>

        <label>Mobile Number</label>
        <input type="text" name="contact"><br/>

        <button type="button" id="clrbtn">Clear</button>
        <button type="submit">Save</button>
    </form>
</section>

<!-- READ -->
<section id="read" class="content">
    <h1>View Students</h1>

    <div id="studentTable"></div>
</section>

<<section id="update" class="content">
    <h1>Update Student Records</h1>
    <h2>Edit Student</h2>

    <form>
        <label>Surname</label>
        <input type="text">

        <label>Name</label>
        <input type="text">

        <label>Middle name</label>
        <input type="text">

        <label>Address</label>
        <input type="text">

        <label>Mobile Number</label>
        <input type="text">
    </form>
</section>
<section id="delete" class="content">
    <h1>Remove Student Records</h1>

    <div id="deleteTable"></div>
</section>

<script src="script.js"></script>

</body>
</html>