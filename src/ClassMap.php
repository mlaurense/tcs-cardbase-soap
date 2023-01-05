<?php

declare(strict_types=1);
/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'ActivateRequest' => '\\StructType\\ActivateRequest',
            'CardIdentifier' => '\\StructType\\CardIdentifier',
            'Money' => '\\StructType\\Money',
            'PointOfSaleIdentifier' => '\\StructType\\PointOfSaleIdentifier',
            'ActivateResponse' => '\\StructType\\ActivateResponse',
            'Card' => '\\StructType\\Card',
            'CardProperties' => '\\StructType\\CardProperties',
            'Product' => '\\StructType\\Product',
            'EanList' => '\\StructType\\EanList',
            'ValueRange' => '\\StructType\\ValueRange',
            'CardInfoRequest' => '\\StructType\\CardInfoRequest',
            'CardInfoResponse' => '\\StructType\\CardInfoResponse',
            'ChangeExpireDateRequest' => '\\StructType\\ChangeExpireDateRequest',
            'ChangeExpireDateResponse' => '\\StructType\\ChangeExpireDateResponse',
            'ChangeProductRequest' => '\\StructType\\ChangeProductRequest',
            'ChangeProductResponse' => '\\StructType\\ChangeProductResponse',
            'CheckRequest' => '\\StructType\\CheckRequest',
            'CheckResponse' => '\\StructType\\CheckResponse',
            'CustomerInfoRequest' => '\\StructType\\CustomerInfoRequest',
            'CustomerInfoResponse' => '\\StructType\\CustomerInfoResponse',
            'ArrayOfCard' => '\\ArrayType\\ArrayOfCard',
            'FetchRequest' => '\\StructType\\FetchRequest',
            'FetchResponse' => '\\StructType\\FetchResponse',
            'Ping' => '\\StructType\\Ping',
            'Pong' => '\\StructType\\Pong',
            'RefillRequest' => '\\StructType\\RefillRequest',
            'RefillResponse' => '\\StructType\\RefillResponse',
            'RefundRequest' => '\\StructType\\RefundRequest',
            'RefundResponse' => '\\StructType\\RefundResponse',
            'RollbackRequest' => '\\StructType\\RollbackRequest',
            'RollbackResponse' => '\\StructType\\RollbackResponse',
            'SuspendRequest' => '\\StructType\\SuspendRequest',
            'SuspendResponse' => '\\StructType\\SuspendResponse',
            'TransactionHistoryRequest' => '\\StructType\\TransactionHistoryRequest',
            'TransactionHistoryResponse' => '\\StructType\\TransactionHistoryResponse',
            'ArrayOfTransaction' => '\\ArrayType\\ArrayOfTransaction',
            'Transaction' => '\\StructType\\Transaction',
            'UnsuspendRequest' => '\\StructType\\UnsuspendRequest',
            'UnsuspendResponse' => '\\StructType\\UnsuspendResponse',
            'VoidActivateRequest' => '\\StructType\\VoidActivateRequest',
            'VoidActivateResponse' => '\\StructType\\VoidActivateResponse',
            'WithdrawRequest' => '\\StructType\\WithdrawRequest',
            'CategoryList' => '\\StructType\\CategoryList',
            'WithdrawResponse' => '\\StructType\\WithdrawResponse',
        ];
    }
}
