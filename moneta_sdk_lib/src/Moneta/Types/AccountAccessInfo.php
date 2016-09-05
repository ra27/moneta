<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Тип, описывающий доступ к счету.
	 * Provides information about delegated access to a merchant account.
	 * 
 */
class AccountAccessInfo
{
	
	/**
	 * Доступ на изменение свойств счета.
	 * Access for changing account settings.
	 * 
	 *
	 * @var boolean
	 */
	 public $accessToWrite = null;

	/**
	 * Доступ на снятие средств со счета.
	 * Access for transferring funds from the account.
	 * 
	 *
	 * @var boolean
	 */
	 public $accessToTakenOut = null;

	/**
	 * Доступ на зачисление средств на счет.
	 * Access for transferring funds to the account.
	 * 
	 *
	 * @var boolean
	 */
	 public $accessToTakenIn = null;

}
