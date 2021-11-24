<footer>
    <div id="social-sec">
        <h3 class="f-title">Social Media</h3>
    </div>
    <div class="contact">
        <h3 class="f-title">Contact Us</h3>
        <ul>
            <li>
                <address>
                    ABC Jewlers <br>
                    XYZ STREET <br>
                    New York
                </address>
            </li>
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:email@xyz.com">email@xyz.com</a>
            </li>
            <li>
                <i class="fa fa-phone"></i>
                <a href="tel:+123 456 789">+123 456 789</a>
            </li>
        </ul>
    </div>
    <div class="frequently">
        <h3 class="f-title">Frequently asked questions</h3>
        <ul>

            <?php
            $sql = $conn->query("SELECT * FROM FAQ");
            if ($sql != false) {
                foreach ($sql as $record) {
                    echo  "<li> <div>" . $record["Question"] . "</div><div><cite>" . $record["Author"] . "</cite></div></li>";
                }
            }
            ?>

        </ul>
    </div>
    <div class="sub-footer">
        <p>Current Time: <span id="time">12/25/2021, 9:00:00 AM</span></p>
    </div>
</footer>
<script src="assets/js/social.js"></script>
<script src="assets/js/time.js"></script>