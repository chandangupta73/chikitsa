<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SeoAccount extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	
		//if session value null then it goes to admin login
		if($this->session->userdata('seo_session')==null)
		{
			return redirect('seo');
		}
	}
   public function index()
   {
   	$sess_id = $this->session->userdata('seo_session');
   	$this->load->view('seo/dashboard');
   }
    public function change_password()
   {
   	$this->load->view('seo/change_password');
   }
   public function change_password_action()
   {
    $opass = $this->input->post('seo-opass');
    $npass = $this->input->post('seo-npass');
    $cpass = $this->input->post('seo-cpass');
    $sess_id = $this->session->userdata('seo_session');
    $this->form_validation->set_rules('seo-opass','Old Password','required');
    $this->form_validation->set_rules('seo-npass','New Password','required');
    $this->form_validation->set_rules('seo-cpass','Confirm Password','required');
    if($this->form_validation->run()==TRUE)
    {
      if(isset($opass))
      {
      $b = $this->Main_model->fetch_data('tbl_seo_login',['password'=>md5($opass)],'');
      if(count($b)>0)
      {
        if($cpass==$npass)
        {
         $this->Main_model->update('tbl_seo_login',['id'=>($b[0]['id'])] ,['password'=>md5($npass)]);
        $this->session->set_flashdata('error','<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong>Password changed successfully...</div>');
	return redirect('seo-admin/change-password');
        }
        else
        {
       $this->session->set_flashdata('error','<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong>Password not changed successfully...</div>');
	return redirect('seo-admin/change-password');
        }
      }
      else
      {
       $this->session->set_flashdata('error','<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong>Old password wrong...</div>');
	return redirect('seo-admin/change-password');
      }
      }
      else
      {
        return redirect('seo');
      }
    }
    else
    {
      $this->session->set_flashdata('error','<div class="alert alert-danger"><strong>Alert!</strong>'.validation_errors().'</div>');
      return redirect('seo-admin/change-password');
    }
  }

public function add_pages()
{
	$url = $this->uri->segment(3);
	if(!empty($url))
	{
		$data['d'] = $this->Main_model->fetch_data('tbl_seo',['id'=>$url],'');
		$this->load->view('seo/add_pages',$data);	
	}
	else
	{
 	$this->load->view('seo/add_pages');	
    }
}  
public function add_pages_action()
{
	$uri1 = trim($this->input->post('uri1'));
	$uri2 = trim($this->input->post('uri2'));
	$title = trim($this->input->post('title'));
	$keywords = trim($this->input->post('keywords'));
	$description = trim($this->input->post('description'));
	$can = trim($this->input->post('can'));
	$this->form_validation->set_rules('uri1','URI Segment 1','trim|required');
	$this->form_validation->set_rules('title','Title','trim|required');
	$this->form_validation->set_rules('keywords','Keywords','trim|required');
	$this->form_validation->set_rules('description','Description','trim|required');
	if($this->form_validation->run())
	{
    $one = (!empty($uri1))?$uri1:'';
    $two = (!empty($uri2))?'-'.$uri2:'';
    $url = $one.$two;
 if($this->Main_model->num_rows('tbl_seo',['page_name'=>$url])>0)
{
$this->session->set_flashdata('error','<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Alert!</strong>Already Exist</div>');
	return redirect('seo-admin/add-pages');
}
else
{
	$arr = array(
   'page_name'=>strtolower($url),
   'title'=>$title,
   'keyword'=>$keywords,
   'description'=>$description,
   'canonical'=>$can
	);
$this->Main_model->insert('tbl_seo',$arr);	
$this->session->set_flashdata('error','<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong>Page added successfully...</div>');
	return redirect('seo-admin/add-pages');
}
	}
	else
	{
	$this->session->set_flashdata('error','<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Alert!</strong>'.validation_errors().'</div>');
	return redirect('seo-admin/add-pages');
	}
}
public function manage_pages()
{
	$d['data'] = $this->Main_model->fetch_data('tbl_seo',[],'id desc');
$this->load->view('seo/manage_page',$d);		
}
public function update_pages_action()
{
	$uri1 = trim($this->input->post('uri1'));
	$uid = trim($this->input->post('uid'));
	$title = trim($this->input->post('title'));
	$keywords = trim($this->input->post('keywords'));
	$description = trim($this->input->post('description'));
	$can = trim($this->input->post('can'));
	$this->form_validation->set_rules('title','Title','trim|required');
	$this->form_validation->set_rules('keywords','Keywords','trim|required');
	$this->form_validation->set_rules('description','Description','trim|required');
	if($this->form_validation->run() && isset($uid))
	{
	$arr = array(
   'title'=>$title,
   'keyword'=>$keywords,
   'description'=>$description,
   'canonical'=>$can
	);
$this->Main_model->update('tbl_seo',['id'=>$uid],$arr);	
$this->session->set_flashdata('error','<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong>Page updated successfully...</div>');
	return redirect('seo-admin/manage-pages');
	}
	else
	{
	$this->session->set_flashdata('error','<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Alert!</strong>'.validation_errors().'</div>');
	return redirect('seo-admin/add-pages/'.$uid);
	}
}
public function delete()
{
	$uid = $this->uri->segment(3);
	if(isset($uid))
	{
		$this->Main_model->delete('tbl_seo',['id'=>$uid]);
		$this->session->set_flashdata('error','<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Alert!</strong>Deleted successfully...</div>');
		return redirect('seo-admin/manage-pages');
	}
	else
	{
		return redirect('seo');
	}
}
}
?>