<?php
require_once 'dbh.inc.php';
require_once 'sessions.inc.php';
// Function to calculate remaining time in seconds
function getRemainingTime() {
    $startTime = isset($_SESSION['start_time']) ? $_SESSION['start_time'] : time();
    $currentTime = time();
    $elapsedTime = $currentTime - $startTime;
    $remainingTime = (3 * 24 * 60 * 60) - $elapsedTime; // 3 days in seconds
    return $remainingTime;
}

// Function to format remaining time in days, hours, minutes, and seconds
function formatTime($seconds) {
    $days = floor($seconds / (24 * 60 * 60));
    $hours = floor(($seconds % (24 * 60 * 60)) / (60 * 60));
    $minutes = floor(($seconds % (60 * 60)) / 60);
    $seconds = $seconds % 60;
    return sprintf("%02d:%02d:%02d:%02d", $days, $hours, $minutes, $seconds);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if countdown has started
  if (!isset($_SESSION['start_time'])) {
      $_SESSION['start_time'] = time();
  }else {
    // Get remaining time
    $remainingTime = getRemainingTime();

    // $i = 1;
    // while ($i < 10) {
    // header('Location: data.inc.php');
    // };

    echo "Remaining Time: " . formatTime($remainingTime);


    echo "Remaining Time: " . formatTime($remainingTime);
function timeleft()
{
  echo "Remaining Time: " . formatTime($remainingTime);

}
    // Check if countdown has elapsed
    if ($remainingTime <= 0) {
       // Reset countdown
        echo "Countdown finished.";
    } else {
        // Display remaining time
        echo "Remaining Time: " . formatTime($remainingTime);
    }
  }


    // Reset the countdown

} else {

}
