<?php
include 'sql.php';

$search_query = '';
$events = [];

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['search'])) {
    $search_query = $_GET['search'];
    $stmt = $conn->prepare("SELECT * FROM events WHERE name LIKE ? ");
    $like_query = '%' . $search_query . '%';
    $stmt->bind_param("s", $like_query);
    $stmt->execute();
    $result = $stmt->get_result();
    $events = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['event_id'])) {
    $event_id = $_POST['event_id'];

    $stmt = $conn->prepare("UPDATE events SET registered_users = registered_users + 1 WHERE id = ?");
    $stmt->bind_param("i", $event_id);

    if ($stmt->execute()) {
        echo "<p>Successfully registered for the event! <a href='main.php'>Go back</a></p>";
    } else {
        echo "<p>Error registering for the event: " . $stmt->error . "</p>";
    }

    $stmt->close();
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Event Registration</title>
</head>
<body>
    <h1>Search and Register for Events</h1>

    <form method="GET" action="">
        <label for="search">Search Events:</label>
        <input type="text" name="search" id="search" value="<?= htmlspecialchars($search_query) ?>" placeholder="Enter event name or description">
        <button type="submit">Search</button>
    </form>

    <?php if (!empty($events)): ?>
        <h2>Search Results:</h2>
        <ul>
            <?php foreach ($events as $event): ?>
                <li>
                    <p>Registered Users: <?= $event['registered_users'] ?></p>
                    <form method="POST" action="">
                        <input type="hidden" name="event_id" value="<?= $event['id'] ?>">
                        <button type="submit">Register</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php elseif (isset($_GET['search'])): ?>
        <p>No events found for your search query.</p>
    <?php endif; ?>
</body>
</html>
