<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );


class Ticket extends CI_Controller {

    public function __construct() {

        parent::__construct ();

    }

    public function index() {

        $this->load->view ( 'ticket/ticket_view');

    }


}

/* End of file quick_access.php */
/* Location: ./application/controllers/ticket.php */
