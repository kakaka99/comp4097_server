<?php


class Api extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->library('session');
        $this->load->model('Form_model', '', TRUE);
    }


    public function get_station_json()
    {
        $result = $this->Form_model->get_all_station();

        foreach ($result as $row) {
            $data[$row->id]['id'] = $row->id;
            $data[$row->id]['name_en'] = $row->name_en;
            $data[$row->id]['name_tc'] = $row->name_tc;
            $data[$row->id]['lat'] = $row->lat;
            $data[$row->id]['lng'] = $row->lng;
            $data[$row->id]['type'] = $row->type;
            $data[$row->id]['district_large_en'] = $row->district_large_en;
            $data[$row->id]['district_large_tc'] = $row->district_large_tc;
            $data[$row->id]['district_small_en'] = $row->district_small_en;
            $data[$row->id]['district_small_tc'] = $row->district_small_tc;
            $data[$row->id]['address_en'] = $row->address_en;
            $data[$row->id]['address_tc'] = $row->address_tc;
            $data[$row->id]['provider_en'] = $row->provider_en;
            $data[$row->id]['provider_tc'] = $row->provider_tc;
            $data[$row->id]['packing_no'] = $row->packing_no;
            $data[$row->id]['image'] = $row->image;
        }
        $json = json_encode(array_values($data));

        echo $json;

    }


    public function get_comment_by_station_id($id)
    {
        $result = $this->Form_model->get_comment_by_station_id($id);

        foreach ($result as $row) {
            $data[$row->id]['id'] = $row->id;
            $data[$row->id]['comment'] = $row->comment;
            $data[$row->id]['mark'] = $row->mark;
            $data[$row->id]['station_id'] = $row->station_id;
            $data[$row->id]['created_at'] = $row->created_at;

        }
        $json = json_encode(array_values($data));

        echo $json;
    }

    public function insert_comment()
    {


        $json = file_get_contents('php://input');
        $obj = json_decode($json, true);
       // var_dump($_POST);

        //$data = json_decode($this->input->post(), true);

        $this->Form_model->insert_comment($obj['comment'], $obj['mark'], $obj['station_id']);


        echo json_encode(array(["success" => "1"]) , JSON_FORCE_OBJECT);

    }


    public function import_xml()
    {

        $t = <<< EOF
EOF;


        $x = @simplexml_load_string($t);

        $data_en = (array)$x;


        $station_en = (array)$data_en['stationList'];
        $useful_station_en = (array)$station_en['station'];

        foreach ($useful_station_en as $item) {
            $station_item[] = (array)$item;
        }

        foreach ($station_item as $row) {
            $this->db->where('id', $row['no']);
            $this->db->update('station', ['address_en' => $row['address']]);
        }

        var_dump($station_item);
        exit;

    }


}



