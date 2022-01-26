# RetrochargeEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**retrochargeEventType** | **string** | The type of event.  Possible values:  * Retrocharge  * RetrochargeReversal | [optional] 
**amazonOrderId** | **string** | An Amazon-defined identifier for an order. | [optional] 
**postedDate** | [**\B1\AmazonSPAPI\Model\\DateTime**](\DateTime.md) | The date and time when the financial event was posted. | [optional] 
**baseTax** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The base tax associated with the retrocharge event. | [optional] 
**shippingTax** | [**\B1\AmazonSPAPI\Model\Currency**](Currency.md) | The shipping tax associated with the retrocharge event. | [optional] 
**marketplaceName** | **string** | The name of the marketplace where the retrocharge event occurred. | [optional] 
**retrochargeTaxWithheldList** | [**\B1\AmazonSPAPI\Model\TaxWithheldComponentList**](TaxWithheldComponentList.md) | A list of information about taxes withheld. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


