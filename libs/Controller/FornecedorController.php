<?php
/** @package    Almoxarifado::Controller */

/** import supporting libraries */
require_once("AppBaseController.php");
require_once("Model/Fornecedor.php");

/**
 * FornecedorController is the controller class for the Fornecedor object.  The
 * controller is responsible for processing input from the user, reading/updating
 * the model as necessary and displaying the appropriate view.
 *
 * @package Almoxarifado::Controller
 * @author ClassBuilder
 * @version 1.0
 */
class FornecedorController extends AppBaseController
{

	/**
	 * Override here for any controller-specific functionality
	 *
	 * @inheritdocs
	 */
	protected function Init()
	{
		parent::Init();

		// TODO: add controller-wide bootstrap code
		
		// TODO: if authentiation is required for this entire controller, for example:
		// $this->RequirePermission(ExampleUser::$PERMISSION_USER,'SecureExample.LoginForm');
	}

	/**
	 * Displays a list view of Fornecedor objects
	 */
	public function ListView()
	{
		$this->Render();
	}

	/**
	 * API Method queries for Fornecedor records and render as JSON
	 */
	public function Query()
	{
		try
		{
			$criteria = new FornecedorCriteria();
			
			// TODO: this will limit results based on all properties included in the filter list 
			$filter = RequestUtil::Get('filter');
			if ($filter) $criteria->AddFilter(
				new CriteriaFilter('IdFornecedor,NomeFantasia,RazaoSocial,Cnpj,Email,Telefone,Cep,Endereco,Bairro,Complemento,Cidade,Estado,Representante'
				, '%'.$filter.'%')
			);

			// TODO: this is generic query filtering based only on criteria properties
			foreach (array_keys($_REQUEST) as $prop)
			{
				$prop_normal = ucfirst($prop);
				$prop_equals = $prop_normal.'_Equals';

				if (property_exists($criteria, $prop_normal))
				{
					$criteria->$prop_normal = RequestUtil::Get($prop);
				}
				elseif (property_exists($criteria, $prop_equals))
				{
					// this is a convenience so that the _Equals suffix is not needed
					$criteria->$prop_equals = RequestUtil::Get($prop);
				}
			}

			$output = new stdClass();

			// if a sort order was specified then specify in the criteria
 			$output->orderBy = RequestUtil::Get('orderBy');
 			$output->orderDesc = RequestUtil::Get('orderDesc') != '';
 			if ($output->orderBy) $criteria->SetOrder($output->orderBy, $output->orderDesc);

			$page = RequestUtil::Get('page');

			if ($page != '')
			{
				// if page is specified, use this instead (at the expense of one extra count query)
				$pagesize = $this->GetDefaultPageSize();

				$fornecedores = $this->Phreezer->Query('Fornecedor',$criteria)->GetDataPage($page, $pagesize);
				$output->rows = $fornecedores->ToObjectArray(true,$this->SimpleObjectParams());
				$output->totalResults = $fornecedores->TotalResults;
				$output->totalPages = $fornecedores->TotalPages;
				$output->pageSize = $fornecedores->PageSize;
				$output->currentPage = $fornecedores->CurrentPage;
			}
			else
			{
				// return all results
				$fornecedores = $this->Phreezer->Query('Fornecedor',$criteria);
				$output->rows = $fornecedores->ToObjectArray(true, $this->SimpleObjectParams());
				$output->totalResults = count($output->rows);
				$output->totalPages = 1;
				$output->pageSize = $output->totalResults;
				$output->currentPage = 1;
			}


			$this->RenderJSON($output, $this->JSONPCallback());
		}
		catch (Exception $ex)
		{
			$this->RenderExceptionJSON($ex);
		}
	}

	/**
	 * API Method retrieves a single Fornecedor record and render as JSON
	 */
	public function Read()
	{
		try
		{
			$pk = $this->GetRouter()->GetUrlParam('idFornecedor');
			$fornecedor = $this->Phreezer->Get('Fornecedor',$pk);
			$this->RenderJSON($fornecedor, $this->JSONPCallback(), true, $this->SimpleObjectParams());
		}
		catch (Exception $ex)
		{
			$this->RenderExceptionJSON($ex);
		}
	}

