<?php
	class C_member extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add(){
			$this->load->model('member','mb');
			$this->form_validation->set_rules('college_id', 'College Id', 'required|is_unique[member.college_id]');
			$this->form_validation->set_rules('member_name', 'Member name', 'required|is_unique[member.member_name]');
			$this->form_validation->set_rules('branch_id', 'Branch Id', 'required|is_unique[member.branch_id]');
			$this->form_validation->set_rules('year', 'Year', 'required|is_unique[member.year]');
			$this->form_validation->set_rules('gender', 'Gender', 'required|is_unique[member.gender]');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'required|is_unique[member.dob]');
			$this->form_validation->set_rules('contact_no', 'Contact Number', 'required|is_unique[member.contact_no]');
			$this->form_validation->set_rules('email', 'Email id', 'required|is_unique[member.email]');
			$this->form_validation->set_rules('photo', 'Photo', 'required|is_unique[member.photo]');
			$this->form_validation->set_rules('event_id', 'Event Id', 'required|is_unique[member.event_id]');
			$this->form_validation->set_rules('position_id', 'Position Id', 'required|is_unique[member.position_id]');
			$this->form_validation->set_rules('committee_id', 'Committee Id', 'required|is_unique[member.committee_d]');
			$this->form_validation->set_rules('password', 'Password', 'required|is_unique[member.password]');
			$this->form_validation->set_rules('role_id', 'Role Id', 'required|is_unique[role_id]');
			$this->form_validation->set_rules('status', 'Status', 'required|is_unique[member.status]');
			$this->form_validation->set_rules('degree_id', 'Degree Id', 'required|is_unique[member.degree_id]');
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$this->mb->collage_id = $_POST['collage_id'];
				$this->mb->member_name = $_POST['member_name'];
				$this->mb->branch_id = $_POST['branch_id'];
				$this->mb->year = $_POST['year'];
				$this->mb->gender = $_POST['gender'];
				$this->mb->dob = $_POST['dob'];
				$this->mb->contact_no = $_POST['contact_no'];
				$this->mb->email = $_POST['email'];
				$this->mb->photo = $_POST['photo'];
				$this->mb->event_id = $_POST['event_id'];
				$this->mb->position_id = $_POST['position_id'];
				$this->mb->committee_id = $_POST['committee_id'];
				$this->mb->password = $_POST['password'];
				$this->mb->role_id = $_POST['role_id'];
				$this->mb->status = $_POST['status'];
				$this->mb->degree_id = $_POST['degree_id'];
				
				
				$this->mb->save();
				
				$data['message'] = 'Member created successfully';
			}
			
			$this->load->view('core/member/add',$data);
			
		}
		
		function edit($id){
			$this->load->model('member','mb');
			
			$data['message'] = '';
			
			$data['object'] = $this->mb->find_by_id($id);
			
			if($data['object']){
				
				 
				$this->form_validation->set_rules('college_id', 'College Id', 'required|is_unique[member.college_id]');
			$this->form_validation->set_rules('member_name', 'Member name', 'required|is_unique[member.member_name]');
			$this->form_validation->set_rules('branch_id', 'Branch Id', 'required|is_unique[member.branch_id]');
			$this->form_validation->set_rules('year', 'Year', 'required|is_unique[member.year]');
			$this->form_validation->set_rules('gender', 'Gender', 'required|is_unique[member.gender]');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'required|is_unique[member.dob]');
			$this->form_validation->set_rules('contact_no', 'Contact Number', 'required|is_unique[member.contact_no]');
			$this->form_validation->set_rules('email', 'Email id', 'required|is_unique[member.email]');
			$this->form_validation->set_rules('photo', 'Photo', 'required|is_unique[member.photo]');
			$this->form_validation->set_rules('event_id', 'Event Id', 'required|is_unique[member.event_id]');
			$this->form_validation->set_rules('position_id', 'Position Id', 'required|is_unique[member.position_id]');
			$this->form_validation->set_rules('committee_id', 'Committee Id', 'required|is_unique[member.committee_d]');
			$this->form_validation->set_rules('password', 'Password', 'required|is_unique[member.password]');
			$this->form_validation->set_rules('role_id', 'Role Id', 'required|is_unique[role_id]');
			$this->form_validation->set_rules('status', 'Status', 'required|is_unique[member.status]');
			$this->form_validation->set_rules('degree_id', 'Degree Id', 'required|is_unique[member.degree_id]');
			
				
				
				if ($this->form_validation->run() == TRUE){
					 
					
					$this->mb->collage_id = $_POST['collage_id'];
				$this->mb->member_name = $_POST['member_name'];
				$this->mb->branch_id = $_POST['branch_id'];
				$this->mb->year = $_POST['year'];
				$this->mb->gender = $_POST['gender'];
				$this->mb->dob = $_POST['dob'];
				$this->mb->contact_no = $_POST['contact_no'];
				$this->mb->email = $_POST['email'];
				$this->mb->photo = $_POST['photo'];
				$this->mb->event_id = $_POST['event_id'];
				$this->mb->position_id = $_POST['position_id'];
				$this->mb->committee_id = $_POST['committee_id'];
				$this->mb->password = $_POST['password'];
				$this->mb->role_id = $_POST['role_id'];
				$this->mb->status = $_POST['status'];
				$this->mb->degree_id = $_POST['degree_id'];
					
					$this->mb->save();
					
					$data['message'] = 'Members updated successfully updated successfully';
					
					$data['object'] = $this->mb;
				}
				
				$this->load->view('core/member/edit',$data);
			}
			else{
				$data['message'] = 'No such member exists. Create it!';	
				$this->load->view('core/member/add',$data);
			}
			
		}
		
		function viewall(){
			$this->load->model('member','mb');
			$data['objects'] = $this->mb->find_all();
			if(!empty($data['objects']))
			{
				$this->load->view('core/member/viewall',$data);
			}
			else{
				$data['message'] = 'No member exists. Create one!';	
				$this->load->view('core/member/add',$data);
			}
		}
		
		function delete($id){
			$this->load->model('member','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/c_member/viewall');
		}
		
	}