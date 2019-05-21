<?php include ('header.php'); ?>



<!-- 

just test the value if we get or not               
                echo '<pre>';
                
                print_r($records);
                
                echo '<pre>';
-->


     
     

<div class="container">
    
    <!-- error takle msg ta show korbe otherwise success msg show korbe -->
    
    <?php if($error = $this->session->flashdata('response')):?>
    <div class="alert alert-dismissible alert-success">
        <?php echo $error; ?>
    </div>
    
    <?php endif ;?>
    
    
    
    
    
<!-- akta button nibo create er jonno -->
    <div class="row">
    <div class="col-lg-12">
         <td><a class="btn btn-primary "href="<?php echo base_url();?>Home/create.html">Create</a></td>
    </div>
    
</div>
<br>
<br>
<table class="table table-striped table-hover">
    
    <thead class="text-danger">
        
        <tr>
            
            <th>Customer Name</th>
            <th>Phone</th>
            <th>Adress</th>
            <th>City</th>
            <th>Country</th>
            <th>Operations</th>
        </tr>
            
        
    </thead>
    
    <tbody class="text-primary">
        
        <!-- jodi record takhe db e -->
         <?php if(count($records)): ?> 
        
        <!-- foreach loop er chalabo value gulo niye aste -->
        <?php foreach ($records as $record):?>
        
                    <tr>
                        <td><?php echo $record->customerName;?></td>
                        <td><?php echo $record->phone;?></td>
                        <td><?php echo $record->adress;?></td>
                        <td><?php echo $record->city;?></td>
                        <td><?php echo $record->country;?></td>
                        <td><?php echo anchor("Home/edit/{$record->id}", 'Update', ['class' =>'btn btn-success']);?></td>
                        <td><?php echo anchor("Home/delete/{$record->id}", 'Delete', ['class' =>'btn btn-danger']);?></td>
                    </tr>
        <?php endforeach ;?>
        <!-- here we use exit for else and end of loop -->
       
           <?php else: ?>
        
               
        <tr><b class="text-success">No results found</b></tr>
            
            
             <?php endif ;?> 
       
        
        
       
        
        
       
            
        
    </tbody>
        
    
    
</table>
</div>

<?php include ('footer.php'); ?>

    
   
 