<?php
$current_date = new DateTime();
$due_date ="";
$due_days_diff = $current_date->diff($due_date);
if ($current_date > $due_date) {
    $overdue_message = $due_days_diff->format(
        '%y years, %m months, and %d days overdue.');
}
