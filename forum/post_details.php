<?php
session_start();

// Koneksi ke database
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "tr_rpl";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $postId = $_GET['id'];

    // Query untuk mengambil post berdasarkan ID
    $sql_post = "SELECT * FROM post WHERE id = ?";
    $stmt_post = $conn->prepare($sql_post);
    $stmt_post->bind_param("i", $postId);
    $stmt_post->execute();
    $result_post = $stmt_post->get_result();

    if ($result_post->num_rows > 0) {
        $row_post = $result_post->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<body>
    <header>    
        <?php include '../layout/headerlogin.html'; ?>
    </header>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Post Details</h1>
        
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($row_post['title']); ?></h5>
                <p class="card-text"><?php echo nl2br(htmlspecialchars($row_post['content'])); ?></p>
                <p class="card-text"><small class="text-muted">Posted by <?php echo htmlspecialchars($row_post['username']); ?> on <?php echo htmlspecialchars($row_post['created_at']); ?></small></p>
            </div>
        </div>

        <?php
        // Query untuk mengambil replies berdasarkan post_id
        $sql_replies = "SELECT * FROM replies WHERE post_id = ?";
        $stmt_replies = $conn->prepare($sql_replies);
        $stmt_replies->bind_param("i", $postId);
        $stmt_replies->execute();
        $result_replies = $stmt_replies->get_result();

        if ($result_replies->num_rows > 0) {
            while ($row_replies = $result_replies->fetch_assoc()) {
                echo '<div class="card mb-3">';
                echo '<div class="card-body">';
                echo '<p class="card-text">' . nl2br(htmlspecialchars($row_replies['content'])) . '</p>';
                echo '<p class="card-text"><small class="text-muted">Replied by ' . htmlspecialchars($row_replies['username']) . ' on ' . htmlspecialchars($row_replies['created_at']) . '</small></p>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p>No replies yet.</p>';
        }

        // Memeriksa apakah user sudah login
        if (isset($_SESSION['username'])) {
            // Tampilkan form untuk menambahkan replies baru
        ?>
        <!-- Form untuk menambahkan replies baru -->
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Reply to Post</h5>
                <form action="process_reply.php" method="POST">
                    <input type="hidden" name="post_id" value="<?php echo htmlspecialchars($postId); ?>">
                    <div class="form-group">
                        <label for="replyContent">Your Reply</label>
                        <textarea class="form-control" id="replyContent" name="replyContent" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Reply</button>
                </form>
            </div>
        </div>
        <?php
        } else {
            // Jika user belum login, tampilkan pesan atau link untuk login
            echo '<p class="mt-3"><a href="../login.html">Login</a> to reply to this post.</p>';
        }
        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    } else {
        echo "Post not found.";
    }

    $stmt_post->close();
    $stmt_replies->close();
} else {
    header("Location: index.php");
}

$conn->close();
?>
