<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Estudiante;
class EstudiantesController extends Controller{
    public function index(){
        $estudiante = new Estudiante();
        $datos['encabezado'] = view('template/encabezado');
        $datos['pie'] = view('template/pie');
        $datos['estudiantes'] = $estudiante->orderBy('id',"ASC")->findAll();
        return view('estudiantes/listar',$datos);
    }
    public function crear(){
        $datos['encabezado'] = view('template/encabezado');
        $datos['pie'] = view('template/pie');
        return view('estudiantes/crear', $datos);
    }

    public function guardar(){
        $estudiante=new Estudiante();
        $datos=[
            'identificacion'=> $this->request->getVar('identificacion'),
            'nombre'=> $this->request->getVar('nombre'),
            'nivel'=> $this->request->getVar('nivel'),
            'seccion'=> $this->request->getVar('seccion'),
            'telefonoContacto'=> $this->request->getVar('telefonoContacto'),
        ];
        $estudiante->insert($datos);
        return $this-> response->redirect(site_url('/estudiantes'));
    }

    public function editar($id=null){
        $estudiante=new Estudiante();
        $datos['estudiante']=$estudiante->where('id',$id)->first();
        $datos['encabezado'] = view('template/encabezado');
        $datos['pie'] = view('template/pie');
        return view('estudiantes/editar',$datos);
    }

    public function actualizar(){
        $estudiante=new Estudiante();
        $datos=[
            'identificacion'=> $this->request->getVar('identificacion'),
            'nombre'=> $this->request->getVar('nombre'),
            'nivel'=> $this->request->getVar('nivel'),
            'seccion'=> $this->request->getVar('seccion'),
            'telefonoContacto'=> $this->request->getVar('telefonoContacto'),
        ];
        $id=$this->request->getVar('id');
        $estudiante->update($id,$datos);
        return $this-> response->redirect(site_url('/estudiantes'));
    }

    public function borrar($id=null){
        $estudiante = new Estudiante();
        $estudiante -> where ('id', $id)->delete();
        return $this->response->redirect(site_url('/estudiantes'));
    }


}