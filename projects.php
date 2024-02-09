<?php
$projects = [
    "project1" => [
        "title" => "Project 1",
        "image" => "./assets/1.jpg",
        "description" => "HTML/CSS"
    ],
    "project2" => [
        "title" => "Project 2",
        "image" => "./assets/2.png",
        "description" => "HTML/CSS"
    ],
    "project3" => [
        "title" => "Project 3",
        "image" => "./assets/3.png",
        "description" => "HTML/CSS"
    ]
];

foreach ($projects as $key => $project) {
    echo '<div class="work">';
    echo '<a href="#"><img src="' . $project["image"] . '" alt="" /></a>';
    echo '<h3>' . $project["title"] . '</h3>';
    echo '<p>' . $project["description"] . '</p>';
    echo '</div>';
}
?>

