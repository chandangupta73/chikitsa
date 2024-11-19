<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Seo extends CI_Controller
{
	
 /*=================== Seo Login ================ */
public function seo_login()
    {
     $this->load->view('seo/login');
    }

    public function seo_varify_login()
    {
        $uid = $this->input->post('email');
        $password = $this->input->post('pass');

       $this->form_validation->set_rules('email','Email','required');
     $this->form_validation->set_rules('pass','Password','required');
     
     if($this->form_validation->run()==TRUE)
     {
        $data = $this->Main_model->seo_login($uid);
        if($data!='')
        {
            if(isset($data[0]['login_id'])==$uid)
            {
                if($data[0]['password']==md5($password))
                {
                  $this->session->set_userdata('seo_session',$uid);
                  return redirect('seo-admin/dashboard');
                }
                else
                {
                     $this->session->set_flashdata('password_error','Password wrong');
                   return redirect('seo');
                }
            }
            else
            {
                 $this->session->set_flashdata('email_error','User id wrong');
                   return redirect('seo');
            }
        }   
     }  
     else
     {
        $this->session->set_flashdata('error','<div class="alert alert-danger">'.validation_errors().'</div>');
          return redirect('admin');
     }   
    }
    public function seo_logout()
    {
        $this->session->sess_destroy();
        return redirect('seo');
    }
   
}