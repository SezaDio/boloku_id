<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Payment extends CI_Controller {

		public function _construct()
		{
			parent::_construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('input');
			$this->load->library('form_validation');
			$this->load->library('session');

		}

		public function notify()
		{
			$transidmerchant = $this->input->post('TRANSIDMERCHANT');
			$response_code = $this->input->post('RESPONSECODE');
			$data_notify = array(
						   'statustype'=>$this->input->post('STATUSTYPE'),
						   'response_code'=>$this->input->post('RESPONSECODE'),
						   'approvalcode'=>$this->input->post('APPROVALCODE'),
						   'payment_channel'=>$this->input->post('PAYMENTCHANNEL'),
						   'payment_channel'=>$this->input->post('PAYMENTCHANNEL'),
						   'paymentcode'=>$this->input->post('PAYMENTCODE'),
						   'session_id'=>$this->input->post('SESSIONID'),
						   'bank_issuer'=>$this->input->post('BANK'),
						   'creditcard'=>$this->input->post('MCN'),
						   'verifyid'=>$this->input->post('VERIFYID'),
						   'verifyscore'=>$this->input->post('VERIFYSCORE'),
						   'verifystatus'=>$this->input->post('VERIFYSTATUS')
						   );
			$update_status_pendaftar = array(
									   'status_bayar'=>1
									   );

			$this->db->update('doku', $data_notify, array('transidmerchant'=>$transidmerchant));

			if ($response_code == "0000") //Jika respopnse code nya sukses maka update database pendaftar
			{
				$this->db->update('pendaftar', $update_status_pendaftar, array('no_pendaftar'=>$transidmerchant));

				//Ambil data email dari tabel pendaftar
				$this->load->model('pendaftar_models/PendaftarModels');
				$data_email = $this->PendaftarModels->get_data_invoice($transidmerchant)->row();

				//Kirim email notifikasi jika sudah daftar event dan sudah sukses melakukan pembayaran
				$data['isi_transid'] = array(
										'transid'=>$transidmerchant
									   );
				$data['subject'] = 'Notify for Event'.$nama_event;
				$data['link_invoice'] = site_url('payment/invoice/'.$transidmerchant);
				$isi = $this->load->view('skin/email/content_sukses_bayar_email', $data, true);
				$data['content'] = $isi;
				$msg = $this->load->view('skin/email/template_email', $data, true);
				$email = $data_email->email;
    			$this->kirim_email($data['subject'], $msg, $email);

				$this->session->set_flashdata('msg_berhasil', 'Terima kasih telah mendaftar pada event ini, silahkan cek email anda.');
			}

			echo "CONTINUE";

		}

		//Redirect ke halaman boloku.id setelah pembayaran
		public function result()
		{
			$this->load->model('pendaftar_models/PendaftarModels');

			$data['active']=1;
			$data_redirect = array(
						   'amount'=>$this->input->post('AMOUNT'),
						   'transidmerchant'=>$this->input->post('TRANSIDMERCHANT'),
						   'words'=>$this->input->post('WORDS'),
						   'statuscode'=>$this->input->post('STATUSCODE'),
						   'payment_channel'=>$this->input->post('PAYMENTCHANNEL'),
						   'session_id'=>$this->input->post('SESSIONID'),
						   'paymentcode'=>$this->input->post('PAYMENTCODE'),
						   'currency'=>$this->input->post('CURRENCY'),
						   'purchasecurrency'=>$this->input->post('PURCHASECURRENCY')
						   );
			$data['kirim_email'] = array(
						   'amount'=>$this->input->post('AMOUNT'),
						   'transidmerchant'=>$this->input->post('TRANSIDMERCHANT'),
						   'words'=>$this->input->post('WORDS'),
						   'statuscode'=>$this->input->post('STATUSCODE'),
						   'payment_channel'=>$this->input->post('PAYMENTCHANNEL'),
						   'session_id'=>$this->input->post('SESSIONID'),
						   'paymentcode'=>$this->input->post('PAYMENTCODE'),
						   'currency'=>$this->input->post('CURRENCY'),
						   'purchasecurrency'=>$this->input->post('PURCHASECURRENCY')
						   );
			$transid = $this->input->post('TRANSIDMERCHANT');
			$statuscode = $this->input->post('STATUSCODE');
			$data_email = $this->PendaftarModels->get_data_invoice($transidmerchant)->row();
			//$statuspayment['status_payment'] = $this->input->post('STATUSCODE');

			//Check status hasil dari redirect
			if ($statuscode == "0000") //Jika Status == 0000, pembayaran sukses lanjutkan ke halaman invoice
			{
				Redirect('payment/invoice/'.$transid);
			}
			elseif ($statuscode == "5511") //Jika status == 5511, pembayaran pending atau belum dilakukan
			{
				//Ambil data response code dari tabel DOKU
				$data_doku = $this->PendaftarModels->get_data_invoice_doku($transid)->row();

				if ($data_doku->response_code == NULL) //Jika nilai response code pada database tabel DOKU = NULL lakukan update pada database DOKU
				{
					//Lakukan update status pada tabel DOKU untuk update response code
					$data_update_status = array(
						   'response_code'=>$statuscode,
						   'payment_channel'=>$data_redirect['payment_channel'],
						   'paymentcode'=>$data_redirect['paymentcode'],
						   'session_id'=>$data_redirect['session_id']
						   );
					$this->db->update('doku', $data_update_status, array('transidmerchant'=>$transid));
					$this->db->update('pendaftar', array('status_bayar'=>$statuscode), array('no_pendaftar'=>$transid));

					//Kirim email notifikasi jika sudah daftar event dan sudah sukses melakukan pembayaran
					$data['isi_transid'] = array(
											'transid'=>$transidmerchant
										   );
					$data['subject'] = 'Notify for boloku.id payment transaction'.$nama_event;
					$data['link_pending_payment'] = site_url('payment/pending_page/'.$transidmerchant);
					$isi = $this->load->view('skin/email/content_petunjuk_bayar_email', $data, true);
					$data['content'] = $isi;
					$msg = $this->load->view('skin/email/template_email', $data, true);
					$email = $data_email->email;
					$this->kirim_email($data['subject'], $msg, $email);

					//Tampilkan halaman waiting page penyelesaian pembayaran
					Redirect('payment/pending_page/'.$transid);
				}
				elseif ($data_doku->response_code == "0000") //Jika nilai response code == 0000, pembayaran sudah sukses lanjutkan halaman invoice
				{
					Redirect('payment/invoice/'.$transid);
				}
			}
			else //Jika status diluar yang diberikan berarti pembyarana failed
			{
				//Tampilkan halaman waiting page penyelesaian pembayaran
				Redirect('payment/pending_page/'.$transid);
			}
		}

		//function untuk menampilkan halaman invoice
		public function invoice($transid)
		{
			$this->load->model('pendaftar_models/PendaftarModels');
			$data_invoice['data_pendaftar'] = $this->PendaftarModels->get_data_invoice($transid)->row();
			$data_invoice['data_doku'] = $this->PendaftarModels->get_data_invoice_doku($transid)->row();

			$this->load->view('content_front_end/invoice_page', $data_invoice);
		}

		//function untuk menampilkan halaman pending page
		public function pending_page($transid)
		{
			$this->load->model('pendaftar_models/PendaftarModels');
			$data_invoice['data_doku'] = $this->PendaftarModels->get_data_invoice_doku($transid)->row();

			//Tampilkan halaman waiting page penyelesaian pembayaran
			$this->load->view('skin/front_end/header_menu_front_end');
			$this->load->view('content_front_end/pending_page_doku', $data_invoice);
			$this->load->view('skin/front_end/footer_menu_front_end');
		}

		//fungsi untuk kirim email
	   	function kirim_email($sub, $msg, $email) {
	      $config['protocol'] = 'smtp';
	      $config['smtp_host'] = 'mail.boloku.id'; //change this
	      $config['smtp_port'] = '465';
	      $config['smtp_user'] = 'info@boloku.id'; //change this
	      $config['smtp_pass'] = 'iFiW_o-*xe-q'; //change this
	      $config['mailtype'] = 'html';
	      $config['charset'] = 'iso-8859-1';
	      $config['smtp_crypto'] = 'ssl';
	      $config['wordwrap'] = TRUE;
	      $config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard
	      $this->load->library('email'); // load email library
	      $this->email->initialize($config);
	      $this->email->from('info@boloku.id', 'boloku.id');
	      $this->email->to($email);
	      $this->email->subject($sub);
	      $this->email->message($msg);
	      if ($this->email->send()){
	         $this->session->set_flashdata('msg_berhasil', 'Pesan balasan telah terkirim.');
	         //redirect('FrontControl_ContactUs/kelola_message');
	         }
	      else{
	         show_error($this->email->print_debugger());}
	    }

	}
