<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Status extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $this->load->view('layanan/header');
        $this->load->view('layanan/status');
        $this->load->view('layanan/footer');
    }

    // menampilkan hasil pencarian web desa
    public function search_webdesa()
    {
        $output = '';
        $query = '';
        $this->load->model('m_website_desa');
        if ($this->input->post('query')) {
            $query = $this->input->post('query');
        }

        $data = $this->m_website_desa->search($query, );
        $output .= '<table class="table table-hover">
                    <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Desa</th>
                    <th scope="col">Status</th>
                    </tr>
                    </thead>';

        if ($data->num_rows() > 0) {
            $no = 1;
            foreach ($data->result() as $row) {
                if ($row->status == 'Ditolak') {
                    $row->status = '<span class="badge bg-danger">Ditolak</span>';
                } else if ($row->status == 'Proses') {
                    $row->status = '<span class="badge bg-warning">Proses</span>';
                } else {
                    $row->status = '<span class="badge bg-success">Diterima</span>';
                }
                $output .= '<tbody class="up">
                            <tr class="hasil">
                                <td>' . $no++ . '</td>
                                <td>' . $row->nama . '</td>
                                <td>' . $row->status . '</td>
                            </tr>
                        </tbody>';
            }
        } else {
            $output .= '<tbody>
                        <tr>
                            <td colspan="3">
                                <div class="alert alert-secondary text-center" role="alert">
                                    Tidak Ada Data
                                </div>
                            </td>
                        </tr>
                    </tbody>';
        }
        $output .= '</table>';
        echo $output;

    }
    // End Search Web Desa

    // Start Search Hak Akses Web
    public function search_hakaksesweb()
    {
        $output = '';
        $query = '';
        $this->load->model('m_hak_akses_web');
        if ($this->input->post('query')) {
            $query = $this->input->post('query');
        }

        $data = $this->m_hak_akses_web->search($query);
        $output .= '<table class="table table-hover">
                    <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    </tr>
                    </thead>';

        if ($data->num_rows() > 0) {
            $no = 1;
            foreach ($data->result() as $row) {
                if ($row->status == 'Ditolak') {
                    $row->status = '<span class="badge bg-danger">Ditolak</span>';
                } else if ($row->status == 'Proses') {
                    $row->status = '<span class="badge bg-warning">Proses</span>';
                } else {
                    $row->status = '<span class="badge bg-success">Diterima</span>';
                }
                $output .= '<tbody>
                            <tr>
                                <td>' . $no++ . '</td>
                                <td>' . $row->nama . '</td>
                                <td>' . $row->status . '</td>
                            </tr>
                        </tbody>';
            }
        } else {
            $output .= '<tbody>
                        <tr>
                            <td colspan="3">
                                <div class="alert alert-secondary text-center" role="alert">
                                    Tidak Ada Data
                                </div>
                            </td>
                        </tr>
                    </tbody>';
        }
        $output .= '</table>';
        echo $output;
    }
    // End Search Hak Akses Web

    // Start Search Hak Akses Maturbupati
    public function search_maturbup()
    {
        $output = '';
        $query = '';
        $this->load->model('m_hak_akses_matur_bupati');
        if ($this->input->post('query')) {
            $query = $this->input->post('query');
        }

        $data = $this->m_hak_akses_matur_bupati->search($query);
        $output .= '<table class="table table-hover">
                    <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    </tr>
                    </thead>';

        if ($data->num_rows() > 0) {
            $no = 1;
            foreach ($data->result() as $row) {
                if ($row->status == 'Ditolak') {
                    $row->status = '<span class="badge bg-danger">Ditolak</span>';
                } else if ($row->status == 'Proses') {
                    $row->status = '<span class="badge bg-warning">Proses</span>';
                } else {
                    $row->status = '<span class="badge bg-success">Diterima</span>';
                }
                $output .= '<tbody>
                            <tr>
                                <td>' . $no++ . '</td>
                                <td>' . $row->nama . '</td>
                                <td>' . $row->status . '</td>
                            </tr>
                        </tbody>';
            }
        } else {
            $output .= '<tbody>
                        <tr>
                            <td colspan="3">
                                <div class="alert alert-secondary text-center" role="alert">
                                    Tidak Ada Data
                                </div>
                            </td>
                        </tr>
                    </tbody>';
        }
        $output .= '</table>';
        echo $output;
    }

    // End Search Hak Akses Maturbupati

    // Start Search Fasilitas Inter Wifi
    public function search_fasinter()
    {
        $output = '';
        $query = '';
        $this->load->model('m_fasilitas_inter_wifi');
        if ($this->input->post('query')) {
            $query = $this->input->post('query');
        }

        $data = $this->m_fasilitas_inter_wifi->search($query);
        $output .= '<table class="table table-hover">
                    <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    </tr>
                    </thead>';

        if ($data->num_rows() > 0) {
            $no = 1;
            foreach ($data->result() as $row) {
                if ($row->status == 'Ditolak') {
                    $row->status = '<span class="badge bg-danger">Ditolak</span>';
                } else if ($row->status == 'Proses') {
                    $row->status = '<span class="badge bg-warning">Proses</span>';
                } else {
                    $row->status = '<span class="badge bg-success">Diterima</span>';
                }
                $output .= '<tbody>
                            <tr>
                                <td>' . $no++ . '</td>
                                <td>' . $row->nama . '</td>
                                <td>' . $row->status . '</td>
                            </tr>
                        </tbody>';
            }
        } else {
            $output .= '<tbody>
                        <tr>
                            <td colspan="3">
                                <div class="alert alert-secondary text-center" role="alert">
                                    Tidak Ada Data
                                </div>
                            </td>
                        </tr>
                    </tbody>';
        }
        $output .= '</table>';
        echo $output;
    }
    // End Search Fasilitas Inter Wifi

    // Start Search Fasilitas Video Converence
    public function search_fasvideo(Type $var = null)
    {
        $output = '';
        $query = '';
        $this->load->model('m_fasilitas_video_conference');
        if ($this->input->post('query')) {
            $query = $this->input->post('query');
        }

        $data = $this->m_fasilitas_video_conference->search($query);
        $output .= '<table class="table table-hover">
                    <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    </tr>
                    </thead>';

        if ($data->num_rows() > 0) {
            $no = 1;
            foreach ($data->result() as $row) {
                if ($row->status == 'Ditolak') {
                    $row->status = '<span class="badge bg-danger">Ditolak</span>';
                } else if ($row->status == 'Proses') {
                    $row->status = '<span class="badge bg-warning">Proses</span>';
                } else {
                    $row->status = '<span class="badge bg-success">Diterima</span>';
                }
                $output .= '<tbody>
                            <tr>
                                <td>' . $no++ . '</td>
                                <td>' . $row->nama . '</td>
                                <td>' . $row->status . '</td>
                            </tr>
                        </tbody>';
            }
        } else {
            $output .= '<tbody>
                        <tr>
                            <td colspan="3">
                                <div class="alert alert-secondary text-center" role="alert">
                                    Tidak Ada Data
                                </div>
                            </td>
                        </tr>
                    </tbody>';
        }
        $output .= '</table>';
        echo $output;
    }
    // End Search Fasilitas Video Converence

    // Start Search Aduan Web
    public function search_aduanweb()
    {
        $output = '';
        $query = '';
        $this->load->model('m_aduan_pengelolaan_website');
        if ($this->input->post('query')) {
            $query = $this->input->post('query');
        }

        $data = $this->m_aduan_pengelolaan_website->search($query);
        $output .= '<table class="table table-hover">
                    <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    </tr>
                    </thead>';

        if ($data->num_rows() > 0) {
            $no = 1;
            foreach ($data->result() as $row) {
                if ($row->status == 'Ditolak') {
                    $row->status = '<span class="badge bg-danger">Ditolak</span>';
                } else if ($row->status == 'Proses') {
                    $row->status = '<span class="badge bg-warning">Proses</span>';
                } else {
                    $row->status = '<span class="badge bg-success">Diterima</span>';
                }
                $output .= '<tbody>
                            <tr>
                                <td>' . $no++ . '</td>
                                <td>' . $row->nama . '</td>
                                <td>' . $row->status . '</td>
                            </tr>
                        </tbody>';
            }
        } else {
            $output .= '<tbody>
                        <tr>
                            <td colspan="3">
                                <div class="alert alert-secondary text-center" role="alert">
                                    Tidak Ada Data
                                </div>
                            </td>
                        </tr>
                    </tbody>';
        }
        $output .= '</table>';
        echo $output;
    }

    // End Search Aduan Web
    // Start Search Aduan Inter
    public function search_aduaninter()
    {
        $output = '';
        $query = '';
        $this->load->model('m_aduan_jaringan_internet');
        if ($this->input->post('query')) {
            $query = $this->input->post('query');
        }

        $data = $this->m_aduan_jaringan_internet->search($query);
        $output .= '<table class="table table-hover">
                    <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    </tr>
                    </thead>';

        if ($data->num_rows() > 0) {
            $no = 1;
            foreach ($data->result() as $row) {
                if ($row->status == 'Ditolak') {
                    $row->status = '<span class="badge bg-danger">Ditolak</span>';
                } else if ($row->status == 'Proses') {
                    $row->status = '<span class="badge bg-warning">Proses</span>';
                } else {
                    $row->status = '<span class="badge bg-success">Diterima</span>';
                }
                $output .= '<tbody>
                            <tr>
                                <td>' . $no++ . '</td>
                                <td>' . $row->nama . '</td>
                                <td>' . $row->status . '</td>
                            </tr>
                        </tbody>';
            }
        } else {
            $output .= '<tbody>
                        <tr>
                            <td colspan="3">
                                <div class="alert alert-secondary text-center" role="alert">
                                    Tidak Ada Data
                                </div>
                            </td>
                        </tr>
                    </tbody>';
        }
        $output .= '</table>';
        echo $output;
    }
    // End Search Aduan Inter

    // Start Search Pengajuan Magang
    public function search_pengajuan_magang()
    {
        $output = '';
        $query = '';
        $this->load->model('m_pengajuan_magang');
        if ($this->input->post('query')) {
            $query = $this->input->post('query');
        }

        $data = $this->m_pengajuan_magang->search($query);
        $output .= '<table class="table table-hover">
                    <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Institusi</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Status</th>
                    </tr>
                    </thead>';

        if ($data->num_rows() > 0) {
            $no = 1;
            foreach ($data->result() as $row) {
                if ($row->status == 'Ditolak') {
                    $row->status = '<span class="badge bg-danger">Ditolak</span>';
                } else if ($row->status == 'Proses') {
                    $row->status = '<span class="badge bg-warning">Proses</span>';
                } else {
                    $row->status = '<span class="badge bg-success">Diterima</span>';
                }
                $output .= '<tbody>
                            <tr>
                                <td>' . $no++ . '</td>
                                <td>' . $row->nama . '</td>
                                <td>' . $row->institusi . '</td>
                                <td>' . $row->jurusan . '</td>
                                <td>' . $row->status . '</td>
                            </tr>
                        </tbody>';
            }
        } else {
            $output .= '<tbody>
                        <tr>
                            <td colspan="5">
                                <div class="alert alert-secondary text-center" role="alert">
                                    Tidak Ada Data
                                </div>
                            </td>
                        </tr>
                    </tbody>';
        }
        $output .= '</table>';
        echo $output;
    }

    // End Serch Pengajuan Magang

}

/* End of file Status.php */
