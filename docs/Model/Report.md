# Report

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplaceIds** | **string[]** | A list of marketplace identifiers for the report. | [optional] 
**reportId** | **string** | The identifier for the report. This identifier is unique only in combination with a seller ID. | 
**reportType** | **string** | The report type. | 
**dataStartTime** | [**\DateTime**](\DateTime.md) | The start of a date and time range used for selecting the data to report. | [optional] 
**dataEndTime** | [**\DateTime**](\DateTime.md) | The end of a date and time range used for selecting the data to report. | [optional] 
**reportScheduleId** | **string** | The identifier of the report schedule that created this report (if any). This identifier is unique only in combination with a seller ID. | [optional] 
**createdTime** | [**\DateTime**](\DateTime.md) | The date and time when the report was created. | 
**processingStatus** | **string** | The processing status of the report. | 
**processingStartTime** | [**\DateTime**](\DateTime.md) | The date and time when the report processing started, in ISO 8601 date time format. | [optional] 
**processingEndTime** | [**\DateTime**](\DateTime.md) | The date and time when the report processing completed, in ISO 8601 date time format. | [optional] 
**reportDocumentId** | **string** | The identifier for the report document. Pass this into the getReportDocument operation to get the information you will need to retrieve the report document&#39;s contents. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


