<?php
$email = $emailErr = "";
$message = $messageErr = "";
$emailValid = $messageValid = false;
$successSubmitFlag = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email = test_input($_POST["email"]);
        $emailErr = "Invalid email format";
    } else {
        $email = test_input($_POST["email"]);
        $emailValid = true;
    }

    if (strlen(trim($_POST["message"])) == 0) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
        $messageValid = true;
    }

    if ($emailValid && $messageValid) {
        $sql = "INSERT INTO FAQ (Author,Question) VALUES (?,?);";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $message);

        if ($stmt->execute() === TRUE) {
            $email = $message = "";
            $successSubmitFlag = true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
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
                <?php if ($successSubmitFlag) echo "<h3 class=\"success\">Thank you for your submission!</h3>"; ?>
                <form method="post" action="/contact">
                    <div class="form-row">
                        <?php if (!$emailValid) echo "<div class=\"error\">" . $emailErr . "</div>"; ?>
                        <label for="email">Email:</label>
                        <input type="text" name="email" class="input" placeholder="someone@xyz.com" value="<?php echo $email; ?>">
                    </div>
                    <div class="form-row">
                        <?php if (!$messageValid) echo "<div class=\"error\">" . $messageErr . "</div>"; ?>
                        <label for="message">Message:</label>
                        <textarea name="message" class="input" rows="10"><?php echo $message; ?></textarea>
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
<!-- <script src="assets/js/contact.js"></script> -->