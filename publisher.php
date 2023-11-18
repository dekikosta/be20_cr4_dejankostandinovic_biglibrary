<?php

if (isset($_GET['publisher'])) {
    $selectedPublisher = $_GET['publisher'];

    $media = getMediaByPublisher($selectedPublisher);

    echo "<h2>Media Published by $selectedPublisher</h2>";
    echo "<ul>";
    foreach ($media as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
} else {
   
    echo "<p>No publisher selected.</p>";
}

function getMediaByPublisher($publisher) {
    
    return [];
}

?>
