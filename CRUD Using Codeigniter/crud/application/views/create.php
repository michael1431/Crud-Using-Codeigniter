<?php include ('header.php'); ?>

<!-- creating a form using codeigniter and take help from form helper by user guide -->


    
 <?php echo form_open('Home/save',['class' =>'form-horizontal']); ?>

    <fieldset>
      <div  class="container"></div>
    
      <legend class="text-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create Customer</legend>
    
          <div class="row">
              
              <div class="col-lg-6">
                  
                  <div class="form-group">
                      
                      <label for="customername" class="col-lg-4 control-label">Customer Name:</label>
                      <div class="col-lg-8">
                      <?php echo form_input(['name' =>'customerName', 'class' =>'form-control', 'placeholder' =>'Enter Your Name', 'value' => set_value('customerName')]);?>
                      </div>
                      
                  </div>
                  
                  
              </div>
              
              <div class="col-lg-6">
                  <!-- showing the error-->
                  <?php echo form_error('customerName'); ?>
                  
              </div>
  
              
          </div>
          
          
           <div class="row">
              
              <div class="col-lg-6">
                  
                  <div class="form-group">
                      
                      <label for="phone" class="col-lg-4 control-label">Phone:</label>
                      <div class="col-lg-8">
                      <?php echo form_input(['name' =>'phone', 'class' =>'form-control', 'placeholder' =>'Enter Your Phone', 'value' => set_value('phone')]);?>
                      </div>
                      
                  </div>
                  
                  
              </div>
              
               <div class="col-lg-6">
                   <?php echo form_error('phone'); ?>
               </div>
  
              
          </div>
          
          
          
           <div class="row">
              
              <div class="col-lg-6">
                  
                  <div class="form-group">
                      
                      <label for="adress" class="col-lg-4 control-label">Adress:</label>
                      <div class="col-lg-8">
                      <?php echo form_input(['name' =>'adress', 'class' =>'form-control', 'placeholder' =>'Enter Your Adress', 'value' => set_value('adress')]);?>
                      </div>
                      
                  </div>
                  
                  
              </div>
              
               <div class="col-lg-6">
                   <?php echo form_error('adress'); ?>
               </div>
  
              
          </div>
          
           <div class="row">
              
              <div class="col-lg-6">
                  
                  <div class="form-group">
                      
                      <label for="city" class="col-lg-4 control-label">City:</label>
                      <div class="col-lg-8">
                      <?php echo form_input(['name' =>'city', 'class' =>'form-control', 'placeholder' =>'Enter Your City', 'value' => set_value('city')]);?>
                      </div>
                      
                  </div>
                  
                  
              </div>
              
               <div class="col-lg-6">
                   <?php echo form_error('city'); ?>
               </div>
  
              
          </div>
          
           <div class="row">
              
              <div class="col-lg-6">
                  
                  <div class="form-group">
                      
                      <label for="country" class="col-lg-4 control-label">Country:</label>
                      <div class="col-lg-8">
                      <?php echo form_input(['name' =>'country', 'class' =>'form-control', 'placeholder' =>'Enter Your Country', 'value' => set_value('country')]);?>
                      </div>
                      
                  </div>
                  
                  
              </div>
              
               <div class="col-lg-6">
                   <?php echo form_error('country'); ?>
               </div>
  
              
          </div>
          
          
          
          
          
          
          <div class="form-group">
              
              <div class="col-lg-10 col-lg-offset-2">
                  <?php echo form_submit(['value' =>'Submit', 'class' =>'btn btn-success']);?>
                  <?php echo form_reset(['value' =>'Reset', 'class' =>'btn btn-info']);?>
              </div>
              
          </div>
    
    
    
    </fieldset>
<?php echo form_close(); ?>
   








<?php include ('footer.php'); ?>

