<?php
/** @package    Almoxarifado::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/IDaoMap.php");
require_once("verysimple/Phreeze/IDaoMap2.php");

/**
 * UsuarioMap is a static class with functions used to get FieldMap and KeyMap information that
 * is used by Phreeze to map the UsuarioDAO to the usuario datastore.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * You can override the default fetching strategies for KeyMaps in _config.php.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Almoxarifado::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class UsuarioMap implements IDaoMap, IDaoMap2
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
			self::$FM["IdUsuario"] = new FieldMap("IdUsuario","usuario","id_usuario",true,FM_TYPE_INT,11,null,true);
			self::$FM["Nome"] = new FieldMap("Nome","usuario","nome",false,FM_TYPE_VARCHAR,50,null,false);
			self::$FM["NMatricula"] = new FieldMap("NMatricula","usuario","n_matricula",false,FM_TYPE_VARCHAR,50,null,false);
			self::$FM["Email"] = new FieldMap("Email","usuario","email",false,FM_TYPE_VARCHAR,50,null,false);
			self::$FM["Login"] = new FieldMap("Login","usuario","login",false,FM_TYPE_VARCHAR,50,null,false);
			self::$FM["Senha"] = new FieldMap("Senha","usuario","senha",false,FM_TYPE_VARCHAR,50,null,false);
			self::$FM["NivelAcesso"] = new FieldMap("NivelAcesso","usuario","nivel_acesso",false,FM_TYPE_VARCHAR,50,null,false);
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