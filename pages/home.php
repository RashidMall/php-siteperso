<h1>Home</h1>
<?php 
$mydata = getUserData();
?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $mydata['name'] . ' ' . $mydata['first_name'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $mydata['occupation'];?></h6>
    <p class="card-text">
    <?php foreach($mydata['experiences'] as $experience){
        echo $experience['year'] . ' - ' . $experience['company'] . '<br/>';
    };?>
    </p>
  </div>
</div>