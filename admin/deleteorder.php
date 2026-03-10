<?php
session_start();

if (isset($_SESSION['sg'])) {
    if (isset($_GET['i']) && is_numeric($_GET['i'])) {
        $i = (int) $_GET['i'];

      
        $c = new mysqli("localhost", "root", "", "grocery");

        
        $stmt = $c->prepare("DELETE FROM odear_now WHERE id = ?");
        $stmt->bind_param("i", $i);

        if ($stmt->execute()) {
            header("Location: show_order.php");
            exit;
        } else {
            echo "Error deleting record: " . $c->error;
        }

        $stmt->close();
        $c->close();
    } else {
        echo "Invalid ID!";
    }
} else {
    header("Location: show_order.php");
    exit;
}
?>
