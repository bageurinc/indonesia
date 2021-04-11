<?php
namespace Bageur\Indonesia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bageur\Indonesia\Model\ind_provinsi;
use Bageur\Indonesia\Model\ind_kota;
class IndonesiaController extends Controller
{

    public function provinsi()
    {
       $query = ind_provinsi::get();
       return $query;
    }
    public function provinsi_detail($id)
    {
       $query = ind_kota::where('id_prov',$id)->get();
       return $query;
    }

}