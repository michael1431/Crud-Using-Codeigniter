<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    // db hote sob value niye asbo
	public function index()
	{
                $this->load->model('Crudmodel');
                // call the get records function from crudmodel
                $records = $this->Crudmodel->getrecords();
                
                // record ta k akta array er modde nichi nahole undefinded dekabe
		$this->load->view('view_home',['records' =>$records]);
	}
        
        
         public function create(){
            
             $this->load->view('create');
            
        }
        
        // form validation korbo and db e data insert korbo
        
        public function save(){
            // validation of the form first using codeigniter form_validation
            //userguide->form validation class->form->setting rules
            //  first name is input field and second name must be capital letter and third is rulse
            
                $this->form_validation->set_rules('customerName', 'Customer Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('adress', 'Adress', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
                $this->form_validation->set_rules('country', 'Country', 'required');
                // show the error in red color
                $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
                

		if ($this->form_validation->run())
		{
                    // jodi error na takhe tahole input value gulo pass korbe
                    // then segulo model e load hobe
                    // then call the function of model
                       $data  = $this->input->post();
			$this->load->model('Crudmodel');
                       if( $this->Crudmodel->saverecords( $data ) ){
                           // display message
                           $this->session->set_flashdata('response','Record Saved Successfully!!');
                           
                       }
                       else{
                           $this->session->set_flashdata('response','Record Failed To Load!!');
                       }
                       return redirect('Home'); 
		}
		else
		{
                    // this is a building function we get this in error delimiters
			//echo validation_errors();
                    // we want to show this error in create page so
                    
                    $this->load->view('create');
                    
		} 
            
            
        }
        // Update er age sob value niye asha table e db tekhe

        public function edit($record_id){
            // first e id ta diye sob value niye asbo record er jonno
            $this->load->model('Crudmodel');
           $record = $this->Crudmodel->getAllrecords($record_id);
          
           $this->load->view('update', ['record' =>$record]);
        }
        
        // update er jonno function create korchi
        public function update($record_id){
            
            // follow the save function  
            
            
                $this->form_validation->set_rules('customerName', 'Customer Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('adress', 'Adress', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
                $this->form_validation->set_rules('country', 'Country', 'required');
                // show the error in red color
                $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
                

		if ($this->form_validation->run())
		{
                    // jodi error na takhe tahole input value gulo pass korbe
                    // then segulo model e load hobe
                    // then call the function of model
                       $data  = $this->input->post();
			$this->load->model('Crudmodel');
                        // pass the id and all data
                       if( $this->Crudmodel->updaterecords( $record_id, $data) ){
                           // display message
                           $this->session->set_flashdata('response','Record Updated Successfully!!');
                           
                       }
                       else{
                           $this->session->set_flashdata('response','Record Failed To Updated!!');
                       }
                       return redirect('Home'); 
		}
		else
		{
  
                    
                    $this->load->view('update');
                    
		} 
        }
        
        
        // delete data from db
        public function delete($record_id){
            
            
                  $this->load->model('Crudmodel');
                    
                 if( $this->Crudmodel->deleterecords( $record_id) ){
                     
                     $this->session->set_flashdata('response','Record Deleted Successfully!!');
                 }
                 else{
                     
                     $this->session->set_flashdata('response','Record Failed To Deleted!!');
                 }
                 
                 return redirect('Home');
        }
        
       
}
