<?php
/** @package U506861159Almoxarifado::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("FornecedorMap.php");

/**
 * FornecedorDAO provides object-oriented access to the fornecedor table.  This
 * class is automatically generated by ClassBuilder.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the Model class which is extended from this DAO class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package U506861159Almoxarifado::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class FornecedorDAO extends Phreezable
{
	/** @var int */
	public $IdFornecedor;

	/** @var string */
	public $NomeFantasia;

	/** @var string */
	public $RazaoSocial;

	/** @var string */
	public $Cnpj;

	/** @var string */
	public $Email;

	/** @var string */
	public $Telefone;

	/** @var string */
	public $Cep;

	/** @var string */
	public $Endereco;

	/** @var string */
	public $Bairro;

	/** @var string */
	public $Complemento;

	/** @var string */
	public $Cidade;

	/** @var string */
	public $Estado;

	/** @var string */
	public $Representante;



}
?>