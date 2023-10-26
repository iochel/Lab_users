<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom CSS file link  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="row header-content">
  <div class="column-12">
    Juan Dela Cruz
  </div>
</div>
<div class="container">
    <div class="item1">
        <div class="col1">
            <img src="https://simg.nicepng.com/png/small/128-1280406_view-user-icon-png-user-circle-icon-png.png"/>
        </div>
        <h2>Name:<span> Juan Dela Cruz</span></h2>
        <ul>
            <li>Home</li>
            <li>Subjects</li>
            <li>Assignment</li>
            <li>Quiz</li>
            <li>About</li>
        </ul>
    </div>

    <?php
    // Define programming topics and languages in an array
    $programmingTopics = [
        "Web Programming" => ["HTML, CSS, and JavaScript", "PHP", "ASP.NET"],
        "Mobile Programming" => ["Android", "iOS", "Windows"],
        "Desktop Programming" => ["Java", "C#", "Python"]
    ];
    
    // Loop through the topics and languages to generate additional rows
    $itemCount = 2; // Start with item2
    foreach ($programmingTopics as $topic => $languages) {
        echo '<div class="item' . $itemCount . '">';
        echo '<div class="col' . $itemCount . '">';
        echo '<img src="' . getImageForTopic($topic) . '"/>';
        echo '</div>';
        echo '<h2>' . $topic . '</h2>';
        echo '<ul>';
        foreach ($languages as $language) {
            echo '<li>' . $language . '</li>';
        }
        echo '</ul>';
        echo '</div>';
        $itemCount++; // Increment the item number
    }
    
    // Function to get the image URL based on the topic
    function getImageForTopic($topic) {
        $imageMap = [
            "Web Programming" => "https://st4.depositphotos.com/25878326/27462/v/450/depositphotos_274629722-stock-illustration-work-coding-and-programming-on.jpg",
            "Mobile Programming" => "https://vr4solutions.com/img/android-mobile.png",
            "Desktop Programming" => "https://cdn1.iconfinder.com/data/icons/programming-innovicons-color/128/button-java-programming-programming_language-computer_monitor-512.png"
        ];
        return $imageMap[$topic];
    }
    ?>
</div>
</body>
</html>