	/**
	 * API Method inserts a new Fornecedor record and render response as JSON
	 */
	public function Create()
	{
		try
		{
						
			$json = json_decode(RequestUtil::GetBody());

			if (!$json)
			{
				throw new Exception('The request body does not contain valid JSON');
			}

			$fornecedor = new Fornecedor($this->Phreezer);

			// TODO: any fields that should not be inserted by the user should be commented out

			// this is an auto-increment.  uncomment if updating is allowed
			// $fornecedor->IdFornecedor = $this->SafeGetVal($json, 'idFornecedor');

			$fornecedor->NomeFantasia = $this->SafeGetVal($json, 'nomeFantasia');
			$fornecedor->RazaoSocial = $this->SafeGetVal($json, 'razaoSocial');
			$fornecedor->Cnpj = $this->SafeGetVal($json, 'cnpj');
			$fornecedor->Email = $this->SafeGetVal($json, 'email');
			$fornecedor->Telefone = $this->SafeGetVal($json, 'telefone');
			$fornecedor->Cep = $this->SafeGetVal($json, 'cep');
			$fornecedor->Endereco = $this->SafeGetVal($json, 'endereco');
			$fornecedor->Bairro = $this->SafeGetVal($json, 'bairro');
			$fornecedor->Complemento = $this->SafeGetVal($json, 'complemento');
			$fornecedor->Cidade = $this->SafeGetVal($json, 'cidade');
			$fornecedor->Estado = $this->SafeGetVal($json, 'estado');
			$fornecedor->Representante = $this->SafeGetVal($json, 'representante');

			$fornecedor->Validate();
			$errors = $fornecedor->GetValidationErrors();

			if (count($errors) > 0)
			{
				$this->RenderErrorJSON('Please check the form for errors',$errors);
			}
			else
			{
				$fornecedor->Save();
				$this->RenderJSON($fornecedor, $this->JSONPCallback(), true, $this->SimpleObjectParams());
			}

		}
		catch (Exception $ex)
		{
			$this->RenderExceptionJSON($ex);
		}
	}

	/**
	 * API Method updates an existing Fornecedor record and render response as JSON
	 */
	public function Update()
	{
		try
		{
						
			$json = json_decode(RequestUtil::GetBody());

			if (!$json)
			{
				throw new Exception('The request body does not contain valid JSON');
			}

			$pk = $this->GetRouter()->GetUrlParam('idFornecedor');
			$fornecedor = $this->Phreezer->Get('Fornecedor',$pk);

			// TODO: any fields that should not be updated by the user should be commented out

			// this is a primary key.  uncomment if updating is allowed
			// $fornecedor->IdFornecedor = $this->SafeGetVal($json, 'idFornecedor', $fornecedor->IdFornecedor);

			$fornecedor->NomeFantasia = $this->SafeGetVal($json, 'nomeFantasia', $fornecedor->NomeFantasia);
			$fornecedor->RazaoSocial = $this->SafeGetVal($json, 'razaoSocial', $fornecedor->RazaoSocial);
			$fornecedor->Cnpj = $this->SafeGetVal($json, 'cnpj', $fornecedor->Cnpj);
			$fornecedor->Email = $this->SafeGetVal($json, 'email', $fornecedor->Email);
			$fornecedor->Telefone = $this->SafeGetVal($json, 'telefone', $fornecedor->Telefone);
			$fornecedor->Cep = $this->SafeGetVal($json, 'cep', $fornecedor->Cep);
			$fornecedor->Endereco = $this->SafeGetVal($json, 'endereco', $fornecedor->Endereco);
			$fornecedor->Bairro = $this->SafeGetVal($json, 'bairro', $fornecedor->Bairro);
			$fornecedor->Complemento = $this->SafeGetVal($json, 'complemento', $fornecedor->Complemento);
			$fornecedor->Cidade = $this->SafeGetVal($json, 'cidade', $fornecedor->Cidade);
			$fornecedor->Estado = $this->SafeGetVal($json, 'estado', $fornecedor->Estado);
			$fornecedor->Representante = $this->SafeGetVal($json, 'representante', $fornecedor->Representante);

			$fornecedor->Validate();
			$errors = $fornecedor->GetValidationErrors();

			if (count($errors) > 0)
			{
				$this->RenderErrorJSON('Please check the form for errors',$errors);
			}
			else
			{
				$fornecedor->Save();
				$this->RenderJSON($fornecedor, $this->JSONPCallback(), true, $this->SimpleObjectParams());
			}


		}
		catch (Exception $ex)
		{


			$this->RenderExceptionJSON($ex);
		}
	}

	/**
	 * API Method deletes an existing Fornecedor record and render response as JSON
	 */
	public function Delete()
	{
		try
		{
						
			// TODO: if a soft delete is prefered, change this to update the deleted flag instead of hard-deleting

			$pk = $this->GetRouter()->GetUrlParam('idFornecedor');
			$fornecedor = $this->Phreezer->Get('Fornecedor',$pk);

			$fornecedor->Delete();

			$output = new stdClass();

			$this->RenderJSON($output, $this->JSONPCallback());

		}
		catch (Exception $ex)
		{
			$this->RenderExceptionJSON($ex);
		}
	}
}

?>
