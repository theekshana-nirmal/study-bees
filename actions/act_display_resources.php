<?php

//Display the study resources
if (!empty($resources)) {
    foreach ($resources as $resource) {
        echo "<div class='card study-material'>";
        echo "<div class='material-details'>";
        echo "<h2>" . htmlspecialchars($resource['title']) . "</h2>";
        echo "<p>" . htmlspecialchars($resource['description']) . "</p>";
        echo "</div>";
        echo "<a href='" . htmlspecialchars($resource['link']) . "' target='_blank' class='btn-primary'><i class='icon-angle-double-right'></i></a>";
        echo "</div>";
    }
} else {
    echo "<p>📚 Oops! We couldn't find any study resources for: " . htmlspecialchars($subject_name) . "</p>";
}