<?php
	class C_family_detail extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add(){
			$this->load->model('family_detail','mb');
			$this->form_validation->set_rules('alumni_id', 'Alumni id', 'required|is_unique[family_detail.alumni__id]');
			$this->form_validation->set_rules('name_of_member ', 'Name of Member', 'required|is_unique[family_detail.name_of_member]');
			$this->form_validation->set_rules('relation_id', 'Relation id', 'required|is_unique[family_detail.relation__id]');
			$this->form_validation->set_rules('occupation', 'Occupation', 'required|is_unique[family_detail.occupation]');
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$this->mb->alumni_id = $_POST['alumni_id'];
				$this->mb->name_of_member = $_POST['name_of_member'];
				$this->mb->relation_id = $_POST['relation_id'];
				$this->mb->occupation = $_POST['occupation'];
				$this->mb->save();
				
				$data['message'] = 'family details created successfully';
			}
			
			$this->load->view('core/family_detail/add',$data);
			
		}
		
		function edit($id){
			$this->load->model('family_detail','mb');
			
			$data['message'] = '';
			
			$data['object'] = $this->mb->find_by_id($id);
			
			if($data['object']){
				
				 
			     $this->form_validation->set_rules('alumni_id', 'Alumni id', 'required|is_unique[family_detail.alumni__id]');
			     $this->form_validation->set_rules('name_of_member ', 'Name of Member', 'required|is_unique[family_detail.name_of_member]');
			     $this->form_validation->set_rules('relation_id', 'Relation id', 'required|is_unique[family_detail.relation__id]');
			     $this->form_validation->set_rules('occupation', 'Occupation', 'required|is_unique[family_detail.occupation]');
			
				
				if ($this->form_validation->run() == TRUE){
					$this->mb->family_id = $_POST['family_id'];
					$this->mb->alumni_id = $_POST['alumni_id'];
					$this->mb->name_of_member = $_POST['name_of_member'];
					$this->mb->relation_id = $_POST['relation_id'];
					$this->mb->occupation = $_POST['occupation'];
					$this->mb->save();
					
					$data['message'] = 'family details updated successfully';
					
					$data['object'] = $this->mb;
				}
				
				$this->load->view('core/family_detail/edit',$data);
			}
			else{
				$data['message'] = 'No such family details exists. Create it!';	
				$this->load->view('core/family_detail/add',$data);
			}
			
		}
		
		function viewall(){
			$this->load->model('family_detail','mb');
			$data['objects'] = $this->mb->find_all();
			if(!empty($data['objects']))
			{
				$this->load->view('core/family_deatil/viewall',$data);
			}
			else{
				$data['message'] = 'No branch exists. Create one!';	
				$this->load->view('core/family_detail/add',$data);
			}
		}
		
		function delete($id){
			$this->load->model('family_detail','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/c_family_detail/viewall');
		}
		
	}