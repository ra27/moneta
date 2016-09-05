<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Фильтр, по которому ищем операции.
	 * Filtering criteria.
	 * 
 */
class FindOperationsListRequestFilter
{
	
	/**
	 * ID пользователя в системе МОНЕТА.РУ.
	 * Unique identifier of the user in MONETA.RU.
	 * 
	 *
	 * @var long
	 */
	 public $unitId = null;

	/**
	 * Номер счета.
	 * Account number.
	 * 
	 *
	 * @var long
	 */
	 public $accountId = null;

	/**
	 * Дата начала периода.
	 * The start date of the period.
	 * 
	 *
	 * @var dateTime
	 */
	 public $dateFrom = null;

	/**
	 * Дата конца периода.
	 * The end date of the period.
	 * 
	 *
	 * @var dateTime
	 */
	 public $dateTo = null;

	/**
	 * Номер операции в системе МОНЕТА.РУ.
	 * MONETA.RU transaction ID.
	 * 
	 *
	 * @var long
	 */
	 public $operationId = null;

	/**
	 * Сумма от... Ищутся все операции, которые проходили на большую или равную сумму.
	 * Если указано это поле, то обязательно надо заполнить Currency.
	 * Minimum transaction amount.
	 * If you include this element, you must also add the currencyCode filter parameter.
	 * 
	 *
	 * @var decimal
	 */
	 public $amountFrom = null;

	/**
	 * Сумма до... Ищутся все операции, которые проходили на меньшую или равную сумму.
	 * Если указано это поле, то обязательно надо заполнить Currency.
	 * Maximum transaction amount.
	 * If you include this element, you must also add the currencyCode filter parameter.
	 * 
	 *
	 * @var decimal
	 */
	 public $amountTo = null;

	/**
	 * Валюта, по которой проходили операции.
	 * Transaction currency.
	 * 
	 *
	 * @var string
	 */
	 public $currencyCode = null;

	/**
	 * Корреспонденский номер счета в системе МОНЕТА.РУ.
	 * Correspondent account number in MONETA.RU.
	 * 
	 *
	 * @var long
	 */
	 public $targetAccountId = null;

	/**
	 * Статус операции.
	 * Transaction status.
	 * 
	 *
	 * @var string
	 */
	 public $operationStatus = null;

	/**
	 * Внешний номер операции.
	 * Merchant transaction ID.
	 * 
	 *
	 * @var string
	 */
	 public $clientTransaction = null;

	/**
	 * 1. Все операции.
	 * 2. Операции, где деньги были получены (сумма > 0).
	 * 3. Операции, где деньги были потрачены (сумма < 0).
	 * Specifies whether the transaction is debit or credit. Valid values are:
	 * 1. Both credit and debit operations.
	 * 2. Credit operations.
	 * 3. Debit operations.
	 * 
	 *
	 * @var int
	 */
	 public $operationAmountTypeId = null;

	/**
	 * Название свойства операции. Может принимать следующие значения:
	 * YANDEXACCOUNT. Счет в системе Яндекс.Деньги.
	 * WEBMONEYWMID. WebMoney WMID.
	 * WEBMONEYPURSE. WebMoney кошелек.
	 * CONTACTTRANSFERORDERNUMBER. Номер перевода в системе Contact.
	 * WIRETRANSFERORDERNUMBER. Номер платежного поручения в банковском переводе.
	 * Значение свойства указывается в поле propertyValue.
	 * Additional operationInfo attributes of transactions. Valid attributes are:
	 * ALFAIDCLIENT. Specifies an AlfaBank client ID.
	 * ALFAIDINVOICE. Specifies an AlfaBank invoice ID.
	 * CARDNUMBER. Specifies the card number of the payer.
	 * CONTACTTRANSFERORDERNUMBER. Specifies the transfer order number in the Contact payment system.
	 * CYBERPLATTRANSID. Specifies a Cyberplat transaction ID.
	 * DESCRIPTION. Specifies a description for the transaction.
	 * DMRBUYEREMAIL. Specifies an email address of a client in dengi@mail.ru payment system.
	 * MOSCOWBANKRRN. Specifies an RRN transaction number in Moscow Bank.
	 * PARENTID. Specifies the parent transaction ID.
	 * PAYEECARDNUMBER. Specifies the card number of the payee.
	 * PAYMENTTOKEN. Specifies a payment token.
	 * QIWIPHONE. Specifies the phone number of a QIWI payment system user.
	 * RAPIDATID. Specifies a Rapida TID.
	 * SBERBANKRECEIPT. Specifies a Sberbank transaction ID.
	 * SBSEVKAVRECEIPT. Specifies a Sberbank SK transaction ID.
	 * SUBPROVIDERID. Specifies a provider ID of service payment.
	 * SUBSCRIBERID. Specifies a subscriber ID.
	 * TELEPAYTXNID. Specifies a transaction ID in the TelePay payment system.
	 * WEBMONEYPURSE. Specifies the WMR purse number of the specified user.
	 * WEBMONEYWMID. Specifies the identifier of a WebMoney user (WMID).
	 * WIREDOCINDEX. Specifies a unique identifier of charges.
	 * WIRETRANSFERORDERNUMBER. Specifies the number of the bank wired transfer order.
	 * YANDEXPAYERCODE. Specifies the Yandex Money wallet number of the payer.
	 * YANDEXACCOUNT. Specifies the Yandex Money wallet number of the payee.
	 * Use the propertyValue element to specify the values of these additional attributes.
	 * 
	 *
	 * @var string
	 */
	 public $propertyName = null;

	/**
	 * Значение свойства операции.
	 * Поиск происходит по прямому совпадению. Для задания маски можно указать спец-символы - "*" или "?".
	 * Specifies a value for the additional transaction attribute that is specified by the propertyName element.
	 * The response includes transactions which additional attribute values match the filter. You can use the following wildcards to specify masks: asterisk (*) and question mark (?).
	 * 
	 *
	 * @var string
	 */
	 public $propertyValue = null;

	/**
	 * 1 ввод средств
	 * 2 вывод средств
	 * 3 внутренний перевод
	 * 4 товары и услуги
	 * Specifies the category of the transaction. Valid values are:
	 * 1 for deposit
	 * 2 for withdrawal
	 * 3 for transfer
	 * 4 for goods and services
	 * 
	 *
	 * @var long
	 */
	 public $operationCategoryId = null;

	/**
	 * Дата расчетного периода.
	 * Settling date.
	 * 
	 *
	 * @var dateTime
	 */
	 public $accountingPeriodDate = null;

	/**
	 * Поиск операций в архиве.
	 * Indicates whether to search for archived transactions.
	 * 
	 *
	 * @var boolean
	 */
	 public $searchInArchive = null;

}