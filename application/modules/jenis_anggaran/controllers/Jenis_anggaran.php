<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_anggaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jenis_anggaran_model','jenis_anggaran');
	}


	public function index()
	{
		cek_session_admin();
		$this->load->view('jenis_anggaran_view');

	}


	public function ajax_list()
	{
		$list = $this->jenis_anggaran->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $jenis_anggaran) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $jenis_anggaran->nm_jenis_anggaran;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Edit" onclick="edit_jenis_anggaran('."'".$jenis_anggaran->id_jenis_anggaran."'".')"><i class="fa fa-edit"></i> </a>
				      <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_jenis_anggaran('."'".$jenis_anggaran->id_jenis_anggaran."'".')"><i class="fa fa-trash"></i> </a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->jenis_anggaran->count_all(),
						"recordsFiltered" => $this->jenis_anggaran->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

    /**
     * @param $id
     */
    public function ajax_edit($id)
	{
		$data = $this->jenis_anggaran->get_by_id($id);
		echo json_encode($data);
	}


    /**
     *
     */
    public function ajax_add()
	{
		$this->_validate();
		$data = array(
				'nm_jenis_anggaran' => $this->input->post('nm_jenis_anggaran')
			);
		$this->jenis_anggaran->save($data);

		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->_validate();
		$data = array(
				'nm_jenis_anggaran' => $this->input->post('nm_jenis_anggaran')
			);
		$this->jenis_anggaran->update(array('id_jenis_anggaran' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->jenis_anggaran->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}



	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('nm_jenis_anggaran') == '')
		{
			$data['inputerror'][] = 'nm_jenis_anggaran';
			$data['error_string'][] = 'Masukkan Nama jenis_anggaran';
			$data['status'] = FALSE;
		}


		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}

	}

}
