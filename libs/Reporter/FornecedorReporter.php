<?php
/** @package    Almoxarifado::Reporter */

/** import supporting libraries */
require_once("verysimple/Phreeze/Reporter.php");

/**
 * This is an example Reporter based on the Fornecedor object.  The reporter object
 * allows you to run arbitrary queries that return data which may or may not fith within
 * the data access API.  This can include aggregate data or subsets of data.
 *
 * Note that Reporters are read-only and cannot be used for saving data.
 *
 * @package Almoxarifado::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class FornecedorReporter extends Reporter
{

	// the properties in this class must match the columns returned by GetCustomQuery().
	// 'CustomFieldExample' is an example that is not part of the `fornecedor` table
	public $CustomFieldExample;

	public $IdFornecedor;
	public $NomeFantasia;
	public $RazaoSocial;
	public $Cnpj;
	public $Email;
	public $Telefone;
	public $Cep;
	public $Endereco;
	public $Bairro;
	public $Complemento;
	public $Cidade;
	public $Estado;
	public $Representante;

	/*
	* GetCustomQuery returns a fully formed SQL statement.  The result columns
	* must match with the properties of this reporter object.
	*
	* @see Reporter::GetCustomQuery
	* @param Criteria $criteria
	* @return string SQL statement
	*/
	static function GetCustomQuery($criteria)
	{
		$sql = "select
			'custom value here...' as CustomFieldExample
			,`fornecedor`.`id_fornecedor` as IdFornecedor
			,`fornecedor`.`nome_fantasia` as NomeFantasia
			,`fornecedor`.`razao_social` as RazaoSocial
			,`fornecedor`.`cnpj` as Cnpj
			,`fornecedor`.`email` as Email
			,`fornecedor`.`telefone` as Telefone
			,`fornecedor`.`cep` as Cep
			,`fornecedor`.`endereco` as Endereco
			,`fornecedor`.`bairro` as Bairro
			,`fornecedor`.`complemento` as Complemento
			,`fornecedor`.`cidade` as Cidade
			,`fornecedor`.`estado` as Estado
			,`fornecedor`.`representante` as Representante
		from `fornecedor`";

		// the criteria can be used or you can write your own custom logic.
		// be sure to escape any user input with $criteria->Escape()
		$sql .= $criteria->GetWhere();
		$sql .= $criteria->GetOrder();

		return $sql;
	}
	
	/*
	* GetCustomCountQuery returns a fully formed SQL statement that will count
	* the results.  This query must return the correct number of results that
	* GetCustomQuery would, given the same criteria
	*
	* @see Reporter::GetCustomCountQuery
	* @param Criteria $criteria
	* @return string SQL statement
	*/
	static function GetCustomCountQuery($criteria)
	{
		$sql = "select count(1) as counter from `fornecedor`";

		// the criteria can be used or you can write your own custom logic.
		// be sure to escape any user input with $criteria->Escape()
		$sql .= $criteria->GetWhere();

		return $sql;
	}
}

?>