<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{	
		$this->load->view('welcome_message');
	}
	
	public function upload_docx()
	{
		$files = $_FILES['docx_files'];
		$ext = end((explode(".", $files['name'])));
		if(!empty($files['name']) && $ext=='docx'){
			$path = "uploads/docx/";
			$resp = $this->upload_files($files,$path);
			$docx_path = $path.$resp;
			
			//load Docx File
			$phpWord = \PhpOffice\PhpWord\IOFactory::load($docx_path);
			$section = $phpWord->addSection();
			
			$_file_name = explode(".", $resp);
			$orig_name = $_file_name[0];
			// Create html file
			$source = FCPATH . "/uploads/docx/{$orig_name}.html";

			// Saving the document as HTML file...
			$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
			$objWriter->save($source);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Uploaded Successfully. URL : '.$source.'</div>');
			redirect('welcome');
			
		}
		$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Something went wrong! try again</div>');
		redirect('welcome');
	}
	// Upload file in folder
	function upload_files($files, $path)
    {
        $data = array();
        // If file upload form submitted
        if (!empty($files['name'])) {

            $_FILES['file']['name']     = time() . $files['name'];
            $_FILES['file']['type']     = $files['type'];
            $_FILES['file']['tmp_name'] = $files['tmp_name'];
            $_FILES['file']['error']     = $files['error'];
            $_FILES['file']['size']     = $files['size'];
            $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); //get extension
            if (!file_exists($path)) {

                mkdir($path, 0777, true);
            }
            $uploadPath = $path;
            move_uploaded_file($_FILES['file']['tmp_name'], $uploadPath . $_FILES['file']['name']);

            return $_FILES['file']['name'];
        }

        return false;
    }
}
