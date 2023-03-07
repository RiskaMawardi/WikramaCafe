<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Wikrama</title>
    <link rel="icon" href="assets/img/wk.png" type="image/icon type">
    <!-- Link Css -->
    <link rel="stylesheet" href="assets/css/style1.css">
    <!-- Box Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <section class="order" id="order">
        <div>
            <form action="/action_page.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                </select>

                <input type="submit" value="Submit" class="btn">
            </form>
        </div>
    </section>
    <section class="footer" id="footer">
        <div class="social">
            <a href=""><i class='bx bxl-instagram'></i></a>
            <a href=""><i class='bx bxl-facebook-circle'></i></a>
            <a href=""><i class='bx bxl-tiktok'></i></a>
        </div>
        <div class="links">
            <a href="">Privacy Policy</a>
            <a href=""> Terms Of Use</a>
            <a href=""> Our Company</a>
        </div>
        <p>&#169; Cafe Wikrama All Right Reserved</p>
    </section>
</body>

</html>
