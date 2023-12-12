<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Registration Form</h1>
        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Check if the required keys exist in the $_POST array
            $name = isset($_POST["name"]) ? $_POST["name"] : '';
            $email = isset($_POST["email"]) ? $_POST["email"] : '';
            $phone = isset($_POST["phone"]) ? $_POST["phone"] : '';
            $membership = isset($_POST["membership"]) ? $_POST["membership"] : '';
            $expirationDate = isset($_POST["expirationDate"]) ? $_POST["expirationDate"] : '';

            // Process the data (you can add your own logic here)

            // For now, let's just display the submitted data
            echo "<p>Registration Details:</p>";
            echo "<p>Name: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Phone: $phone</p>";
            echo "<p>Membership: $membership</p>";
            echo "<p>Expiration Date: $expirationDate</p>";
        }
        ?>
        <form method="post" class="mt-4">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="membership" class="col-sm-2 col-form-label">Membership</label>
                <div class="col-sm-10">
                    <select class="form-control" id="membership" name="membership">
                        <option value="basic">Basic</option>
                        <option value="premium">Premium</option>
                        <option value="gold">Gold</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="expirationDate" class="col-sm-2 col-form-label">Expiration Date</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="expirationDate" name="expirationDate" placeholder="Enter expiration date (MM/YY)" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Register</button>
                    <button type="button" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
