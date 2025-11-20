
<?php include 'includes/head.php'; ?>

<main>
    <h1>Hello, World!</h1>

    <p>Accessible (WCAG), limited JS, vanilla PHP, SQLite. Emphasis on native HTML elements, built-in validation. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <a href="">nostrud exercitation</a> ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

    <h2>Todo / Philosophy</h2>

    <ul>
        <li>Set up PHP templates and docker file</li>
        <li>Separate the CSS file as an includeable classless framework</li>
        <li>Use SQLite, set up tables</li>
        <li>Set up magic email links for auth</li>
        <li>Use JS to prepend h1 to title tag</li>
    </ul>

    <h2>Popular Products</h2>

    <table>
        <caption>Sample Table Caption</caption>
        <thead>
            <tr>
                <th>Header 1</th>
                <th>Header 2</th>
                <th>Header 3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
            </tr>
            <tr>
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
            </tr>
        </tbody>
    </table>

    <h2>Registered Users</h2>

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
