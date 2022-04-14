<?php include_once 'config/init.php'; ?>
<?php include_once 'lib/Job.php'; ?>
<?php include_once 'lib/Database.php'; ?>

<?php
$Job = new Job;


$template = new TempLate('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;


$template->title = 'Latest Jobs';
$template->jobs = $job->getAllJobs();
$template->categories = $job->getCategories();

echo $template;



