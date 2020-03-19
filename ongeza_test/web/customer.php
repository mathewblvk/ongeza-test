

<?php require_once 'header.php' ?>

<main>
<div class="container">
<a class="btn btn-primary btn-sm" href="index.php?action=gender_add">Add Gender</a>
<a class="btn btn-primary btn-sm" href="index.php?action=customer_add">Add Customer</a>


<h3 class="text-center">Customers</h3>

<br>
<table class='table table-hover'>
    <thead> 
        <tr>
            <th> <b>Customer ID</b></th>
            <th> <b>First name</b></th>
            <th> <b>Last name</b></th>
            <th> <b>Town</b></th>
            <th> <b>Gender</b></th>
            <th> <b>Edit</b></th>
            <th> <b>Delete</b></th>
        </tr>
    </thead>
    <tbody>
    <?php
    if(!empty($result))
    {
        foreach($result as $key => $value){
    ?>
    <tr>
    <td><?php echo $result[$key]['id'] ?></td>
    <td><?php echo $result[$key]['first_name'] ?></td>
    <td><?php echo $result[$key]['last_name'] ?></td>
    <td><?php echo $result[$key]['town_name'] ?></td>
    <td><?php echo $result[$key]['gender_name'] ?></td>
    <td><a class="btn btn-success btn-sm" href="index.php?action=customer_edit&id=<?php echo $result[$key]['id'];?>">Edit</a></td>
    <td><a class="btn btn-danger btn-sm"  href="index.php?action=customer_delete&id=<?php echo $result[$key]['id'];?>">Delete</a></td>
    </tr>
    <?php
        }
    } else {
        ?>
            <tr>
                <th class="text-center" colspan="5">No customer yet, Click on Add customet to Add Custmers</th>
            </tr>
      <?php
    }
    ?>
    </tbody>
</table>

</div>

</main>

<script>







