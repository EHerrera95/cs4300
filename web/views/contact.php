<?php
$email = $emailErr = "";
$message = $messageErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    if (empty($_POST["message"])) {
        $messageErr == "Message is required";
    } else {
        $message = test_input($_POST["message"]);
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<main>
    <section class="products-sec">
        <h1 class="title">Contact Us</h1>
        <div class="contact-box">
            <div class="contact-details">
                <h3 class="center c-title">
                    Office Hours
                </h3>
                <table class="center">
                    <tr>
                        <th>Monday</th>
                        <td>09:00 AM - 05:00 PM</td>
                    </tr>
                    <tr>
                        <th>Tuesday</th>
                        <td>09:00 AM - 05:00 PM</td>
                    </tr>
                    <tr>
                        <th>Wednesday</th>
                        <td>09:00 AM - 05:00 PM</td>
                    </tr>
                    <tr>
                        <th>Thursday</th>
                        <td>09:00 AM - 05:00 PM</td>
                    </tr>
                    <tr>
                        <th>Friday</th>
                        <td>09:00 AM - 05:00 PM</td>
                    </tr>
                    <tr>
                        <th>Saturday</th>
                        <th>OFF</th>
                    </tr>
                    <tr>
                        <th>Sunday</th>
                        <th>OFF</th>
                    </tr>
                </table>
            </div>
            <div class="contact-form">
                <h3 class="center c-title">
                    We would love to hear from you!
                </h3>
                <form method="post" action="/contact">
                    <div class="form-row">
                        <div id="error">
                            <?php
                            echo $nameErr;
                            if (strlen($nameErr)) {
                                echo "<br />";
                            }
                            echo $messageErr;
                            ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <span class="error"><?php echo $emailErr; ?></span>
                        <label for="email">Email:</label>
                        <input type="text" name="email" class="input" placeholder="someone@xyz.com" value="<?php echo $email; ?>">
                    </div>
                    <div class="form-row">
                        <span class="error"><?php echo $messageErr; ?></span>
                        <label for="message">Message:</label>
                        <textarea name="message" class="input" rows="10">
                        <?php echo $message; ?>
                        </textarea>
                    </div>
                    <div class="form-row center">
                        <button class="btn" type="submit">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?php
echo $email;
echo $message;
?>
<!-- <script src="assets/js/contact.js"></script> -->