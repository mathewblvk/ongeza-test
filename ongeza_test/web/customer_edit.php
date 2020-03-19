<?php require_once 'header.php'; ?>

</main>
<div class="container">

<hr>
<div class="col-lg-12">	
	<h1 class="page-header">Edit Customer</h1>	
</div>
<hr>

    <form method="POST">
    <div class="form-row">
        <div class="form-group col-md-12">
            <label>First name</label>
            <input type="text" class="form-control" name="first_name" value="<?php echo $result[0]['first_name']?>"required>
        </div>

        <div class="form-group col-md-12">
            <label>Last name</label>
            <input type="text" class="form-control" name="last_name" value="<?php echo $result[0]['last_name']?>" required>
        </div>

        <div class="form-group col-md-8">
            <label>Town name</label>
            <input type="text" class="form-control" name="town_name" value="<?php echo $result[0]['town_name']?>" required> 
        </div>

        <div class="form-group col-md-4">
                <label>Select a Gender:</label>
                    <select name="gender_id" cols="5" rows="5" class="form-control">
                        <?php if(!empty($GenderResult))
                        {
                            foreach($GenderResult as $key => $value){
                                ?>
                                <option value="<?php echo $GenderResult[$key]['id']?>"><?php echo $GenderResult[$key]["gender_name"];?></option>
                            <?php
                            }
                        }
                        ?>
                    </select>
            </div>
        <button type="submit" class="btn btn-primary btn-sm" name="add">Submit</button>
    </div>
    </form>

    </main>
   
 </div>

