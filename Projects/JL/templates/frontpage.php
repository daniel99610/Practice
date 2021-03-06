<?php include 'inc/header.php'; ?>
      <div class="jumbotron">
        <h1>Find a Job</h1>
        <form method="GET" action="index.php">
          <select name="category" class="form-control">
            <option value="0">Choose Category</option>
            <?php foreach($categories as $category): ?>
              <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
            <?php endforeach; ?>
          </select>
        </form>
      </div>

      <?php foreach($jobs as $job): ?>
      <div class="row marketing">
            <div class="col-md-10">
              <h4><?php echo $job->job_title; ?></h4>
              <p><?php echo $job->description; ?></p>
            </div>
            <div class="col-md-2">
                    <a class="btn btn-default" href="#">View</a>
            </div>
        </div>
        <?php endforeach; ?>

<?php include 'inc/footer.php'; ?>