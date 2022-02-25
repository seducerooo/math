<?php 

include_once('./includes/header.php');

include('./includes/autoloader.inc.php');
             
?>
<br><br><br><br><br>


<div class="container d-flex justify-content-center">

                      <!-- number one -->

<form class="row gy-2 gx-3 align-items-center" method="POST" action="result.php">

  <div class="col-12 mb-4 mx-auto">
    <input type="number" name="num1" class="form-control"  placeholder="enter a number">
  </div>
  
                      <!-- operation -->   

  <div class="col-12 mb-4 mx-auto">
    <select class="form-select"  name="oper">
      <option value="add">
          Addition
        </option>
      <option value="sub">
          Subtraction
        </option>
        <option value="div">
          Division 
        </option>
      <option value="multy">
          Multiplication 
        </option>
    </select>
   </div>
                      <!-- number two -->

  <div class="col-12 mb-4 mx-auto">
    <div class="input-group">
      <input type="number" name="num2" class="form-control"  placeholder="Username">
  </div>

  <div class="col-12 mt-4">
    <button type="submit" class="btn btn-primary" name="submit">Calculate</button>
  </div>

</form>


</div>






<?php include_once('includes/footer.php');?>