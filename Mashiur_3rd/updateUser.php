<?php 
include "./controller/actionUpdate.php";
include "header.php";
?>
<div class="main-container">
    <?php include "sidebar.php"; ?>
    <div class="content">
        <h3>Update Form</h3>
        <form action="" method='POST' enctype=''>
          <?php  foreach($user as $value){  ?>
            <label>First Name:</label>
            <input type="text" name="fname" id="fname" value="<?php echo $value['first_name'] ?>"><br>
            <label>Last Name:</label>
            <input type="text" name="lname" id="lname" value="<?php echo $value['last_name'] ?>"><br>
            <label>Address:</label>
            <textarea name="address" id="address" ><?php echo $value['address'] ?></textarea><br>
            <div id="state">
            <label>Division</label>
                <select id="division" name="division" onchange="showDistrict(this.value)">
                    <?php
                       if(isset($value['division']))
                           {
                            echo "<option value=".$value['divId'].">". $value['division'] ."</option>";
                           }
                            else 
                            { echo "<option value='0'>Select Division</option>"; }
                       foreach($divisions as $div)
                        {
                           echo "<option value=".$div['id'].">". $div['name'] ."</option>";
                        } 
                    ?>
                </select><br> 
            </div>
            <div id="zilla">
            <label>District</label>
            <select name="district" id="district" onchange="showThana(this.value)"> 
              <?php  if(isset($value['district']))
                    {
                     echo "<option value=".$value['dId'].">". $value['district'] ."</option>";
                    }
                     else 
                     { echo "<option value='0'>Select District</option>"; }
              ?>
            </select><br>
            </div>
            <div id="upazilla">
            <label>Thana</label>
            <select name="thana" id="thana"> 
                <?php  if(isset($value['thana']))
                    {
                     echo "<option value=".$value['tId'].">". $value['thana'] ."</option>";
                    }
                     else 
                     { echo "<option value='0'>Select Thana</option>"; }
              ?>
            </select><br>
            </div>    
   <!--         <label>Hobby:</label>
            <input type="checkbox" name="hobby" id="hobby" value="Gardening">Gardening<br>
            <input type="checkbox" name="hobby1" id="hobby1" value="Gaming">Gaming<br>
            <input type="checkbox" name="hobby2" id="hobby2" value="Drawing">Drawing<br>  -->
            <label>Gender:</label>
            <?php
            if($value['gender']==1)
            { ?>
            <input type="radio" name="gender" id="gender" value="1" checked>Male
            <input type="radio" name="gender" id="gender" value="2" >Female<br>
            <?php } else { ?>
             <input type="radio" name="gender" id="gender" value="1" >Male       
            <input type="radio" name="gender" id="gender" value="2" checked>Female<br>
            <?php } ?>
            <label>Status:</label>
            <?php
            if($value['status']==1)
            { ?>
            <input type="radio" name="status" id="status" value="1" checked>Active
            <input type="radio" name="status" id="status" value="0">Inactive<br>
            <?php } else { ?>
            <input type="radio" name="status" id="status" value="1">Active
            <input type="radio" name="status" id="status" value="0" checked>Inactive<br>
            <?php } ?>
 
            <input type="submit" name="save" value="save">
            <?php } ?>
        </form>
    </div>
</div>
<script src="./js/Address.js"></script>
<?php include "footer.php"; ?>