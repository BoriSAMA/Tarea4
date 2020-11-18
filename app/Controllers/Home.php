<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\PersonModel;
use App\Models\PetModel;
use CodeIgniter\Database\Query;

class Home extends BaseController
{

	public function index()
	{
		//$userModel = new UserModel($db);
		//$user = $userModel->where('correoUsuario','jhoansebastianjm@ufps.edu.co')->findAll();
		//$query = $db->get('usuario');

		//$db      = \Config\Database::connect();
		//$request = \Config\Services::request();
		
		/* $email = $this->request->getPostGet('email');
		$clave = $this->request->getPostGet('clave');
		echo "Hola";
		echo $email;
		$sql = "SELECT * FROM usuario WHERE pkIdUsuario = ?";
		$sql = "SELECT * FROM usuario INNER JOIN persona ON persona.fkIdUsuario = usuario.pkIdUsuario";
		$builder = $db->query($sql, [1]);
		$builder = $db->query($sql);
		$query = $builder->getResultArray();
		$user = array('usuarios'=>$query);*/
		//var_dump($query);
		//echo $email."<br>".$clave;
		//echo $query[0]['correoUsuario'];
		//$estructura = view('estructura/main').view('estructura/body',$user);

		//$userModel->insert($data);
		//var_dump($result);
		try {
			$estructura = view('estructura/main').view('login');
			return $estructura;
		} catch (Exception $error) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}
		
	}

	public function nuevaMascota($data){
		try {
			$db      = \Config\Database::connect();
			$datos['id']=$data;

			$sql = "SELECT persona.pkIdPersona FROM persona INNER JOIN usuario ON usuario.pkIdUsuario = persona.fkIdUsuario WHERE persona.fkIdUsuario = ?";
			$builder = $db->query($sql, [$data]);
			
			$query = $builder->getResultArray();

			if(!empty($query)){
				$persona['idPersona'] = $query[0]['pkIdPersona'];
				$persona['idU'] = $data;
				$estructura = view('estructura/main').view('estructura/header', $datos).view('newPet',$persona);
				return $estructura;
			}else{
				$estructura = view('estructura/main').view('estructura/header').view('myPets');
				return $estructura;
			}
		} catch (Exception $error) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}
	}

	public function agregarMascota($idU){
		try {

			$petModel = new PetModel($db);
			$request = \Config\Services::request();
			$db      = \Config\Database::connect();

			$data = array(
				'nombreMascota'    => $this->request->getPostGet('nameM'),
				'tipoMascota'   => $this->request->getPostGet('tipoM'),
				'razaMascota'   => $this->request->getPostGet('razaM'),
				'fechaUltimaVacuna'   => $this->request->getPostGet('date2'),
				'fechaAdopcion'   => $this->request->getPostGet('date1'),
				'fkIdPersona'   => $this->request->getPostGet('idPersona')
			);

			$petModel->insert($data);

			$estructura = redirect()->to(base_url().'/Home/inicioVista/'.$idU);
			return $estructura;

		} catch (Exception $error) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}
	}

	public function inicioVista($data){
		try {
			$db      = \Config\Database::connect();
			
			$sql = "SELECT * FROM mascota INNER JOIN persona ON persona.pkIdPersona = mascota.fkIdPersona INNER JOIN usuario ON usuario.pkIdUsuario = persona.fkIdUsuario WHERE usuario.pkIdUsuario = ?";
			$builder = $db->query($sql, [$data]);
			
			$query = $builder->getResultArray();
			$datos['id']=$data;

			if(!empty($query)){
				$mascotas = array('mascotas'=>$query);
				$estructura = view('estructura/main').view('estructura/header', $datos).view('myPets',$mascotas);
				return $estructura;
			}else{
				$estructura = view('estructura/main').view('estructura/header', $datos).view('myPets');
				return $estructura;
			}
		} catch (Exception $error) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}
	}

	public function iniciarSesion(){
		try {
			$request = \Config\Services::request();
			$db      = \Config\Database::connect();

			$correo = $this->request->getPostGet('email');
			$clave = $this->request->getPostGet('clave');

			//$sql = "SELECT * FROM usuario INNER JOIN persona ON persona.fkIdUsuario = usuario.pkIdUsuario WHERE usuario.correoUsuario = ? AND usuario.claveUsuario = ?";
			$sql = "SELECT * FROM usuario WHERE usuario.correoUsuario = ? AND usuario.claveUsuario = ?";
			$builder = $db->query($sql, [$correo, $clave]);
			
			$query = $builder->getResultArray();

			if(!empty($query)){
				if($query[0]['correoUsuario']==$correo && $query[0]['claveUsuario']==$clave){
					
					$idUsuario = $query[0]['pkIdUsuario'];
					//$datos['id']= $idUsuario;
					
					$estructura = redirect()->to(base_url().'/Home/inicioVista/'.$idUsuario);
					return $estructura;

					//$user = array('usuarios'=>$query);

					/*$sql = "SELECT * FROM mascota INNER JOIN persona ON persona.pkIdPersona = mascota.fkIdPersona INNER JOIN usuario ON usuario.pkIdUsuario = persona.fkIdUsuario WHERE usuario.pkIdUsuario = ?";
					$builder = $db->query($sql, [$idUsuario]);

					$query2 = $builder->getResultArray();
					if(!empty($query)){
						$mascotas = array('mascotas'=>$query2);
						$estructura = view('estructura/main').view('estructura/header', $datos).view('myPets',$mascotas);
						return $estructura;
					}else{
						//$estructura = view('estructura/main').view('estructura/header').view('myPets',$user);
						$estructura = redirect('/');
						return $estructura;
					}
					*/
					
				}else{
					$estructura = redirect('/');
					return $estructura;
				}
			}	else{
				$estructura = redirect('/');
				return $estructura;
			}

		} catch (Exception $error) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}
	}

	public function registerView(){
		try {
			$estructura = view('estructura/main').view('register');
			return $estructura;
		} catch (Exception $error) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}
		
	}

	public function registar(){

		try {
			$userModel = new UserModel($db);
			$personModel = new PersonModel($db);
			$request = \Config\Services::request();
			$db      = \Config\Database::connect();

			$data = array(
				'correoUsuario'    => $this->request->getPostGet('email'),
				'claveUsuario'   => $this->request->getPostGet('clave')
			);
			$result = $userModel->insert($data);

			$data2 = array(
				'nombreApellido'    => $this->request->getPostGet('name'),
				'cedula'   => $this->request->getPostGet('nit'),
				'direccion'   => $this->request->getPostGet('direccion'),
				'telefono'   => $this->request->getPostGet('telefono'),
				'fkIdUsuario'   => $result
			);
			$personModel->insert($data2);

			$estructura = redirect('/');
			
			return $estructura;

		} catch (Exception $error) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}

		

	}

	//--------------------------------------------------------------------

}
