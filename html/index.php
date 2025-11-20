<?php include 'includes/head.php'; ?>

<main>
    <h1>Hello, World!</h1>

    <p>Accessible (WCAG), limited JS, vanilla PHP, SQLite, mostly classless CSS. Emphasis on native HTML elements, built-in validation, email-based auth. Link to an <a href="/about">About</a> page.</p>

    <h2>Todo</h2>

    <ul>
        <li>Use SQLite, set up tables</li>
        <li>Set up magic email links for auth</li>
        <li>Sample pages/features - products, search</li>
    </ul>

    <?php
    echo TEST_VAR;
    ?>

    <table>
        <caption>Users in the Database</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Display Name</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Query users from the database
            $result = $db->query("SELECT id, email, display_name, created_at FROM users ORDER BY created_at DESC");
            
            if ($result) {
                while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['display_name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['created_at']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No users found.</td></tr>";
            }
            ?>
        </tbody>
    </table>

</main>

<?php include 'includes/foot.php'; ?>
