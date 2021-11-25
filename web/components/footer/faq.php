<div class="frequently">
    <h3 class="f-title">Frequently asked questions</h3>
    <ul>

        <?php
        $sql = $conn->query("SELECT * FROM FAQ ORDER BY Submitted DESC LIMIT 4");
        if ($sql != false) {
            foreach ($sql as $record) {
                echo  "<li>" . $record["Question"] . "<br/><cite>" . $record["Author"] . "</cite></li>";
            }
        }
        ?>

    </ul>
</div>