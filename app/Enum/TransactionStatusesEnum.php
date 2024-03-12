<?php

namespace App\Enum;

enum TransactionStatusesEnum:string
{
	case PAYMENT_INTENT_AMOUNT_CAPTURABLE_UPDATED = 'payment_intent.amount_capturable_updated';
	case PAYMENT_INTENT_CANCELED = 'payment_intent.canceled';
	case PAYMENT_INTENT_CREATED = 'payment_intent.created';
	case PAYMENT_INTENT_PARTIALLY_FUNDED = 'payment_intent.partially_funded';
	case PAYMENT_INTENT_PAYMENT_FAILED = 'payment_intent.payment_failed';
	case PAYMENT_INTENT_SUCCESS_PROCESSING = 'payment_intent.processing';
	case PAYMENT_INTENT_REQUIRES_ACTION = 'payment_intent.requires_action';
	case PAYMENT_INTENT_SUCCEEDED = 'payment_intent.succeeded';
}
