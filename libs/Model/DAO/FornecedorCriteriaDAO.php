<?php
/** @package    U506861159Almoxarifado::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Criteria.php");

/**
 * FornecedorCriteria allows custom querying for the Fornecedor object.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the ModelCriteria class which is extended from this class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @inheritdocs
 * @package U506861159Almoxarifado::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class FornecedorCriteriaDAO extends Criteria
{

	public $IdFornecedor_Equals;
	public $IdFornecedor_NotEquals;
	public $IdFornecedor_IsLike;
	public $IdFornecedor_IsNotLike;
	public $IdFornecedor_BeginsWith;
	public $IdFornecedor_EndsWith;
	public $IdFornecedor_GreaterThan;
	public $IdFornecedor_GreaterThanOrEqual;
	public $IdFornecedor_LessThan;
	public $IdFornecedor_LessThanOrEqual;
	public $IdFornecedor_In;
	public $IdFornecedor_IsNotEmpty;
	public $IdFornecedor_IsEmpty;
	public $IdFornecedor_BitwiseOr;
	public $IdFornecedor_BitwiseAnd;
	public $NomeFantasia_Equals;
	public $NomeFantasia_NotEquals;
	public $NomeFantasia_IsLike;
	public $NomeFantasia_IsNotLike;
	public $NomeFantasia_BeginsWith;
	public $NomeFantasia_EndsWith;
	public $NomeFantasia_GreaterThan;
	public $NomeFantasia_GreaterThanOrEqual;
	public $NomeFantasia_LessThan;
	public $NomeFantasia_LessThanOrEqual;
	public $NomeFantasia_In;
	public $NomeFantasia_IsNotEmpty;
	public $NomeFantasia_IsEmpty;
	public $NomeFantasia_BitwiseOr;
	public $NomeFantasia_BitwiseAnd;
	public $RazaoSocial_Equals;
	public $RazaoSocial_NotEquals;
	public $RazaoSocial_IsLike;
	public $RazaoSocial_IsNotLike;
	public $RazaoSocial_BeginsWith;
	public $RazaoSocial_EndsWith;
	public $RazaoSocial_GreaterThan;
	public $RazaoSocial_GreaterThanOrEqual;
	public $RazaoSocial_LessThan;
	public $RazaoSocial_LessThanOrEqual;
	public $RazaoSocial_In;
	public $RazaoSocial_IsNotEmpty;
	public $RazaoSocial_IsEmpty;
	public $RazaoSocial_BitwiseOr;
	public $RazaoSocial_BitwiseAnd;
	public $Cnpj_Equals;
	public $Cnpj_NotEquals;
	public $Cnpj_IsLike;
	public $Cnpj_IsNotLike;
	public $Cnpj_BeginsWith;
	public $Cnpj_EndsWith;
	public $Cnpj_GreaterThan;
	public $Cnpj_GreaterThanOrEqual;
	public $Cnpj_LessThan;
	public $Cnpj_LessThanOrEqual;
	public $Cnpj_In;
	public $Cnpj_IsNotEmpty;
	public $Cnpj_IsEmpty;
	public $Cnpj_BitwiseOr;
	public $Cnpj_BitwiseAnd;
	public $Email_Equals;
	public $Email_NotEquals;
	public $Email_IsLike;
	public $Email_IsNotLike;
	public $Email_BeginsWith;
	public $Email_EndsWith;
	public $Email_GreaterThan;
	public $Email_GreaterThanOrEqual;
	public $Email_LessThan;
	public $Email_LessThanOrEqual;
	public $Email_In;
	public $Email_IsNotEmpty;
	public $Email_IsEmpty;
	public $Email_BitwiseOr;
	public $Email_BitwiseAnd;
	public $Telefone_Equals;
	public $Telefone_NotEquals;
	public $Telefone_IsLike;
	public $Telefone_IsNotLike;
	public $Telefone_BeginsWith;
	public $Telefone_EndsWith;
	public $Telefone_GreaterThan;
	public $Telefone_GreaterThanOrEqual;
	public $Telefone_LessThan;
	public $Telefone_LessThanOrEqual;
	public $Telefone_In;
	public $Telefone_IsNotEmpty;
	public $Telefone_IsEmpty;
	public $Telefone_BitwiseOr;
	public $Telefone_BitwiseAnd;
	public $Cep_Equals;
	public $Cep_NotEquals;
	public $Cep_IsLike;
	public $Cep_IsNotLike;
	public $Cep_BeginsWith;
	public $Cep_EndsWith;
	public $Cep_GreaterThan;
	public $Cep_GreaterThanOrEqual;
	public $Cep_LessThan;
	public $Cep_LessThanOrEqual;
	public $Cep_In;
	public $Cep_IsNotEmpty;
	public $Cep_IsEmpty;
	public $Cep_BitwiseOr;
	public $Cep_BitwiseAnd;
	public $Endereco_Equals;
	public $Endereco_NotEquals;
	public $Endereco_IsLike;
	public $Endereco_IsNotLike;
	public $Endereco_BeginsWith;
	public $Endereco_EndsWith;
	public $Endereco_GreaterThan;
	public $Endereco_GreaterThanOrEqual;
	public $Endereco_LessThan;
	public $Endereco_LessThanOrEqual;
	public $Endereco_In;
	public $Endereco_IsNotEmpty;
	public $Endereco_IsEmpty;
	public $Endereco_BitwiseOr;
	public $Endereco_BitwiseAnd;
	public $Bairro_Equals;
	public $Bairro_NotEquals;
	public $Bairro_IsLike;
	public $Bairro_IsNotLike;
	public $Bairro_BeginsWith;
	public $Bairro_EndsWith;
	public $Bairro_GreaterThan;
	public $Bairro_GreaterThanOrEqual;
	public $Bairro_LessThan;
	public $Bairro_LessThanOrEqual;
	public $Bairro_In;
	public $Bairro_IsNotEmpty;
	public $Bairro_IsEmpty;
	public $Bairro_BitwiseOr;
	public $Bairro_BitwiseAnd;
	public $Complemento_Equals;
	public $Complemento_NotEquals;
	public $Complemento_IsLike;
	public $Complemento_IsNotLike;
	public $Complemento_BeginsWith;
	public $Complemento_EndsWith;
	public $Complemento_GreaterThan;
	public $Complemento_GreaterThanOrEqual;
	public $Complemento_LessThan;
	public $Complemento_LessThanOrEqual;
	public $Complemento_In;
	public $Complemento_IsNotEmpty;
	public $Complemento_IsEmpty;
	public $Complemento_BitwiseOr;
	public $Complemento_BitwiseAnd;
	public $Cidade_Equals;
	public $Cidade_NotEquals;
	public $Cidade_IsLike;
	public $Cidade_IsNotLike;
	public $Cidade_BeginsWith;
	public $Cidade_EndsWith;
	public $Cidade_GreaterThan;
	public $Cidade_GreaterThanOrEqual;
	public $Cidade_LessThan;
	public $Cidade_LessThanOrEqual;
	public $Cidade_In;
	public $Cidade_IsNotEmpty;
	public $Cidade_IsEmpty;
	public $Cidade_BitwiseOr;
	public $Cidade_BitwiseAnd;
	public $Estado_Equals;
	public $Estado_NotEquals;
	public $Estado_IsLike;
	public $Estado_IsNotLike;
	public $Estado_BeginsWith;
	public $Estado_EndsWith;
	public $Estado_GreaterThan;
	public $Estado_GreaterThanOrEqual;
	public $Estado_LessThan;
	public $Estado_LessThanOrEqual;
	public $Estado_In;
	public $Estado_IsNotEmpty;
	public $Estado_IsEmpty;
	public $Estado_BitwiseOr;
	public $Estado_BitwiseAnd;
	public $Representante_Equals;
	public $Representante_NotEquals;
	public $Representante_IsLike;
	public $Representante_IsNotLike;
	public $Representante_BeginsWith;
	public $Representante_EndsWith;
	public $Representante_GreaterThan;
	public $Representante_GreaterThanOrEqual;
	public $Representante_LessThan;
	public $Representante_LessThanOrEqual;
	public $Representante_In;
	public $Representante_IsNotEmpty;
	public $Representante_IsEmpty;
	public $Representante_BitwiseOr;
	public $Representante_BitwiseAnd;

}

?>