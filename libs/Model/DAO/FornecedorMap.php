<?php
/** @package    U506861159Almoxarifado::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/IDaoMap.php");
require_once("verysimple/Phreeze/IDaoMap2.php");

/**
 * FornecedorMap is a static class with functions used to get FieldMap and KeyMap information that
 * is used by Phreeze to map the FornecedorDAO to the fornecedor datastore.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * You can override the default fetching strategies for KeyMaps in _config.php.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package U506861159Almoxarifado::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class FornecedorMap implements IDaoMap, IDaoMap2
{

	private static $KM;
	private static $FM;
	
	/**
	 * {@inheritdoc}
	 */
	public static function AddMap($property,FieldMap $map)
	{
		self::GetFieldMaps();
		self::$FM[$property] = $map;
	}
	
	/**
	 * {@inheritdoc}
	 */
	public static function SetFetchingStrategy($property,$loadType)
	{
		self::GetKeyMaps();
		self::$KM[$property]->LoadType = $loadType;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetFieldMaps()
	{
		if (self::$FM == null)
		{
			self::$FM = Array();
			self::$FM["IdFornecedor"] = new FieldMap("IdFornecedor","fornecedor","id_fornecedor",true,FM_TYPE_INT,11,null,true);
			self::$FM["NomeFantasia"] = new FieldMap("NomeFantasia","fornecedor","nome_fantasia",false,FM_TYPE_VARCHAR,255,null,false);
			self::$FM["RazaoSocial"] = new FieldMap("RazaoSocial","fornecedor","razao_social",false,FM_TYPE_VARCHAR,255,null,false);
			self::$FM["Cnpj"] = new FieldMap("Cnpj","fornecedor","cnpj",false,FM_TYPE_VARCHAR,50,null,false);
			self::$FM["Email"] = new FieldMap("Email","fornecedor","email",false,FM_TYPE_VARCHAR,50,null,false);
			self::$FM["Telefone"] = new FieldMap("Telefone","fornecedor","telefone",false,FM_TYPE_VARCHAR,50,null,false);
			self::$FM["Cep"] = new FieldMap("Cep","fornecedor","cep",false,FM_TYPE_VARCHAR,10,null,false);
			self::$FM["Endereco"] = new FieldMap("Endereco","fornecedor","endereco",false,FM_TYPE_VARCHAR,255,null,false);
			self::$FM["Bairro"] = new FieldMap("Bairro","fornecedor","bairro",false,FM_TYPE_VARCHAR,50,null,false);
			self::$FM["Complemento"] = new FieldMap("Complemento","fornecedor","complemento",false,FM_TYPE_VARCHAR,50,null,false);
			self::$FM["Cidade"] = new FieldMap("Cidade","fornecedor","cidade",false,FM_TYPE_VARCHAR,255,null,false);
			self::$FM["Estado"] = new FieldMap("Estado","fornecedor","estado",false,FM_TYPE_VARCHAR,50,null,false);
			self::$FM["Representante"] = new FieldMap("Representante","fornecedor","representante",false,FM_TYPE_VARCHAR,50,null,false);
		}
		return self::$FM;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetKeyMaps()
	{
		if (self::$KM == null)
		{
			self::$KM = Array();
		}
		return self::$KM;
	}

}

?>